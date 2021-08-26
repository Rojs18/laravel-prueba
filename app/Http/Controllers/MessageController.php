<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:5'
        ], [
            'name.required' => --('i need your name')
        ]);
        //enviar el mail

        Mail::to('rogelios187@gmail.com')->queue(new MessageReceived($message));

        return 'mensaje enviado';
    }
}
