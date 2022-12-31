<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Settings;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data['topics'] = Topic::where('is_parent', 0)->where('is_main', 1)
        ->whereHas('posts')
        ->get();
        $data['news_categories'] = Category::where('is_main', 1)->where('post_type', 'news')
        ->whereHas('posts')
        ->get();
        $data['videos_categories'] = Category::where('is_main', 1)->where('post_type', 'videos')
        ->whereHas('posts')
        ->get();
        $data['articles_categories'] = Category::where('is_main', 1)->where('post_type', 'articles')
        ->whereHas('posts')
        ->get();
        $data['podcasts_categories'] = Category::where('is_main', 1)->where('post_type', 'podcasts')
        ->whereHas('posts')
        ->get();
        $data['latest_news'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'articles')->take(5)->get();
        $data['highlights'] = Post::where('post_type', 'news')->where('highlights', true)->with('topics', 'postmeta')->get()->take(5);

        $data['posts'] = Post::where('post_type', 'news')->get();

        $data['main_banners'] = Announcement::where('place', '1')->get();
        $data['top_banners'] = Announcement::where('place', '2')->get();
        $data['bottom_banners'] = Announcement::where('place', '3')->get();
        $data['video_banners'] = Announcement::where('place', '4')->get();

        $data['users'] = User::orderBy('created_at', 'DESC')->take(5)->get();
        $data['contacts'] = Contact::orderBy('created_at', 'DESC')->take(5)->get();
        $data['admins'] = Admin::orderBy('created_at', 'DESC')->take(5)->get();

        $data['st_news'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'news')->take(5)->get();
        $data['st_videos'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'videos')->take(5)->get();
        $data['st_articles'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'articles')->take(5)->get();
        $data['st_podcasts'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'podcasts')->take(5)->get();
        $data['st_news_cat'] = Category::orderBy('created_at', 'DESC')->where('post_type', 'news')->take(5)->get();
        $data['st_videos_cat'] = Category::orderBy('created_at', 'DESC')->where('post_type', 'videos')->take(5)->get();
        $data['st_articles_cat'] = Category::orderBy('created_at', 'DESC')->where('post_type', 'articles')->take(5)->get();
        $data['st_podcasts_cat'] = Category::orderBy('created_at', 'DESC')->where('post_type', 'podcasts')->take(5)->get();

        $data['st_ads'] = Announcement::orderBy('created_at', 'DESC')->take(5)->get();

        $data['st_topics'] = Topic::orderBy('created_at', 'DESC')->where('is_parent', 0)->take(5)->get();

        $data['general_info'] = Settings::all();
        // dd($data['st_topics']);
        View::share($data);

    }
}
