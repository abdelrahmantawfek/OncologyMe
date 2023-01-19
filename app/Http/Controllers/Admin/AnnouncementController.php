<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class AnnouncementController extends Controller
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
        /** @var Announcement $announcements */

        $query = Announcement::query();
       
        if (request()->filled('search')) {
            $query
            ->where('title', 'LIKE', '%' . $request->search . '%');
        }
    
        $data['announcements'] = $query->orderBy('created_at', 'DESC')->paginate(10);
    
        return view('admin.announcements.index', compact('data'));
    }

    public function store(Request $request)
    {
        // $input = $request->all();
        $input = $request->validate([
            'title' => 'required',
            'url' => 'required|url',
            'place' => 'required',
            'desktop_image' => 'required|mimes:jpg,png|max:5048',
            'mob_image' => 'required|mimes:jpg,png|max:5048',
        ]);

    
        /** @var Announcement $announcements */
        DB::beginTransaction();

        $announcements = Announcement::create([
            'title' => $request->title,
            'url' => $request->url,
            'place' => $request->place
        ]);

        $d_image = $request->file('desktop_image');

        if ($d_image) {

            $originalName = $d_image->getClientOriginalName();
            $desktopFileName = time() . '_' . $originalName;
            $d_image->move('uploads/', $desktopFileName);
            $this->attributes['desktop_image'] = $desktopFileName;

            $announcements->desktop_image = $desktopFileName;
            $announcements->save();
        }


        $m_image = $request->file('mob_image');

        if ($m_image) {

            $originalName = $m_image->getClientOriginalName();
            $mobFileName = time() . '_' . $originalName;
            $m_image->move('uploads/', $mobFileName);
            $this->attributes['mob_image'] = $mobFileName;

            $announcements->mob_image = $mobFileName;
            $announcements->save();
        }

        DB::commit();

        // $user->syncRoles(request('roles'));

        Flash::success('Announcement saved successfully.');

        return redirect(route('admin.announcements.index'));
    }

    /**
     * Show the form for creating a new announcements.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.announcements.create');
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
        /** @var Announcement $announcements */
        $announcement = Announcement::find($id);

        if (empty($announcement)) {
            Flash::error('Announcement not found');

            return redirect(route('admin.announcements.index'));
        }

        // dd($announcement);
        return view('admin.announcements.edit')->with('announcement', $announcement);
    }

    public function update($id, Request $request)
    {
        /** @var Announcement $admin */
        $announcement = Announcement::find($id);

        $input = $request->validate([
            'title' => 'required',
            'url' => 'required|url',
            'place' => 'required',
            'desktop_image' => 'mimes:jpg,png|max:5048',
            'mob_image' => 'mimes:jpg,png|max:5048',
        ]);

        if (empty($announcement)) {
            Flash::error('Announcement not found');

            return redirect(route('admin.announcements.index'));
        }

        $announcement->title = $request->title;
        $announcement->url = $request->url;
        $announcement->place = $request->place;


        $d_image = $request->file('desktop_image');

        if ($d_image) {

            $originalName = $d_image->getClientOriginalName();
            $desktopFileName = time() . '_' . $originalName;
            $d_image->move('uploads/', $desktopFileName);
            $this->attributes['desktop_image'] = $desktopFileName;

            $announcement->desktop_image = $desktopFileName;
            $announcement->save();
        }


        $m_image = $request->file('mob_image');

        if ($m_image) {

            $originalName = $m_image->getClientOriginalName();
            $mobFileName = time() . '_' . $originalName;
            $m_image->move('uploads/', $mobFileName);
            $this->attributes['mob_image'] = $mobFileName;

            $announcement->mob_image = $mobFileName;
            $announcement->save();
        }


        $announcement->save();


        Flash::success('Announcement updated successfully.');

        return redirect(route('admin.announcements.index'));
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
        /** @var Announcement $page */
        $announcement = Announcement::find($id);

        if (empty($announcement)) {
            Flash::error('Announcement not found');

            return redirect(route('admin.announcements.index'));
        }

        $announcement->delete();

        Flash::success('Announcement deleted successfully.');

        return redirect(route('admin.announcements.index'));
    }
}
