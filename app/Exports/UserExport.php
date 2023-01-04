<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $data;

    function __construct($data) {
        $this->data = $data;
    }

    // public function query(Request $request)
    // {
    //     $query = User::query();

    //     if (request()->filled('affiliations')) {
    //         $query->where('affiliation', $request->affiliations);
    //     }
    //     if (request()->filled('specialities')) {
    //         $query->where('speciality', $request->specialities);
    //     }

    //     $data['users'] = $query->orderBy('created_at', 'DESC')->get();
    //     return $data;
    // }

    public function headings():array{
        return[
            'Id',
            'First Name',
            'Last Name',
            'Email',
            'Phone',
            'Governorate',
            'Affiliation',
            'Speciality',
            'Created_at',
            'Updated_at' 
        ];
    } 

    public function collection()
    {
        return User::all();
    }
}
