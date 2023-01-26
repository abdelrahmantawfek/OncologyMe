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

class VideosController extends Controller
{
    public function index(Request $request)
    {
        /** @var Post $posts */
     
        $query = Post::query();
       
        if (request()->filled('search')) {
            $query
            ->where('post_type', 'videos')
            ->where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('slug', 'like', '%' . $request->search . '%');
        }
    
        $data['posts'] = $query->orderBy('created_at', 'DESC')->where('post_type', 'videos')->paginate(10);
        $data['all_topics'] = Topic::where('is_parent', 0)->get();
        $data['categories'] = Category::where('post_type', 'videos')->get();

        return view('admin.videos.index', compact('data'));
    }

    public function create()
    {
        $all_topics = Topic::where('is_parent', 0)->get();
        $categories = Category::where('post_type', 'videos')->get();
        return view('admin.videos.create', compact('all_topics', 'categories'));
    }

    public function store(Request $request)
    {
        // $input = $request->all();
        $input = $request->validate([
            'title' => 'required',
            'slug' => '',
            'pdf' => '',
            'key_points' => '',
            'content' => '',
            'excerpt' => '',
            'author' => '',
            'meta_title' => '',
            'meta_desc' => '',
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
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
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


        $post->post_type = 'videos';
        $post->save();

       
        $featured_image = $request->validate(['image' => 'mimes:jpg,png|max:5048']);
        $pdf = $request->validate(['pdf' => 'mimes:pdf|max:5048']);
        $video = $request->validate(['video' => 'required|mimes:mp4|max:28000']);

        $image = $request->file('image');

        if ($image) {

            $originalName = $image->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $image->move('uploads/', $fileName);

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

            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_pdf',
                'meta_value' => $fileName,
            ]);
            $post_meta->save();
        }

        $vid = $request->file('video');

        if ($vid) {

            $originalName = $vid->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $vid->move('uploads/', $fileName);

            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_video',
                'meta_value' => $fileName,
            ]);
            $post_meta->save();
        }

        if($request->script){
            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_script',
                'meta_value' => $request->script,
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

        Flash::success('Video saved successfully.');

        return redirect(route('admin.videos.index'));
    }

    public function show($id)
    {
        /** @var Post $topic */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error('Video not found');

            return redirect(route('admin.videos.index'));
        }

        return view('admin.videos.index');
    }

    public function edit($id)
    {
        /** @var Post $Category */
        $post = Post::find($id);
        $all_topics = Topic::where('is_parent', 0)->get();
        $categories = Category::where('post_type', 'videos')->get();
        $video = $post->postmeta->where('meta_key', '_video')->pluck('meta_value');
        $video_script = $post->postmeta->where('meta_key', '_script')->pluck('meta_value');
        $featured_image = $post->postmeta->where('meta_key', '_featured_image')->pluck('meta_value');
        $pdf = $post->postmeta->where('meta_key', '_pdf')->pluck('meta_value');
        $selected_topics = $post->topics->pluck('id')->toArray();
        $selected_cats = $post->categories->pluck('id')->toArray();

        if (empty($post)) {
            Flash::error('Video not found');

            return redirect(route('admin.videos.index'));
        }

        return view('admin.videos.edit', compact('post', 'all_topics', 'categories', 'featured_image', 'video', 'video_script', 'pdf', 'selected_topics', 'selected_cats'));
    }

    public function update($id, Request $request)
    {
        /** @var Topic $Category */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error('Video not found');

            return redirect(route('admin.videos.index'));
        }

        $input = $request->validate([
            'title' => 'required',
            'slug' => '',
            'pdf' => '',
            'key_points' => '',
            'content' => '',
            'excerpt' => '',
            'author' => '',
            'meta_title' => '',
            'meta_desc' => '',
        ]);

        // dd($input);
        DB::beginTransaction();

        $slug = $request->slug;
        $post->title = $request->title;
        $post->slug = preg_replace('/[^A-Za-z0-9\-]/', '-', $request->slug);
        $post->content = $request->content;
        $post->excerpt = $request->excerpt;
        $post->author = $request->author;
        $post->meta_title = $request->meta_title;
        $post->meta_desc = $request->meta_desc;
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
        $video = $request->validate(['video' => 'mimes:mp4|max:28000']);

        $image = $request->file('image');

        if ($image) {

            $originalName = $image->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $image->move('uploads/', $fileName);

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

            $old_meta = Postmeta::where('post_id', $post->id)->where('meta_key', '_pdf')->first();

            if($old_meta){
                $old_meta->delete();
            }
            
            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_pdf',
                'meta_value' => $fileName,
            ]);

        }
        
        $vid = $request->file('video');

        if ($vid) {

            $originalName = $vid->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $vid->move('uploads/', $fileName);

            $old_meta = Postmeta::where('post_id', $post->id)->where('meta_key', '_video')->first();

            if($old_meta){
                $old_meta->delete();
            }
            
            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_video',
                'meta_value' => $fileName,
            ]);
        }

        if($request->script){
            $old_meta = Postmeta::where('post_id', $post->id)->where('meta_key', '_script')->first();

            if($old_meta){
                $old_meta->delete();
            }
            
            $post_meta = Postmeta::create([
                'post_id' => $post->id,
                'meta_key' => '_script',
                'meta_value' => $request->script,
            ]);
        }

        if($request->topic){
            $post->topics()->detach();
            foreach ($request->topic as $item) {
                $post->topics()->attach($item);
             }
         }
         
         elseif(!$request->topic){
            $post->topics()->detach();
        }
                 
        if($request->category){
            $post->categories()->detach();
            foreach ($request->category as $item) {
                 $post->categories()->attach($item);
             }
        }
        elseif(!$request->category){
            $post->categories()->detach();
        }

        DB::commit();

        Flash::success('Video updated successfully.');

        return redirect(route('admin.videos.index'));
    }

    public function destroy($id)
    {
        /** @var Post $Category */
        $post = Post::find($id);

        if (empty($post)) {
            Flash::error('Video not found');

            return redirect(route('admin.videos.index'));
        }

        $post->delete();

        Flash::success('Video deleted successfully.');

        return redirect(route('admin.videos.index'));
    }
}
