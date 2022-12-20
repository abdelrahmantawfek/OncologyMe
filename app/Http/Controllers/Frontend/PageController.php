<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Page;
use App\Models\Post;
use App\Models\Topic;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

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

     public function store_contacts_data(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email|regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/',
            'phone' => 'required|regex:/(00)[0-9][0-9]{9}/',
            'subject' => 'required',
            'message' => 'required',
        ]);

        DB::beginTransaction();
        $contact = Contact::create($request->all());
        DB::commit();

        Flash::success('Form succefully sent. We will get back to you soon');
        return redirect()->back();
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
        
        // $topics = $data['post'];
        $data['other-topics'] = Topic::orderBy('title')->where('is_parent', 0)
        ->where('id', '!=', $data['topic']->id)
        ->get()->pluck('title', 'slug');

        return view('frontend.single-topic', compact('data'));
    }

    public function search_topic(Request $request)
    {
        // $query = Topic::query();
        $data['topic'] = Topic::where('slug', $request->topics)->get()->first();
        $data['news'] = $data['topic']->posts->where('post_type', 'news');
        $data['videos'] = $data['topic']->posts->where('post_type', 'videos');
        $data['other-topics'] = Topic::orderBy('title')->where('is_parent', 0)
        ->where('id', '!=', $data['topic']->id)
        ->get()->pluck('title', 'slug');

        if (request()->filled('topics')) {
            $data['topic']->where('slug', $request->topics);
        }

        
        // dd($data['topic']);
        return view('frontend.single-topic', compact('data'));
    }

    public function search(Request $request)
    {
       
        $query = Post::query();
       

        if (request()->filled('search')) {
            $query
            ->where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('slug', 'like', '%' . $request->search . '%')
            ->orWhere('excerpt', 'like', '%' . $request->search . '%')
            ->orWhere('content', 'like', '%' . $request->search . '%')
            ->orWhere('author', 'like', '%' . $request->search . '%')
            ->orWhere('post_type', 'like', '%' . $request->search . '%')
            ->orWhereHas('topics', function($q) use($request){
                $q->where('title', 'like', '%' . $request->search . '%');
            })
            ->orWhereHas('categories', function($q) use($request){
                $q->where('title', 'like', '%' . $request->search . '%');
            });
        }
    
        $data['posts'] = $query->paginate(10);
        $data['count'] = $query->count();
        $data['result'] = $request->search;



        return view('frontend.search', compact('data'));
    }

      
}
