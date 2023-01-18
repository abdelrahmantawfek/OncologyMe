<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Laracasts\Flash\Flash;
use Response;

class UserController extends Controller
{
    public function index(Request $request)
    {
        /** @var User $users */

        $query = User::query();

        if (request()->filled('search')) {
            $query
            ->where('first_name', 'LIKE', '%' . $request->search . '%')
            ->where('last_name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('email', 'LIKE', '%' . $request->search . '%');
        }

        $data['users'] = $query->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.users.index', compact('data'));
    }

    // public function create()
    // {
    //     $roles = Role::pluck('name', 'id');

    //     return view('admin.users.create', compact('roles'));
    // }

    // public function store(Request $request)
    // {
    //     $input = $request->all();

    //     /** @var User $admin */
    //     $user = User::create($input);

    //     // $user->syncRoles(request('roles'));

    //     Flash::success('User saved successfully.');

    //     return redirect(route('admin.users.index'));
    // }

    /**
     * Display the specified Admin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var User $admin */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }

        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified Admin.
     *
     * @param int $id
     *
     * @return Response
     */
    // public function edit($id)
    // {
    //     /** @var User $admin */
    //     $user = User::find($id);

    //     if (empty($admin)) {
    //         Flash::error('User not found');

    //         return redirect(route('admin.users.index'));
    //     }


    //     return view('admin.users.edit', compact('user'));
    // }

    // public function update($id, Request $request)
    // {
    //     /** @var User $admin */
    //     $user = User::find($id);

    //     if (empty($user)) {
    //         Flash::error('User not found');

    //         return redirect(route('admin.users.index'));
    //     }

    //     $user->fill($request->all());
    //     $user->save();

    //     $user->syncRoles(request('roles'));

    //     Flash::success('User updated successfully.');

    //     return redirect(route('admin.users.index'));
    // }

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
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }

        $user->delete();

        Flash::success('User deleted successfully.');

        return redirect(route('admin.users.index'));
    }

}
