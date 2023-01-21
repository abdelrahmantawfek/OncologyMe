<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Section;
use App\Models\SectionImage;
use Laracasts\Flash\Flash;
use Response;

class PageController extends Controller
{
    /**
     * Display a listing of the Page.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Page $pages */
        $pages = Page::all();

        return view('admin.pages.index')
            ->with('pages', $pages);
    }

    /**
     * Show the form for creating a new Page.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Show the form for editing the specified Page.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Page $page */
        $page = Page::find($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('admin.pages.index'));
        }

        return view('admin.pages.edit')->with('page', $page);
    }

    public function update($id, Request $request)
    {
        /** @var Page $page */
        $page = Page::find($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('admin.pages.index'));
        }

        $page->page_title = $request->page_title;
        $page->meta_title = $request->meta_title;
        $page->meta_desc = $request->meta_desc;
        $page->save();


        foreach ($page->sections as $i => $sec) {
            $section = Section::find($sec->id);
            if (isset($request->img[$sec->id])) {
                $item = $request->img[$sec->id];
                $originalName = $item->getClientOriginalName();
                $fileName = time() . '_' . $originalName;
                $item->move('uploads/', $fileName);
                // $this->attributes['img'] = $fileName;
                // $section->img = $fileName;
                // $section->save();
                $section->img = $fileName;
            }
            
            $section->title = $request->title[$sec->id];
            $section->subtitle = $request->subtitle[$sec->id];
            $section->content = $request->content[$sec->id];
            $section->save();
        }
        
        // $files = $request->file('img[]');
        // foreach ($request->img as $k => $item) {

        //     if ($item) {

        //         $originalName[$k] = $item->getClientOriginalName();
        //         $fileName = time() . '_' . $originalName[$k];
        //         $item->move('uploads/', $fileName);
        //         // $this->attributes['img'] = $fileName;
        //         $section->img = $fileName;
        //         $section->save();
        //     }
        // }

        
        Flash::success('Page updated successfully.');

        return back();
    }


    /**
     * Remove the specified Page from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Page $page */
        $page = Page::find($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('admin.pages.index'));
        }

        $page->delete();

        Flash::success('Page deleted successfully.');

        return redirect(route('admin.pages.index'));
    }
}
