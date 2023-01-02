<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class ArticlesCategoryController extends Controller
{
    public function index(Request $request)
    {
        /** @var Ads $adss */

        $query = Category::query();
       
        if (request()->filled('search')) {
            $query
            ->where('post_type', 'articles')
            ->where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('slug', 'like', '%' . $request->search . '%');
        }
    
        $data['categories'] = $query->orderBy('created_at', 'DESC')->where('post_type', 'articles')->paginate(10);


        return view('admin.articlescategories.index', compact('data'));
    }

    public function create()
    {
        // $parent_category = Category::where('is_parent', 1)->get()->pluck('title', 'id');

        return view('admin.articlescategories.create');
    }

    public function store(Request $request)
    {
        // $input = $request->all();
        $input = $request->validate( Category::$rules );

        /** @var Category $Category */
        // $parent_category = Category::find($request->parent_id);
        $slug = $request->slug;
        $category = Category::create($input);
        $old_slug = Category::where('slug', strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title)))->exists();
        if(is_null($slug)){
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
        else{
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $slug .  ' ' . $val;
                    $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Category::where('slug', $categ_slug)->exists());
                $category->slug = $categ_slug;
            }
            else{
                $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $slug));
                $category->slug = $categ_slug;
            }
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

        $category->post_type = 'articles';
        $category->save();

        Flash::success('Category saved successfully.');

        return redirect(route('admin.articlescategories.index'));
    }


    public function show($id)
    {
        /** @var Category $topic */
        $topic = Category::find($id);

        // if (empty($topics)) {
        //     Flash::error('Topic not found');

        //     return redirect(route('admin.categories.index'));
        // }

        return view('admin.articlescategories.index', compact('topic'));
    }

    public function edit($id)
    {
        /** @var Category $Category */
        $category = Category::find($id);
        // $parent_category = Category::where('is_parent', 1)->get()->pluck('title', 'id');

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.articlescategories.index'));
        }

        return view('admin.articlescategories.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        /** @var Category $Category */
        $category = Category::find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.articlescategories.index'));
        }

        $input = $request->validate( Category::$rules );
        $category->fill($request->all());
        $slug = $request->slug;
        $old_slug = Category::where('slug', strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $request->title)))->exists();
        if(is_null($slug)){
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
        else{
            if($old_slug){
                $val = 1;
                do{
                    $new_slug = $slug .  ' ' . $val;
                    $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $new_slug));
                    $val++;
                }
                while(Category::where('slug', $categ_slug)->exists());
                $category->slug = $categ_slug;
            }
            else{
                $categ_slug = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', $slug));
                $category->slug = $categ_slug;
            }
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

        return redirect(route('admin.articlescategories.index'));
    }

    public function destroy($id)
    {
        /** @var Category $Category */
        $category = Category::find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.articlescategories.index'));
        }

        $category->delete();

        Flash::success('Category deleted successfully.');

        return redirect(route('admin.articlescategories.index'));
    }
}
