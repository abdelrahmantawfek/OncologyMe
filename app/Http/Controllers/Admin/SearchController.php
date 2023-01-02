<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search_news(Request $request)
    {
       
        $query = Post::query();
       

        if (request()->filled('search')) {
            $query
            ->where('title', 'LIKE', '%' . $request->search_news . '%')
            ->orWhere('slug', 'like', '%' . $request->search_news . '%');
        }
    
        dd($$request);
        $posts = $query->orderBy('created_at', 'DESC')->where('post_type', 'news')->paginate(10);

        // return view('frontend.search', compact('data'));
        return view('admin.news.index', compact('posts'));
    }
}
