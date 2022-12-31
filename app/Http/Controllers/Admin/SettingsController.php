<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use Laracasts\Flash\Flash;


class SettingsController extends Controller
{
    public function index(Request $request)
    {
        /** @var Ads $specialitiess */
        $general_info = Settings::find(1);

        return view('admin.settings.index')
            ->with('settings', $general_info);
    }

    /**
     * Show the form for editing the specified Admin.
     *
     * @param int $id
     *
     * @return Response
     */

    public function update(Request $request)
    {
        /** @var Ads $specialities */

        $input = $request->validate( Settings::$rules );
        
        $general_info = Settings::find(1);

        if (empty($general_info)) {
            Flash::error('settings not found');

            return redirect(route('admin.specialities.index'));
        }

        $general_info->fill($request->all());
        $general_info->save();

        Flash::success('settings updated successfully.');

        return redirect(route('admin.settings.index'));
    }
  
}
