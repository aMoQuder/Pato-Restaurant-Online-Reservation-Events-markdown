<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Model\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function all()
    {
        $contacts=Contact::all();
        return view('contact.contactadmin',compact('contacts'));
    }
    public function show($id)
    {
        $Contact = Contact::findOrFail($id);
        return view('contact.show', ['contact' => $Contact]);
    }

    public function save(ContactRequest $request)
    {
        Contact::create([
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ]);
        return redirect()->back()->with('success', "The message was send  successfully  ");
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->back()->with('massege', "The message was deleted  successfully  ");
    }
}


