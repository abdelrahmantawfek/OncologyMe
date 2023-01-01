<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Postmeta;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        /** @var Post $posts */
        $posts = Post::orderBy('created_at', 'DESC')->where('post_type', 'articles')->paginate(10);
        $all_topics = Topic::where('is_parent', 0)->get();
        $categories = Category::where('post_type', 'articles')->get();
        return view('admin.articles.index', compact('posts', 'all_topics', 'categories'));
    }

    public function create()
    {
        $all_topics = Topic::where('is_parent', 0)->get();
        $categories = Category::where('post_type', 'articles')->get();
        return view('admin.articles.create', compact('all_topics', 'categories'));
    }

    public function store(Request $request)
    {
        // $input = $request->all();
        $input = $request->validate([
            'title' => 'required',
            // 'slug' => 'nullable|unique:posts',
            // 'pdf' => 'required',
            // 'key_points' => 'required',
            // 'content' => 'required',
            // 'excerpt' => 'required',
            // 'author' => 'required',
            // 'meta_title' => 'required',
            // 'meta_desc' => 'required',
        ]);

        // dd($input);
        DB::beginTransaction();

        $slug = $request->slug;
        $post = Post::create([
            'title' => $request->title,
            'slug' => preg_replace('/[^A-Za-z0-9\-]/', '-', $request->slug),
            'content' => $request->content,
            'excerpt' => $request->excerpt,
            'author' => $request->author,
        ]);

        $old_slug = Post::where('slug', strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title)))->exists();
        if(is_null($slug)){
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $request->title .  ' ' . $val;
                    $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Category::where('slug', $categ_slug)->exists());
            }
            else{
                $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title));
            }
            $post->slug = $categ_slug;
        }
        if(is_null($slug)){
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $request->title .  ' ' . $val;
                    $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Post::where('slug', $categ_slug)->exists());
            }
            else{
                $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title));
            }
            $post->slug = $categ_slug;
        }
        else{
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $slug .  ' ' . $val;
                    $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Post::where('slug', $categ_slug)->exists());
                $post->slug = $categ_slug;
            }
            else{
                $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $slug));
                $post->slug = $categ_slug;
            }
        }

        $post->post_type = 'articles';
        $post->save();

       
        $featured_image = $request->validate(['image' => 'mimes:jpg,png|max:5048']);
        $pdf = $request->validate(['pdf' => 'mimes:pdf|max:5048']);

        $image = $request->file('image');

        if ($image) {

            $originalName = $image->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $image->move('uploads/', $fileName);
            $this->attributes['image'] = $fileName;

            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_featured_image',
                'meta_value' => $fileName,
            ]);
            $post_meta->save();
        }

        $file = $request->file('pdf');

        if ($file) {

            $originalName = $file->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $file->move('uploads/', $fileName);
            $this->attributes['pdf'] = $fileName;

            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_pdf',
                'meta_value' => $fileName,
            ]);
            $post_meta->save();
        }

        
        if($request->key_points){
            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_key_points',
                'meta_value' => $request->key_points,
            ]);
            $post_meta->save();
        }

        if($request->topic){
            foreach ($request->topic as $item) {
                 $post->topics()->attach($item);
             }
         }
                 
        if($request->category){
            foreach ($request->category as $item) {
                 $post->categories()->attach($item);
             }
         }

        DB::commit();

        Flash::success('Post saved successfully.');

        return redirect(route('admin.articles.index'));
    }

    public function show($id)
    {
        /** @var Post $topic */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('admin.articles.index'));
        }

        return view('admin.articles.index');
    }

    public function edit($id)
    {
        /** @var Post $Category */
        $post = Post::find($id);
        $all_topics = Topic::where('is_parent', 0)->get();
        $categories = Category::where('post_type', 'articles')->get();
        $keypoints = $post->postmeta->where('meta_key', '_key_points')->pluck('meta_value');
        $featured_image = $post->postmeta->where('meta_key', '_featured_image')->pluck('meta_value');
        $pdf = $post->postmeta->where('meta_key', '_pdf')->pluck('meta_value');
        $selected_topics = $post->topics->pluck('id');
        $selected_cats = $post->categories->pluck('id');
        
        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('admin.articles.index'));
        }

        return view('admin.articles.edit', compact('post', 'all_topics', 'categories', 'featured_image', 'pdf', 'keypoints'));

    }

    public function update($id, Request $request)
    {
        /** @var Topic $Category */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('admin.articles.index'));
        }

        $input = $request->validate([
            'title' => 'required',
            // 'slug' => 'required',
            'slug' => 'unique:posts',
            // 'pdf' => 'required',
            // 'key_points' => 'required',
            // 'content' => 'required',
            // 'excerpt' => 'required',
            // 'author' => 'required',
            // 'meta_title' => 'required',
            // 'meta_desc' => 'required',
        ]);

        // dd($input);
        DB::beginTransaction();

        $slug = $request->slug;
        $post->title = $request->title;
        $post->slug = preg_replace('/[^A-Za-z0-9\-]/', '-', $request->slug);
        $post->content = $request->content;
        $post->excerpt = $request->excerpt;
        $post->author = $request->author;
        $slug = $request->slug;
        $old_slug = Post::where('slug', strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title)))->exists();
        if(is_null($slug)){
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $request->title .  ' ' . $val;
                    $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Post::where('slug', $categ_slug)->exists());
            }
            else{
                $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title));
            }
            $post->slug = $categ_slug;
        }
        else{
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $slug .  ' ' . $val;
                    $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Post::where('slug', $categ_slug)->exists());
                $post->slug = $categ_slug;
            }
            else{
                $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $slug));
                $post->slug = $categ_slug;
            }
        }
        $post->save();

        $post_meta = $post->postmeta;

        $pdf = $request->validate(['pdf' => 'mimes:pdf|max:5048']);
        $featured_image = $request->validate(['image' => 'mimes:jpg,png|max:5048']);

        $image = $request->file('image');

        if ($image) {

            $originalName = $image->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $image->move('uploads/', $fileName);
            $this->attributes['image'] = $fileName;

            $old_meta = Postmeta::where('post_id', $post->id)->where('meta_key', '_featured_image')->first();

            if($old_meta){
                $old_meta->delete();
            }

            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_featured_image',
                'meta_value' => $fileName,
            ]);

            $post_meta->save();

        }
        
        $file = $request->file('pdf');

        if ($file) {

            $originalName = $file->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $file->move('uploads/', $fileName);
            $this->attributes['pdf'] = $fileName;

            $old_meta = Postmeta::where('post_id', $post->id)->where('meta_key', '_pdf')->first();

            if($old_meta){
                $old_meta->delete();
            }
            // dd($old_meta);

            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_pdf',
                'meta_value' => $fileName,
            ]);

        }

        if($request->key_points){

            $old_meta = Postmeta::where('post_id', $post->id)->where('meta_key', '_key_points')->first();

            if($old_meta){
                $old_meta->delete();
            }
            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_key_points',
                'meta_value' => $request->key_points,
            ]);
        }

        if($request->topic){
            foreach ($request->topic as $item) {
                 $post->topics()->attach($item);
             }
         }
                 
        if($request->category){
            foreach ($request->category as $item) {
                 $post->categories()->attach($item);
             }
         }

        DB::commit();

        Flash::success('Post updated successfully.');

        return redirect(route('admin.articles.index'));
    }

    public function destroy($id)
    {
        /** @var Post $Category */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('admin.articles.index'));
        }

        $post->delete();

        Flash::success('Post deleted successfully.');

        return redirect(route('admin.articles.index'));
    }
}
