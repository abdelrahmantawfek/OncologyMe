<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;


class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();
       
        if (request()->filled('search')) {
            $query
            ->where('name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('email', 'like', '%' . $request->search . '%');
        }
    
        $data['contacts'] = $query->orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.contacts.index', compact('data'));
    }

    public function show($id)
    {
        $contact = Contact::find($id);

        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy($id)
    {
        /** @var Contact $Contact */
        $contact = Contact::find($id);

        if (empty($contact)) {
            Flash::error('Category not found');

            return redirect(route('admin.contacts.index'));
        }

        $contact->delete();

        Flash::success('Contact deleted successfully.');

        return redirect(route('admin.contacts.index'));
    }
}
