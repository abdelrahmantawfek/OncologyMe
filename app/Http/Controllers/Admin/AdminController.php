<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Laracasts\Flash\Flash;
use Response;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        /** @var Admin $admins */

        $query = Admin::query();

        if (request()->filled('search')) {
            $query
            ->where('name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('email', 'LIKE', '%' . $request->search . '%');
        }
    
        $data['admins'] = $query->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.admins.index', compact('data'));
    }

    /**
     * Show the form for creating a new Admin.
     *
     * @return Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id');

        return view('admin.admins.create', compact('roles'));
    }

    /**
     * Store a newly created Admin in storage.
     *
     * @param CreateAdminRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->validate( Admin::$rules );


        /** @var Admin $admin */
        $admin = Admin::create($input);

        $admin->syncRoles(request('roles'));

        Flash::success('Admin saved successfully.');

        return redirect(route('admin.admins.index'));
    }

    /**
     * Display the specified Admin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Admin $admin */
        $admin = Admin::find($id);

        if (empty($admin)) {
            Flash::error('Admin not found');

            return redirect(route('admin.admins.index'));
        }

        return view('admin.admins.show')->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified Admin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Admin $admin */
        $admin = Admin::with('roles')->find($id);

        if (empty($admin)) {
            Flash::error('Admin not found');

            return redirect(route('admin.admins.index'));
        }

        $roles = Role::pluck('name', 'id');

        return view('admin.admins.edit', compact('admin', 'roles'));
    }

    public function update($id, Request $request)
    {
        /** @var Admin $admin */
        $admin = Admin::find($id);

        if (empty($admin)) {
            Flash::error('Admin not found');

            return redirect(route('admin.admins.index'));
        }

        $admin->fill($request->all());
        $admin->save();

        $admin->syncRoles(request('roles'));

        Flash::success('Admin updated successfully.');

        return redirect(route('admin.admins.index'));
    }

    /**
     * Remove the specified Admin from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Admin $admin */
        $admin = Admin::find($id);

        if (empty($admin)) {
            Flash::error('Admin not found');

            return redirect(route('admin.admins.index'));
        }

        $admin->delete();

        Flash::success('Admin deleted successfully.');

        return redirect(route('admin.admins.index'));
    }
}
