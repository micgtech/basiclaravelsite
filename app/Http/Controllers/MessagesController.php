<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){

    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required'
    			
    	]);
    	return 'Success!!!';

    	//Create new message
    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');
    }
}
