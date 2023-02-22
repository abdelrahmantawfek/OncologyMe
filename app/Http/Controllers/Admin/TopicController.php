<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class TopicController extends Controller
{
    public function index(Request $request)
    {
        /** @var Ads $adss */
        $query = Topic::query();

        if (request()->filled('search')) {
            $query
            ->where('title', 'LIKE', '%' . $request->search . '%');
        }
    
        $data['admins'] = $query->orderBy('created_at', 'DESC')->paginate(10);

        $topics = $query->orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.topics.index', compact('topics'));
    }

    public function create()
    {
        $parent_topic = Topic::orderBy('title', 'ASC')->where('is_parent', 1)->get()->pluck('title', 'id');

        return view('admin.topics.create', compact('parent_topic'));
    }

    public function store(Request $request)
    {
        // $input = $request->all();
        $input = $request->validate( Topic::$rules );

        /** @var Topic $Category */
        $parent_topic = Topic::find($request->parent_id);
        $slug = $request->slug;
        $old_slug = Topic::where('slug', strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title)))->exists();
        $topic = Topic::create($input);
        if(is_null($slug)){

            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $request->title .  ' ' . $val;
                    $topic_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Topic::where('slug', $topic_slug)->exists());
            }
            else{
                $topic_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title));
            }
            $topic->slug = $topic_slug;
        }
        else{
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $slug .  ' ' . $val;
                    $topic_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Topic::where('slug', $topic_slug)->exists());
                $topic->slug = $topic_slug;
            }
            else{
                $topic_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $slug));
                $topic->slug = $topic_slug;
            }
        }


        if(isset($parent_topic)){
        $topic->parent_name = $parent_topic->title;  
        }
        $topic->save();

        Flash::success('Topic saved successfully.');

        return redirect(route('admin.topics.index'));
    }

    public function show($id)
    {
        /** @var Topic $topic */
        $topic = Topic::find($id);

        // if (empty($topics)) {
        //     Flash::error('Topic not found');

        //     return redirect(route('admin.topics.index'));
        // }

        return view('admin.topics.index', compact('topic'));
    }

    public function edit($id)
    {
        /** @var Topic $Category */
        $topic = Topic::find($id);
        $parent_topic = Topic::orderBy('title', 'ASC')->where('is_parent', 1)->where('id', '!=', $id)->get()->pluck('title', 'id');

        if (empty($topic)) {
            Flash::error('Topic not found');

            return redirect(route('admin.topics.index'));
        }

        return view('admin.topics.edit', compact('topic', 'parent_topic'));
    }

    public function update($id, Request $request)
    {
        /** @var Topic $Category */
        $topic = Topic::find($id);
        $parent_topic = Topic::find($request->parent_id);

        if (empty($topic)) {
            Flash::error('Topic not found');

            return redirect(route('admin.topics.index'));
        }
        $input = $request->validate( Topic::$rules );

        // $input = $request->validate([
        //     'title' => 'required|string',
        // ]);
        $topic->fill($request->all());
        $slug = $request->slug;
        $old_slug = Topic::where('slug', strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title)))->exists();
        if(is_null($slug)){

            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $request->title .  ' ' . $val;
                    $topic_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Topic::where('slug', $topic_slug)->exists());
            }
            else{
                $topic_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title));
            }
            $topic->slug = $topic_slug;
        }
        else{
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $slug .  ' ' . $val;
                    $topic_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Topic::where('slug', $topic_slug)->exists());
                $topic->slug = $topic_slug;
            }
            else{
                $topic_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $slug));
                $topic->slug = $topic_slug;
            }
        }

        // dd($request->is_parent);
        if($request->is_parent == 1){
            $topic->parent_name = '';
            $topic->parent_id = '';
        }
        if(isset($parent_topic)){
            $topic->parent_name = $parent_topic->title;  
        }

        


        $topic->save();

        Flash::success('Topic updated successfully.');

        return redirect(route('admin.topics.index'));
    }

    public function destroy($id)
    {
        /** @var Topic $Category */
        $topic = Topic::find($id);

        if (empty($topic)) {
            Flash::error('Topic not found');

            return redirect(route('admin.topics.index'));
        }

        $topic->delete();

        Flash::success('Topic deleted successfully.');

        return redirect(route('admin.topics.index'));
    }
}
