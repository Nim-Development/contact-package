<?php 

namespace NimDevelopment\Contact\Facades;

use Illuminate\Support\Facades\Facade;

class ContactForm extends Facade
{
	protected static function getFacadeAccessor()
	{
		//Name we assigned to class when we binded it into the service container
		return 'contact-FormBuilder';
	}
}

?>