<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request,[

            'name' => 'required',
            'email' => 'required'

        ]);
        
        // Create New Message Model
        $message = new Messages;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // Save Message
        $message->save();

        // Redirect
        return redirect('/')->with('success','Message sent');
    }

    public function getMessages()
    {
        $messages = Messages::all();
        return view('messages')->with('messages',$messages);
    }
}
