<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Settings;
use App\Models\Post;
use App\Models\Announcement;


class PageController extends Controller
{

    public function pages($slug)
    {
        $query = Page::query();

        $data['page'] = $query->where('slug', $slug)->select('pages.id', 'pages.page_title')->get();

        if($slug != 'contact-us'){
            $data['sections'] = $query->join('sections', 'pages.id', '=', 'sections.page_id')
            ->select('sections.id', 'sections.title', 'sections.subtitle', 'sections.content', 'sections.img')->get();
        }
        else
        {
            $data['contact_info'] = Settings::select(['about', 'location', 'email', 'phone', 'fb', 'youtube', 'linkedin'])->first();
        }
        

        return response()->json([
            'data' => $data
        ]);
    }

    public function home()
    {
        $data['Latest News'] = Post::select(['title', 'slug', 'excerpt'])->where('post_type', 'news')->take(5)->get();
        $data['Latest Videos'] = Post::select(['title', 'slug', 'excerpt'])->where('post_type', 'videos')->take(5)->get();
        $data['Latest Studying slides'] = Post::select(['title', 'slug', 'excerpt'])->where('post_type', 'articles')->whereHas('categories', function($q) {
            $q->where('slug', 'like', 'study-presentations');
        })->take(5)->get();
        $data['Latest Podcasts'] = Post::select(['title', 'slug', 'excerpt'])->where('post_type', 'podcasts')->take(5)->get();
        $data['home_ads'] = Announcement::where('place', '1')->get();
        return response()->json($data); 
    }

    public function feedback()
    {

        $data['feedback_url'] = Settings::select('feedback')->get();

        return response()->json($data);
    }
}
