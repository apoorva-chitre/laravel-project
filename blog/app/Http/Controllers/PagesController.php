<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Support\Facades\Mail;

use App\User;

use App\Contact;

use Illuminate\Http\Request;

use App\Http\Requests\ContactFormRequest;

use Illuminate\Html\FormFacade;

class PagesController extends Controller
{
    //

    public function home(){


    	$thingsToDo = ['Buy Groceries', 'Attend Databases Class', 'Take Amanda for a Coffee', 'Give Taylor training in the new Software'];


    return view('welcome', compact('thingsToDo'));

    }

    public function about() {

    	return view('pages.about');

    }

    public function createcontact() {

    	return view('pages.contact');

    }

    public function storecontact(ContactFormRequest $request) {

        //

        $data = $request->only('name', 'email');

        $data['messageLines'] = explode( "\n", $request->get('message'));

        Mail::send('emails.inbox', $data, function($message) use($data) {
        $message->subject('Contact Form :'.$data['name'])
                ->to('achit3@unh.newhaven.edu')
                ->from($data['email']);
        });

        $contacts = DB::table('contacts')->get();

        foreach ($contacts as $contact) {

        if( ($contact->email !=  $request->email)&&($contact->name != $request->name) ){


        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        }

        else {

        return back();

    }
}

        return \Redirect::route('contact')
      ->with('message', 'Thanks for contacting me! I will get in touch with you soon!');

    }
}
