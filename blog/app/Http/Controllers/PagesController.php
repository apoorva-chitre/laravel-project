<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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

    public function storecontact() {

        //

    }
}
