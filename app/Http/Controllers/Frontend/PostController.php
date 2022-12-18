<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
     
    public function post($post_type)
    {
        $data['page'] = Page::with('sections')->find(9);
        $data['posts'] = Post::where('post_type', $post_type)->with('topics')->get();
        $data['post_type'] = Post::where('post_type', $post_type)->pluck('post_type')->toArray();
        $data['categories'] = Category::where('post_type', 'videos')->with('posts.topics')->get();

        if (!in_array($post_type, $data['post_type']) ) {
            abort(404);
        }

        // dd($data['categories']);
        
        return view('frontend.posts', compact('data'));
    }

    public function highlights($post_type)
    {
        $data['highlights'] = Post::where('post_type', 'news')->where('highlights', true)->with('topics', 'postmeta')->get();

        // if (!in_array($post_type, $data['post_type']) ) {
        //     abort(404);
        // }
        
        // return 'asd';
        return view('frontend.highlights', compact('data'));
    }

    public function single_post($post_type, $slug)
    {
        $data['post'] = Post::where('post_type', $post_type)->where('slug', $slug)->with('postmeta', 'topics', 'categories')->get()->first();
        $data['post_type'] = Post::where('post_type', $post_type)->pluck('post_type')->toArray();
        $data['slug'] = Post::where('slug', $slug)->pluck('slug')->toArray();
        $data['pdf'] = $data['post']->postmeta->where('meta_key', '_pdf')->pluck('meta_value');
        $data['key_points'] = $data['post']->postmeta->where('meta_key', '_key_points')->pluck('meta_value');
        $data['sound'] = $data['post']->postmeta->where('meta_key', '_sound')->pluck('meta_value');
        $data['script'] = $data['post']->postmeta->where('meta_key', '_script')->pluck('meta_value');
        $data['video'] = $data['post']->postmeta->where('meta_key', '_video')->pluck('meta_value');
        $post = $data['post'];
        $data['related-posts'] = Post::where('post_type', $post_type)
        ->whereHas('categories', function ($query) use ($post){
            $query->whereIn('slug', $post->categories->pluck('slug'));
           })
        ->where('id', '!=', $post->id)
        ->get();
        
        // dd( $data['related-posts'] );
        if (!in_array($post_type, $data['post_type']) || !in_array($slug, $data['slug']) ) {
            abort(404);
        }
    
        return view('frontend.single', compact('data'));
    }
   
}
