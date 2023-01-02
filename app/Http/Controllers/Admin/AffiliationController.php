<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Affiliation;
use Laracasts\Flash\Flash;


class AffiliationController extends Controller
{
    public function index(Request $request)
    {
        /** @var Affiliation $affiliations */

        $query = Affiliation::query();
    
        if (request()->filled('search')) {
            $query
            ->where('title', 'LIKE', '%' . $request->search . '%');
        }
    
        $data['affiliations'] = $query->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.affiliations.index', compact('data'));
    }

    /**
     * Show the form for creating a new Page.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.affiliations.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        /** @var Affiliation $affiliation */
        $affiliation = Affiliation::create($input);

        Flash::success('Affiliation saved successfully.');

        return redirect(route('admin.affiliations.index'));
    }

    /**
     * Display the specified affiliations.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Admin $affiliation */
        $affiliation = Affiliation::find($id);

        if (empty($affiliation)) {
            Flash::error('Affiliation not found');

            return redirect(route('admin.affiliations.index'));
        }

        return view('admin.affiliations.show')->with('admin', $affiliation);
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
        /** @var Affiliation $affiliation */
        $affiliation = Affiliation::find($id);

        if (empty($affiliation)) {
            Flash::error('Affiliation not found');

            return redirect(route('admin.affiliations.index'));
        }

        return view('admin.affiliations.edit', compact('affiliation'));
    }

    public function update($id, Request $request)
    {
        /** @var Affiliation $affiliation */
        $affiliation = Affiliation::find($id);

        if (empty($affiliation)) {
            Flash::error('Affiliation not found');

            return redirect(route('admin.affiliations.index'));
        }

        $affiliation->fill($request->all());
        $affiliation->save();

        Flash::success('Affiliation updated successfully.');

        return redirect(route('admin.affiliations.index'));
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
        /** @var Affiliation $affiliation */
        $affiliation = Affiliation::find($id);

        if (empty($affiliation)) {
            Flash::error('Affiliation not found');

            return redirect(route('admin.affiliations.index'));
        }

        $affiliation->delete();

        Flash::success('Affiliation deleted successfully.');

        return redirect(route('admin.affiliations.index'));
    }
}
