<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactEmail;
use App\ContactMessage;
use Meta;

class ContactController extends Controller implements ShouldQueue
{
    public function index() 
    {
        Meta::set('title', 'Contactez-nous. Assistance hebergement');
        return view('pages.contact');
    }

    public function store(Request $request) 
    {   
        $contact = ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        
        $message = ContactMessage::findOrFail($contact->id);
        Mail::to('ramadanabdel24@gmail.com')->send(new ContactEmail($message));
        return redirect('contact')->with('status', 'Message envoyé avec succès');
    }
}
