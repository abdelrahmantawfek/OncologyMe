<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// return view('coming-soon');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin routes

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login');
    Route::post('postLogin', [App\Http\Controllers\Admin\AuthController::class, 'postLogin'])->name('postLogin');
    Route::post('logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    Route::group(['middleware' => ['auth:admin', 'permissionHandler']], function () {

        Route::get('/', [App\Http\Controllers\Admin\AuthController::class, 'index'])->name('dashboard');

        Route::resource('admins', App\Http\Controllers\Admin\AdminController::class);
        Route::resource('roles', App\Http\Controllers\Admin\RoleController::class);
        Route::get('updatePermissions', [App\Http\Controllers\Admin\RoleController::class, 'updatePermissions'])->name('roles.updatePermissions');
        Route::resource('users', App\Http\Controllers\Admin\UserController::class);
        Route::resource('pages', App\Http\Controllers\Admin\PageController::class);
        Route::resource('topics', App\Http\Controllers\Admin\TopicController::class);
        Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
        Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class)->except('new_category');

        // Route::get('{post_type}/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'new_category'])->name('new.category');
        // Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'news_category'])->name('add.category');

        Route::resource('ads', App\Http\Controllers\Admin\AdsController::class);

        Route::resource('news', App\Http\Controllers\Admin\NewsController::class);

        Route::resource('videos', App\Http\Controllers\Admin\VideosController::class);
        // Route::resource('videos-categories', App\Http\Controllers\Admin\VideoscategoriesController::class);

        Route::resource('articles', App\Http\Controllers\Admin\ArticlesController::class);
        // Route::resource('articles-categories', App\Http\Controllers\Admin\ArticlescategoriesController::class);

        Route::resource('podcasts', App\Http\Controllers\Admin\PodcastsController::class);
        // Route::resource('podcasts-categories', App\Http\Controllers\Admin\PodcastscategoriesController::class);


        Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');

        // contacts
        Route::get('contacts', [App\Http\Controllers\Admin\ContactController::class ,'index'])->name('contacts.list');

    });

});


// frondend routes
// Route::get('/-/{page}', [App\Http\Controllers\Frontend\PageController::class, 'page'])->name('page');

Route::controller(App\Http\Controllers\Frontend\PageController::class)->group(
    function () {
        Route::get('/',  'home')->name('home');
        Route::get('/home',  'home')->name('home');
        Route::get('/about-us', 'about')->name('about');
        Route::get('/contact-us', 'contact')->name('contact');
        Route::post('/contact-us', 'store_contacts_data')->name('contact.data');
        Route::get('/editorial', 'editorial')->name('editorial');
        Route::get('/rights', 'rights')->name('rights');
        Route::get('/privacy-policy', 'privacy')->name('privacy');
        Route::get('/topics', 'all_topics')->name('allTopics');
        // Route::get('/recent-topics', 'recent_topics')->name('recentTopics');
        Route::get('/topics/{slug}', 'single_topic')->name('showTopic');
        Route::get('/search-topics', 'search_topic')->name('searchTopic');
    }
);

Route::controller(App\Http\Controllers\Frontend\PostController::class)->group(
    function () {

        Route::get('all-{post_type}', 'post')->name('allPosts');
        Route::get('{post_type}', 'search_category')->name('searchCategory');

        Route::get('/{post_type}/highlights', 'highlights')->name('allHighlights');
        Route::get('/{post_type}/{slug}', 'single_post')->name('singlePost');
        Route::get('{post_type}/categories/{slug}', 'single_category')->name('showCategory');

        // Route::get('{post_type}/categories', 'category_archive')->name('categoryArchive');



    }
);