<?php

namespace NimDevelopment\Contact;

use Illuminate\Support\ServiceProvider;


class ContactServiceProvider extends ServiceProvider
{
	public function boot(){
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/views', '<packagename>');
		$this->loadMigrationsFrom(__DIR__.'/database/migrations/');

		//include package config file
		$this->mergeConfigFrom(
			__DIR__.'/config/contact.php', 'contact'
		);

		//Make package config file publishable to main app config dir
		$this->publishes([
			__DIR__.'/config/contact.php' => config_path('contact.php'),
		]);


	}

	public function register(){

	}
}



  ?>