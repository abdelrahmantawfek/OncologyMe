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

class NewsController extends Controller
{
    public function index(Request $request)
    {
        /** @var Post $posts */
        $posts = Post::where('post_type', 'news')->get();
        $all_topics = Topic::where('is_parent', 0)->get();
        $categories = Category::where('post_type', 'news')->get();

        return view('admin.news.index', compact('posts', 'all_topics', 'categories'));
    }

    public function create()
    {
        $all_topics = Topic::where('is_parent', 0)->get();
        $categories = Category::where('post_type', 'news')->get();

        // dd($all_topics);
        return view('admin.news.create', compact('all_topics', 'categories'));
    }

    public function store(Request $request)
    {
        // $input = $request->all();
        $input = $request->validate([
            'title' => 'required',
            // 'slug' => 'required',
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
            'slug' => $request->slug,
            'content' => $request->content,
            'excerpt' => $request->excerpt,
            'author' => $request->author,
        ]);

        if(is_null($slug)){
            $old_slug = Post::where('slug', strtolower(preg_replace('/\s+/', '-', $request->title)))->exists();
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $request->title .  ' ' . $val;
                    $post_slug = strtolower(preg_replace('/\s+/', '-', $new_slug));
                    $val++;
                }
                while(Post::where('slug', $post_slug)->exists());
            }
            else{
                $post_slug = strtolower(preg_replace('/\s+/', '-', $request->title));
            }
           
            $post->slug = $post_slug;
        }

        $post->post_type = 'news';
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

         if($request->highlights){
            $post->highlights = true;
            $post->save();
         }

        DB::commit();

        Flash::success('Post saved successfully.');

        return redirect(route('admin.news.index'));
    }

    public function show($id)
    {
        /** @var Post $topic */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('admin.news.index'));
        }

        return view('admin.news.index');
    }

    public function edit($id)
    {
        /** @var Post $Category */
        $post = Post::find($id);
        $all_topics = Topic::where('is_parent', 0)->get();
        $categories = Category::where('post_type', 'news')->get();

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('admin.news.index'));
        }

        return view('admin.news.edit', compact('post', 'all_topics', 'categories'));
    }

    public function update($id, Request $request)
    {
        /** @var Topic $Category */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('admin.news.index'));
        }

        $input = $request->validate([
            'title' => 'required',
            // 'slug' => 'required',
            'slug' => 'unique:posts',
            // 'pdf' => 'required',
            // 'key_points' => 'required',
            // 'content' => 'required',
            // 'excerpt' => 'required',
            'author' => 'required',
            // 'meta_title' => 'required',
            // 'meta_desc' => 'required',
        ]);

        // dd($input);
        DB::beginTransaction();

        $slug = $request->slug;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->excerpt = $request->excerpt;
        $post->author = $request->author;
        $slug = $request->slug;
        if(is_null($slug)){
            $old_slug = Post::where('slug', strtolower(preg_replace('/\s+/', '-', $request->title)))->exists();
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $request->title .  ' ' . $val;
                    $post_slug = strtolower(preg_replace('/\s+/', '-', $new_slug));
                    $val++;
                }
                while(Post::where('slug', $post_slug)->exists());
            }
            else{
                $post_slug = strtolower(preg_replace('/\s+/', '-', $request->title));
            }
           
            $post->slug = $post_slug;
        }
        $post->save();

        $post_meta = $post->postmeta;

        $pdf = $request->validate(['pdf' => 'mimes:pdf|max:5048']);
        $file = $request->file('pdf');

        if ($file) {

            $originalName = $file->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $file->move('uploads/', $fileName);
            $this->attributes['pdf'] = $fileName;

            $old_pdf = $post_meta->where('meta_key', '_pdf')->first();

            // $old_pdf->update($fileName);
            // dd($post_meta->where('meta_key', '_pdf')->first());

        }

        if($request->key_points){

            // dd($post_meta);
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

        if($request->highlights){
            $post->highlights = true;
            $post->save();
        }
        DB::commit();

        Flash::success('Post updated successfully.');

        return redirect(route('admin.news.index'));
    }

    public function destroy($id)
    {
        /** @var Post $Category */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('admin.news.index'));
        }

        $post->delete();

        Flash::success('Post deleted successfully.');

        return redirect(route('admin.news.index'));
    }
}
