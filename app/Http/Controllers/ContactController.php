<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;
class ContactController extends Controller
{
    //

    public function sendMail(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::send(
            'email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ),
            function ($message) {
                $message->to(env('MAIL_USERNAME'),'Admin')->subject('Resume Contacts');
            }
        );

        Contact::create($request->all());

        return back()->with('success', 'Thanks for contacting us!');

    }
}
