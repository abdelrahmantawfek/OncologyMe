<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ads;
use Flash;
use Response;

class AdsController extends Controller
{
    public function index(Request $request)
    {
        /** @var Ads $adss */
        $ads = Ads::paginate(10);

        return view('admin.ads.index')
            ->with('ads', $ads);
    }

    /**
     * Show the form for creating a new Page.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.ads.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        /** @var Ads $ads */
        $ads = Ads::create($input);

        Flash::success('Ads saved successfully.');

        return redirect(route('admin.ads.index'));
    }

    /**
     * Display the specified Ads.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Admin $ads */
        $ads = Ads::find($id);

        if (empty($ads)) {
            Flash::error('Ads not found');

            return redirect(route('admin.ads.index'));
        }

        return view('admin.ads.show')->with('admin', $ads);
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
        /** @var Ads $ads */
        $ads = Ads::with('roles')->find($id);

        if (empty($ads)) {
            Flash::error('Ads not found');

            return redirect(route('admin.ads.index'));
        }

        $roles = Role::pluck('name', 'id');

        return view('admin.ads.edit', compact('ads', 'roles'));
    }

    public function update($id, Request $request)
    {
        /** @var Ads $ads */
        $ads = Ads::find($id);

        if (empty($ads)) {
            Flash::error('Ads not found');

            return redirect(route('admin.ads.index'));
        }

        $ads->fill($request->all());
        $ads->save();

        Flash::success('Ads updated successfully.');

        return redirect(route('admin.ads.index'));
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
        /** @var Ads $ads */
        $ads = Ads::find($id);

        if (empty($ads)) {
            Flash::error('Ads not found');

            return redirect(route('admin.ads.index'));
        }

        $ads->delete();

        Flash::success('Ads deleted successfully.');

        return redirect(route('admin.ads.index'));
    }
}
