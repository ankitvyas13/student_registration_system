<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailableName extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hello@mailtrap.io')
        ->to('admin@admin.com')
        ->cc('student@email.com')
           ->subject('New student registration')
           ->markdown('mails.exmpl')
           ->with([
             'name' => 'New Mailtrap User',
           ]);
    }       
    
}
