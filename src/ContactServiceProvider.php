<?php

namespace NimDevelopment\Contact;

use Illuminate\Support\ServiceProvider;
use NimDevelopment\Contact\Facades\Classes\ContactForm;

class ContactServiceProvider extends ServiceProvider
{

	public function register(){
		
		$this->app->bind('contact-FormBuilder', function(){
			return new ContactForm();
		});
	}

	public function boot(){
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/views', 'contact');
		$this->loadMigrationsFrom(__DIR__.'/database/migrations/');

		//include package config file
		$this->mergeConfigFrom(
			__DIR__.'/config/contact.php', 'contact'
		);

		//Make package config file publishable to main app config dir
		$this->publishes([
			__DIR__.'/config/contact.php' => config_path('ContactForm.php'),
			__DIR__.'/views' => 'resources/views/ContactForm'
		]);
	}
}



  ?>