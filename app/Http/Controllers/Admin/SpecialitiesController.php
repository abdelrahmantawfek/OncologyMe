<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speciality;
use Laracasts\Flash\Flash;


class SpecialitiesController extends Controller
{
    public function index(Request $request)
    {
        /** @var Ads $specialitiess */

        $query = Speciality::query();

        if (request()->filled('search')) {
            $query
            ->where('title', 'LIKE', '%' . $request->search . '%');
        }
    
        $data['specialities'] = $query->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.specialities.index', compact('data'));
    }

    /**
     * Show the form for creating a new Page.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.specialities.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        /** @var Speciality $speciality */
        $speciality = Speciality::create($input);

        Flash::success('speciality saved successfully.');

        return redirect(route('admin.specialities.index'));
    }

    /**
     * Display the specified specialities.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Admin $specialities */
        $speciality = Speciality::find($id);

        if (empty($speciality)) {
            Flash::error('speciality not found');

            return redirect(route('admin.specialities.index'));
        }

        return view('admin.specialities.show')->with('speciality', $speciality);
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
        /** @var Ads $specialities */
        $speciality = Speciality::find($id);

        if (empty($speciality)) {
            Flash::error('speciality not found');

            return redirect(route('admin.specialities.index'));
        }

        return view('admin.specialities.edit', compact('speciality'));
    }

    public function update($id, Request $request)
    {
        /** @var Ads $specialities */
        $speciality = Speciality::find($id);

        if (empty($speciality)) {
            Flash::error('Ads not found');

            return redirect(route('admin.specialities.index'));
        }

        $speciality->fill($request->all());
        $speciality->save();

        Flash::success('speciality updated successfully.');

        return redirect(route('admin.specialities.index'));
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
        /** @var Ads $specialities */
        $speciality = Speciality::find($id);

        if (empty($speciality)) {
            Flash::error('speciality not found');

            return redirect(route('admin.specialities.index'));
        }

        $speciality->delete();

        Flash::success('speciality deleted successfully.');

        return redirect(route('admin.specialities.index'));
    }
}
