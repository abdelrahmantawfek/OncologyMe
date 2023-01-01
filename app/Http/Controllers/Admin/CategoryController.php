<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;


class CategoryController extends Controller
{
    public function index(Request $request)
    {
        /** @var Ads $adss */
        $categories = Category::orderBy('created_at', 'DESC')->paginate(10);
        // $parent_category = Category::where('is_parent', 1)->get()->pluck('title', 'id');

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        // $parent_category = Category::where('is_parent', 1)->get()->pluck('title', 'id');

        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        // $input = $request->all();
        $input = $request->validate( Category::$rules );

        /** @var Category $Category */
        // $parent_category = Category::find($request->parent_id);
        $slug = $request->slug;
        $category = Category::create($input);
        if(is_null($slug)){
            $old_slug = Category::where('slug', strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title)))->exists();
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $request->title .  ' ' . $val;
                    $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Category::where('slug', $categ_slug)->exists());
            }
            else{
                $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title));
            }
          
            $category->slug = $categ_slug;
        }

        // if(isset($parent_category)){
        // $category->parent_name = $parent_category->title;  
        // }
        
        $featured_image = $request->validate(['featured_image' => 'mimes:jpg,jpeg,png|max:5048']);
        $image = $request->file('featured_image');

        if ($image) {

            $originalName = $image->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $image->move('uploads/', $fileName);
            $this->attributes['featured_image'] = $fileName;
            $category->featured_image = $fileName;
            $category->save(); 
        }

        $category->save();

        Flash::success('Category saved successfully.');

        return redirect(route('admin.categories.index'));
    }


    public function show($id)
    {
        /** @var Category $topic */
        $topic = Category::find($id);

        // if (empty($topics)) {
        //     Flash::error('Topic not found');

        //     return redirect(route('admin.categories.index'));
        // }

        return view('admin.categories.index', compact('topic'));
    }

    public function edit($id)
    {
        /** @var Category $Category */
        $category = Category::find($id);
        // $parent_category = Category::where('is_parent', 1)->get()->pluck('title', 'id');

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.categories.index'));
        }

        return view('admin.categories.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        /** @var Category $Category */
        $category = Category::find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.categories.index'));
        }

        $input = $request->validate( Category::$rules );
        $category->fill($request->all());
        $slug = $request->slug;
        if(is_null($slug)){
            $old_slug = Category::where('slug', strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title)))->exists();
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $request->title .  ' ' . $val;
                    $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Category::where('slug', $categ_slug)->exists());
            }
            else{
                $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title));
            }
          
            $category->slug = $categ_slug;
        }
        
        $featured_image = $request->validate(['featured_image' => 'mimes:jpg,jpeg,png|max:5048']);
        $image = $request->file('featured_image');

        if ($image) {

            $originalName = $image->getClientOriginalName();
            $fileName = time() . '_' . $originalName;
            $image->move('uploads/', $fileName);
            $this->attributes['featured_image'] = $fileName;
            $category->featured_image = $fileName;
            $category->save(); 
        }


        $category->save();


        Flash::success('Category updated successfully.');

        return redirect(route('admin.categories.index'));
    }

    public function destroy($id)
    {
        /** @var Category $Category */
        $category = Category::find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.categories.index'));
        }

        $category->delete();

        Flash::success('Category deleted successfully.');

        return redirect(route('admin.categories.index'));
    }
}
