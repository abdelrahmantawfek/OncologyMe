<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;

class PostController extends Controller
{

    public function topics()
    {
        $query = Topic::query();

        if(request()->filled('title')){
            $query->where('title', request('title'))->get(); 
        }

        if( request()->filled('offset') ){
            $query->offset( request('offset') );
        }

        $query->limit( request('limit') ?? 10 );

        $data['topics'] = $query->with('posts')->whereHas('posts')->orderBy('created_at', 'desc')->get();

        foreach($data['topics'] as $key => $topic)
        {
            foreach($topic['posts'] as $item)
            {
                unset($item['content']);
            }
        }

        return response()->json($data);
    }

    public function topic($slug)
    {
        $query = Topic::query();

        $data['topic'] = $query->with('posts')->where('slug', $slug)->orWhere(['title' =>'', 'is_parent' => 0])->first();

        return response()->json($data);
    }

    public function posts()
    {
        $query = Post::query()->with('topics');

        if(request()->filled('post_type')){
            $query->where('post_type', request('post_type'))->get(); 
        }

        if( request()->filled('offset') ){
            $query->offset( request('offset') );
        }

        $query->limit( request('limit') ?? 10 );

        $data['posts'] = $query->orderBy('created_at', 'desc')->get()->makeHidden(['content']);

        return response()->json($data);
    }

    public function post($slug)
    {
        $query = Post::query();

        $data['post'] = $query->with('topics')->where('slug', $slug)->first();

        return response()->json($data);
    }
}
