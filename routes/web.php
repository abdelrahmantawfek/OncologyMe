<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('register', [App\Http\Controllers\RegisterController::class, 'close_defualt_register']);
Route::get('signup', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::post('signin', [App\Http\Controllers\RegisterController::class, 'post_signin'])->name('postSignin');
Route::post('signup', [App\Http\Controllers\RegisterController::class, 'post_signup'])->name('postSignup');
// Route::resource('ckeditor', App\Http\Controllers\CkeditorController::class);
Route::post('ckeditor', [App\Http\Controllers\CKEditorController::class, 'storeImage'])->name('image.upload');
Route::post('export-users', [App\Http\Controllers\CKEditorController::class, 'export'])->name('users.export');

Route::get('activate-account', [App\Http\Controllers\RegisterController::class, 'activate_account'])->name('active.account');


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
        Route::resource('users', App\Http\Controllers\Admin\UserController::class)->except('create', 'edit', 'export', 'store', 'update');
        Route::resource('pages', App\Http\Controllers\Admin\PageController::class)->except('create', 'destroy');
        Route::resource('topics', App\Http\Controllers\Admin\TopicController::class);
        Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
        // Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
        Route::resource('announcements', App\Http\Controllers\Admin\AnnouncementController::class);
        Route::resource('affiliations', App\Http\Controllers\Admin\AffiliationController::class);
        Route::resource('specialities', App\Http\Controllers\Admin\SpecialitiesController::class);
        Route::resource('settings', App\Http\Controllers\Admin\SettingsController::class)->except('create', 'show', 'destroy', 'edit');


        Route::resource('news', App\Http\Controllers\Admin\NewsController::class);

        Route::resource('newscategories', App\Http\Controllers\Admin\NewsCategoryController::class);

        Route::resource('videos', App\Http\Controllers\Admin\VideosController::class);
        Route::resource('videoscategories', App\Http\Controllers\Admin\VideosCategoryController::class);

        Route::resource('articles', App\Http\Controllers\Admin\ArticlesController::class);
        Route::resource('articlescategories', App\Http\Controllers\Admin\ArticlesCategoryController::class);

        Route::resource('podcasts', App\Http\Controllers\Admin\PodcastsController::class);
        Route::resource('podcastscategories', App\Http\Controllers\Admin\PodcastsCategoryController::class);

        // contacts
        Route::resource('contacts', App\Http\Controllers\Admin\ContactController::class)->except('create', 'edit','store', 'update');

    });

});

// profile 
Route::group(['middleware' => ['auth:web', 'user']], function () {

    Route::group(['prefix' => 'profile', 'as' => 'user.'], function () {

        Route::controller(App\Http\Controllers\ProfileController::class)->group(
            function () {
                Route::get('/', 'profile')->name('profile');
                Route::post('/', 'updateProfile')->name('update');
            }
        );
    });

});


// frondend routes

Route::controller(App\Http\Controllers\Frontend\PageController::class)->group(
    function () {
        Route::get('/',  'home')->name('home');
        // Route::get('/home',  'home')->name('home');
        Route::get('/about-oncology-me', 'about')->name('about');
        Route::get('/contact-us', 'contact')->name('contact');
        Route::post('/contact-us', 'store_contacts_data')->name('contact.data');
        Route::get('/editorial', 'editorial')->name('editorial');
        Route::get('/rights', 'rights')->name('rights');
        Route::get('/privacy-policy', 'privacy')->name('privacy');
        Route::get('/topics', 'all_topics')->name('allTopics');
        Route::get('all-{post_type}', 'post')->name('allPosts');
        Route::get('/topics/{slug}', 'single_topic')->name('showTopic');
        Route::get('/search-topics', 'search_topic')->name('searchTopic');
        Route::get('results', 'search')->name('searchPosts');

    }
);

Route::controller(App\Http\Controllers\Frontend\PostController::class)->group(
    function () {

        Route::get('search-{post_type}', 'search_category')->name('searchCategory');
        Route::get('/{post_type}/highlights', 'highlights')->name('allHighlights');
        Route::get('/{post_type}/{slug}', 'single_post')->name('singlePost');
        Route::get('{post_type}/categories/{slug}', 'single_category')->name('showCategory');

    }
);