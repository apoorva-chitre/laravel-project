<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

class ContactsController extends Controller
{
    //

    public function store(Request $request, Contact $contact) {

    	$contact = new Contact;


    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->message = $request->message;

    	contacts->save($contact);

    	return back();

    }
}