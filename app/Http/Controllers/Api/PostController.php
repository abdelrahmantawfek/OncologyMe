<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;
use App\Models\Category;

class PostController extends Controller
{
         
    public function topics()
    {
        $query = Topic::query();

        if(request()->filled('title')){
            $query->where('title', request('title'))->get(); 
        }

        // parents
        $data['topics'] = $query->where('is_parent', 1)->orderBy('created_at', 'desc')->get();

        // children
        foreach($data['topics'] as $key => $topic){
            $topic['child_topics'] = Topic::where('is_parent', 0)->where('parent_id', $topic->id)->whereHas('posts')->get();
        }

        return response()->json($data);
    }

    public function topic($slug)
    {
        $query = Topic::query();

        $data['topic'] = Topic::where('slug', $slug)->first(["id", "title"]);

        $data['topic']['posts'] = $data['topic']->posts()->get()->makeHidden(['content', 'meta_title', 'meta_desc', 'highlights', 'created_at', 'updated_at', 'pivot']);   

        $data['topics_filter'] =  Topic::select(['title', 'slug'])->where('is_parent', 0)->where('id', '!=', $data['topic']->id)->whereHas('posts')->get();

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

        if( request()->filled('offset') ){
            $query->offset( request('offset') );
        }

        $query->limit( request('limit') ?? 10 );

        $data['posts'] = $query->orderBy('created_at', 'desc')->get()->makeHidden(['content', 'meta_title', 'meta_desc', 'highlights', 'created_at', 'updated_at', 'pivot']);

        foreach($data['posts'] as $key => $post){
            $post['topics'] = $post->topics()->select(['title', 'slug'])->get()->makeHidden(['pivot']);
        }

        foreach($data['posts'] as $key => $post){
            $post['categories'] = $post->categories()->select(['title', 'slug'])->where('post_type', request('post_type'))->get()->makeHidden(['pivot']);
        }
        
       if(request()->filled('category'))
        {
            $data['categories_filter'] = Category::select(['title', 'slug'])->where('post_type', request('post_type'))->where('slug', '!=', request('category'))->whereHas('posts')->get();
        }
        else{
            $data['categories_filter'] = Category::select(['title', 'slug'])->where('post_type', request('post_type'))->whereHas('posts')->get();
        }
        
        return response()->json($data);
    }

    public function post($slug)
    {
        $query = Post::query();

        $data['post'] = $query->where('slug', $slug)->first(['id', 'title', 'slug', 'content', 'author', 'post_type', 'meta_title', 'meta_desc']);
        $data['post']['topics'] = $data['post']->topics()->select(['title', 'slug'])->get()->makeHidden(['pivot']);

        return response()->json($data);
    }
}
