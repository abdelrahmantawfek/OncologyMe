<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Page;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function page($slug)
    {
        // $page = Page::where('slug', $slug)->with(['sections' => function ($query) {
        //     // $query->orderBy('sort');
        // }, 'sections.images'])->first();
        
        // $page = Page::where('slug', $slug)->with('sections');

    //   dd($page->find(7));
        // return view('frontend.page', compact('page'));
    }

    public function coming_soon()
    {
        return view('coming-soon');
    }

    public function home()
    {
        $data['page'] = Page::with('sections')->find(1);
        $data['news'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'news')->with('topics', 'postmeta')->get()->take(5);

        $data['videos'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'videos')->with('topics', 'postmeta')->get()->take(5);

        $data['articles'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'articles')->with('topics', 'postmeta')->get()->take(5);
        $data['study_articles'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'articles')->with('topics', 'postmeta', 'categories')
        ->whereHas('categories', function ($query){
            $query->where('slug', '=' , 'study-presentations');
        })
        ->get()->skip(1)->take(4);

        $data['main_study_articles'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'articles')->with('topics', 'postmeta', 'categories')
        ->whereHas('categories', function ($query){
            $query->where('slug', '=' , 'study-presentations');
        })
        ->get()->take(1);

        $data['podcasts'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'podcasts')->with('topics', 'postmeta')->get()->skip(1)->take(4);
        $data['main_podcast'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'podcasts')->with('topics', 'postmeta')->get()->take(1);

        // dd($data['podcasts']);

        
        return view('frontend.home', compact('data'));
    }

    public function about()
    {
        $data['page'] = Page::with('sections')->find(2);

        return view('frontend.about-us', compact('data'));
    }

    public function contact()
    {
        $data['page'] = Page::with('sections')->find(3);

        return view('frontend.contact-us', compact('data'));
    }

    public function editorial()
    {
        $data['page'] = Page::with('sections')->find(4);

        return view('frontend.editorial', compact('data'));
    }

    public function rights()
    {
        $data['page'] = Page::with('sections')->find(5);

        return view('frontend.rights', compact('data'));
    }

    public function privacy()
    {
        $data['page'] = Page::with('sections')->find(6);

        return view('frontend.privacy', compact('data'));
    }


    public function all_topics()
    {
        $data['page'] = Page::with('sections')->find(7);
        $data['parent_topics'] = Topic::where('is_parent', 1)->get();
        $data['child_topics'] = Topic::where('is_parent', 0)->get();

        return view('frontend.all-topics', compact('data'));
    }

    public function single_topic($slug)
    {
        $data['topic'] = Topic::where('slug', $slug)->get()->first();
        $data['news'] = $data['topic']->posts->where('post_type', 'news');
        $data['videos'] = $data['topic']->posts->where('post_type', 'videos');

        // dd($data['news']);
        return view('frontend.single-topic', compact('data'));
    }

    public function single_category($post_type, $slug)
    {
        $data['category'] = Category::where('slug', $slug)->with('posts.topics')->get()->first();

        return view('frontend.categories', compact('data'));
    }


    // public function recent_topics()
    // {
    //     $data['page'] = Page::with('sections')->find(8);

    //     return view('frontend.recent-topics', compact('data'));
    // }


    // public function post($post_type)
    // {
    //     $data['page'] = Page::with('sections')->find(9);
    //     $data['posts'] = Post::where('post_type', $post_type)->get();

    //     return view('frontend.posts', compact('data'));
    // }

    // public function single_post($post_type, $slug)
    // {
    //     $data['post'] = Post::where('post_type', $post_type)->where('slug', $slug)->get()->first();

    //     // dd($data['post']);
    //     return view('frontend.single', compact('data'));
    // }


    // public function watch()
    // {
    //     $data['page'] = Page::with('sections')->find(10);

    //     return view('frontend.watch', compact('data'));
    // }

    // public function showWatch($slug)
    // {
    //     $data['watch'] = Post::where('slug', $slug)->get()->first();

    //     return view('frontend.single', compact('data'));
    // }

    // public function articles()
    // {
    //     $data['page'] = Page::with('sections')->find(11);

    //     return view('frontend.news', compact('data'));
    // }

    // public function showArticle($slug)
    // {
    //     $data['article'] = Post::where('slug', $slug)->get()->first();

    //     return view('frontend.single', compact('data'));
    // }


    // public function podcasts()
    // {
    //     $data['page'] = Page::with('sections')->find(12);

    //     return view('frontend.podcasts', compact('data'));
    // }

    // public function showPodcast($slug)
    // {
    //     $data['podcast'] = Post::where('slug', $slug)->get()->first();

    //     return view('frontend.single', compact('data'));
    // }
}
