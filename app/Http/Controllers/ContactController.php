<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function create()
    {
        return view('maquette contact.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'objetMessage' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required'
        ]);

        // la methode send() prend une nouvelle instance de notre contactMail
        Mail::to('test@test.com')->send(new ContactMail([

            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'objetMessage' => $request->get('objetMessage'),
            'message' => $request->get('message')
        ]));

        //la methode flash() avec comme clé 'message' et le contenu du message
        session()->flash('message', 'Votre message à été bien envoyé!');

        return redirect('contact');
    }
}
