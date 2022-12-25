<?php

namespace App\Providers;

use App\Models\Announcement;
use App\Models\Category;
use App\Models\Post;
use App\Models\Topic;
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
        $data['topics'] = Topic::where('is_parent', 0)->where('is_main', 1)->get();
        $data['news_categories'] = Category::where('is_main', 1)->where('post_type', 'news')->get();
        $data['videos_categories'] = Category::where('is_main', 1)->where('post_type', 'videos')->get();
        $data['articles_categories'] = Category::where('is_main', 1)->where('post_type', 'articles')->get();
        $data['podcasts_categories'] = Category::where('is_main', 1)->where('post_type', 'podcasts')->get();
        $data['latest_news'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'articles')->take(5)->get();
        $data['highlights'] = Post::where('post_type', 'news')->where('highlights', true)->with('topics', 'postmeta')->get()->take(5);

        $data['posts'] = Post::where('post_type', 'news')->get();

        $data['main_banners'] = Announcement::where('place', '1')->get();
        $data['top_banners'] = Announcement::where('place', '2')->get();
        $data['bottom_banners'] = Announcement::where('place', '3')->get();
        // dd($data['all_topics']);
        View::share($data);

    }
}
