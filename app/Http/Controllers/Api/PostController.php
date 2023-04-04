<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;
use App\Models\Category;
use App\Models\Announcement;

class PostController extends Controller
{
         
    public function topics()
    {

        $query = Post::query();

        if(request()->filled('post_type')){
            $query->where('post_type', request('post_type'))->get(); 
        }

        if( request()->filled('offset') ){
            $query->offset( request('offset') );
        }

        $query->limit( request('limit') ?? 10 );

        $data['posts'] = $query->orderBy('created_at', 'desc')->get()->makeHidden(['content', 'meta_title', 'meta_desc', 'highlights', 'pivot']);

        foreach($data['posts'] as $key => $post){
            $post['topics'] = $post->topics()->select(['title', 'slug'])->get()->makeHidden(['pivot']);

            $post['featured_image'] = $post->postmeta()->select(['meta_value'])->where('meta_key', '_featured_image')->get();
            if(count($post['featured_image']) == 0){
                $post['featured_image'] = array(['meta_value'=> 'd-post.jpeg']);
            }

            // $post['postmeta'] = $post->postmeta()->first(['meta_key', 'meta_value']);
        }
        // $query = Topic::query();

        // if(request()->filled('title')){
        //     $query->where('title', request('title'))->get(); 
        // }

        // if( request()->filled('offset') ){
        //     $query->offset( request('offset') );
        // }

        // $query->limit( request('limit') ?? 10 );

        // // parents
        // $data['topics'] = $query->where('is_parent', 1)->orderBy('created_at', 'desc')->get();

        // // children
        // foreach($data['topics'] as $key => $topic){
        //     $topic['child_topics'] = Topic::where('is_parent', 0)->where('parent_id', $topic->id)->whereHas('posts')->get();
        // }

        $data['topics_filter'] =  Topic::select(['title', 'slug'])->where('is_parent', 0)->whereHas('posts')->get();

        $data['topics_ads'] = Announcement::where('place', 'topics')->orWhere('place', '1')->get();

        return response()->json($data);
    }

    public function topic($slug)
    {
        $query = Topic::query();

        $data['topic'] = Topic::where('slug', $slug)->first(["id", "title"]);

        $data['topic']['posts'] = $data['topic']->posts()->get()->makeHidden(['content', 'meta_title', 'meta_desc', 'highlights', 'pivot']);   

        foreach($data['topic']['posts'] as $key => $post){
            $post['topics'] = $post->topics()->select(['title', 'slug'])->get()->makeHidden(['pivot']);

            $post['featured_image'] = $post->postmeta()->select(['meta_value'])->where('meta_key', '_featured_image')->get();
            if(count($post['featured_image']) == 0){
                $post['featured_image'] = array(['meta_value'=> 'd-post.jpeg']);
            }

        //    $post['postmeta'] = $post->postmeta()->first(['meta_key', 'meta_value']);
        }

        $data['topics_filter'] =  Topic::select(['title', 'slug'])->where('is_parent', 0)->where('id', '!=', $data['topic']->id)->whereHas('posts')->get();

        $data['topics_ads'] = Announcement::where('place', 'topics')->get();

        return response()->json($data);
    }

    public function posts()
    {
        $query = Post::query();

        if(request()->filled('post_type')){
            $query->where('post_type', request('post_type'))->get(); 
        }

        if(request()->filled('category')){
            $query->whereHas('categories', function($q) {
                $q->where('slug', 'like', '%' . request('category') . '%');
            });
        }

        if (request()->filled('search')) {
            $query
            ->where('title', 'LIKE', '%' . request('search') . '%')
            ->orWhere('slug', 'like', '%' . request('search') . '%')
            ->orWhere('excerpt', 'like', '%' . request('search') . '%')
            ->orWhere('content', 'like', '%' . request('search') . '%')
            ->orWhere('author', 'like', '%' . request('search') . '%')
            ->orWhere('post_type', 'like', '%' . request('search') . '%')
            ->orWhereHas('topics', function($q){
                $q->where('title', 'like', '%' . request('search') . '%');
            })
            ->orWhereHas('categories', function($q){
                $q->where('title', 'like', '%' . request('search') . '%');
            });
        }

        if( request()->filled('offset') ){
            $query->offset( request('offset') );
        }

        $query->limit( request('limit') ?? 10 );

        $data['posts'] = $query->orderBy('created_at', 'desc')->get()->makeHidden(['content', 'meta_title', 'meta_desc', 'highlights', 'pivot']);

        foreach($data['posts'] as $key => $post){
            $post['topics'] = $post->topics()->select(['title', 'slug'])->get()->makeHidden(['pivot']);
            // $post['postmeta'] = $post->postmeta()->first(['meta_key', 'meta_value']);

            $post['featured_image'] = $post->postmeta()->select(['meta_value'])->where('meta_key', '_featured_image')->get();
            if(count($post['featured_image']) == 0){
                $post['featured_image'] = array(['meta_value'=> 'd-post.jpeg']);
            }
            $post['categories'] = $post->categories()->select(['title', 'slug'])->where('post_type', request('post_type'))->get()->makeHidden(['pivot']);

        }
        
        if(request()->filled('category'))
        {
            $data['categories_filter'] = Category::select(['title', 'slug'])->where('post_type', request('post_type'))->where('slug', '!=', request('category'))->whereHas('posts')->get();
        }
        else{
            $data['categories_filter'] = Category::select(['title', 'slug'])->where('post_type', request('post_type'))->whereHas('posts')->get();
        }
        
        $data[request('post_type').'_ads'] = Announcement::where('place', request('post_type'))->get();

        return response()->json($data);
    }

    public function post($slug)
    {
        $query = Post::query();

        $data['post'] = $query->where('slug', $slug)->first(['id', 'title', 'slug', 'content', 'author', 'post_type']);
        // $data['post']['postmeta'] = $data['post']->postmeta()->first(['meta_key', 'meta_value']);
        
        $data['post']['featured_image'] = $data['post']->postmeta()->select(['meta_value'])->where('meta_key', '_featured_image')->get();
        if(count($data['post']['featured_image']) == 0){
            $data['post']['featured_image'] = array(['meta_value'=> 'd-post.jpeg']);
        }
        $data['post']['key_points'] = $data['post']->postmeta()->select(['meta_value'])->where('meta_key', '_key_points')->get();
        $data['post']['pdf'] = $data['post']->postmeta()->select(['meta_value'])->where('meta_key', '_pdf')->get();
        $data['post']['sound'] = $data['post']->postmeta()->select(['meta_value'])->where('meta_key', '_sound')->get();
        $data['post']['youtube_video'] = $data['post']->postmeta()->select(['meta_value'])->where('meta_key', '_youtube_video')->get();
        $data['post']['script'] = $data['post']->postmeta()->select(['meta_value'])->where('meta_key', '_script')->get();

        $data['post']['topics'] = $data['post']->topics()->select(['title', 'slug'])->get()->makeHidden(['pivot']);

        $data[$data['post']->post_type.'_ads'] = Announcement::where('place', $data['post']->post_type)->get();

        return response()->json($data);
    }
}
