<?php

namespace NimDevelopment\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->message = $request->message;
        $this->name = $request->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        //check if view is published to app
        if(view()->exists('nim-contactform.contact')){
            return $this->markdown('nim-contactform.contact.email')->with([
                'message' => $this->message,
                'name' => $this->name
            ]);
        }
        
        return $this->markdown('contact::contact.email')->with([
            'message' => $this->message,
            'name' => $this->name
        ]);

        
    }
}
