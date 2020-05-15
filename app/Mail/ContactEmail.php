<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\ContactMessage ;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /** 
     *  The message instance
    * @var ContactMessage
    */
    //public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactMessage $message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@theauroraweb.com')
            ->view('emails.contact')
            ->with([
                'name' => $this->message->name,
                'email' => $this->message->email,
                'subject' => $this->message->subject,
                'messagebody' => $this->message->message
            ]);
    }
}
