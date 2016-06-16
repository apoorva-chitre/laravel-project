<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\Http\Requests;

use App\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;
class UsersController extends Controller
{
    //


    public function getAccount() {

    	return view('account', ['user' => Auth::user()]);

    }


    public function saveAccount(Request $request) {

    		$this -> validate($request, [


    				'name' => 'required',
    				'email' => 'required'

    			]);

    		$user = Auth::user();
    		$user->name = $request['name'];
    		$user->email = $request['email'];
    		$user->update();

    		$file = $request->file('image');
    		$filename = $request['name'] . '-' . $user->id . '.jpg';
    		if ($file) {

    			Storage::disk('local')->put($filename, File::get($file));

    		}

    		return redirect()->route('account');

    }

    public function getUserImage($filename){

    		$file = Storage::disk('local')->get($filename);
    		return new Response($file, 200);

    }
}
