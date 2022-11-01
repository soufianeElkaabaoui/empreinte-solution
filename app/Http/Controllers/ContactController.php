<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $subject = $request->subject;
        $email = $request->email;
        $name = $request->name;
        $message = $request->message;
        
        Mail::to('sykweb10@gmail.com')->send(new ContactEmail($name, $email, $subject, $message));
        return back()->with('status', 'Bien Envoyé');
    }
}
