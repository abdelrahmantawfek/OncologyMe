<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Affiliation;
use App\Models\Announcement;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Post;
use App\Models\Settings;
use App\Models\Speciality;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Request;
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

        // view()->composer('*', function()
        // {


            Blade::if('admin', function () {
                    
                if (Auth::check()) {
                    $user =  Auth::user();       
                    $admin = Admin::where('email', $user->email)->get();
                    // dd($admin);
                    if(count($admin)){
                        return true;
                    }
                }
                
            });

            
        // });




        $data['home_title'] = Page::find(1);
        $data['about_title'] = Page::find(2);
        $data['contact_title'] = Page::find(3);
        $data['editorial_title'] = Page::find(4);
        $data['rights_title'] = Page::find(5);
        $data['privacy_title'] = Page::find(6);
        $data['topics_title'] = Page::find(7);
        $data['news_title'] = Page::find(8);
        $data['watch_title'] = Page::find(9);
        $data['articles_title'] = Page::find(10);
        $data['podcasts_title'] = Page::find(11);
       

        $data['topics'] = Topic::orderBy('title')->where('is_parent', 0)->where('is_main', 1)
        ->whereHas('posts')
        ->get();
        $data['news_categories'] = Category::orderBy('title')->where('is_main', 1)->where('post_type', 'news')
        ->whereHas('posts')
        ->get();
        $data['videos_categories'] = Category::orderBy('title')->where('is_main', 1)->where('post_type', 'videos')
        ->whereHas('posts')
        ->get();
        $data['articles_categories'] = Category::orderBy('title')->where('is_main', 1)->where('post_type', 'articles')
        ->whereHas('posts')
        ->get();
        $data['podcasts_categories'] = Category::orderBy('title')->where('is_main', 1)->where('post_type', 'podcasts')
        ->whereHas('posts')
        ->get();
        $data['latest_news'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'articles')->take(5)->get();
        $data['highlights'] = Post::where('post_type', 'news')->where('highlights', true)->with('topics', 'postmeta')->get()->take(5);

        $data['posts'] = Post::where('post_type', 'news')->get();

        $data['main_banners'] = Announcement::where('place', '1')->get();
        $data['top_banners'] = Announcement::where('place', '2')->get();
        $data['bottom_banners'] = Announcement::where('place', '3')->get();
        $data['video_banners'] = Announcement::where('place', 'Videos')->get();
        
        $post_type = Request::segment(1);
        $all_posts_type = Request::segment(1);
        $data['news_banners'] = Announcement::where('place', $post_type)->orWhere('place', substr($all_posts_type, 4))->get();
        $data['allusers'] = User::orderBy('created_at', 'DESC')->get();
        $data['allcontacts'] = Contact::orderBy('created_at', 'DESC')->get();
        $data['alladmins'] = Admin::orderBy('created_at', 'DESC')->get();

        $data['allst_news'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'news')->get();
        $data['allst_videos'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'videos')->get();
        $data['allst_articles'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'articles')->get();
        $data['allst_podcasts'] = Post::orderBy('created_at', 'DESC')->where('post_type', 'podcasts')->get();
        $data['allst_news_cat'] = Category::orderBy('created_at', 'DESC')->where('post_type', 'news')->get();
        $data['allst_videos_cat'] = Category::orderBy('created_at', 'DESC')->where('post_type', 'videos')->get();
        $data['allst_articles_cat'] = Category::orderBy('created_at', 'DESC')->where('post_type', 'articles')->get();
        $data['allst_podcasts_cat'] = Category::orderBy('created_at', 'DESC')->where('post_type', 'podcasts')->get();
        $data['allst_topics'] = Topic::orderBy('created_at', 'DESC')->where('is_parent', 0)->get();


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

        $data['countries'] = User::countries();
        $data['governorates'] = User::governorates();
        $data['affiliations'] = Affiliation::all()->pluck('title', 'title');
        $data['specialites'] = Speciality::all()->pluck('title', 'title');

        // dd($data['st_topics']);
        View::share($data);

    }
}
