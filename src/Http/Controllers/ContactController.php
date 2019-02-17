<?php

namespace NimDevelopment\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use NimDevelopment\Contact\Models\Contact;
use NimDevelopment\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){

        //check if view is published to app
        if(view()->exists('nim-contactform.contact')){
            return view('nim-contactform.contact');
        }
    	return view('contact::contact');
    }

    public function send(Request $request){

    	// Send Mail
    	Mail::to(config('contact.receiver'))->send(new ContactMailable($request));

    	// Save email details
    	Contact::create($request->all());
    	return redirect(route('contact'));
    }
}
