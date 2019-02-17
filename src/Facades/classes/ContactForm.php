<?php

namespace NimDevelopment\Contact\Facades\classes;

class ContactForm
{
	//redirect to contactform
	public function form(){
		return redirect(route('contact'));
	}
}

?>