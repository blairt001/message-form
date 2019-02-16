<?php

namespace Blairt\Message\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Blairt\Message\Message;
use Blairt\Message\Mail\MessageMailable;
use Illuminate\Support\Facades\Mail;



class MessageController extends Controller
{
    public function index()
    {
        return view('message::message');
    }

    public function store(Request $request)
    {
        Mail::to(config('message.send_mail_to'))->send(new MessageMailable($request->message, $request->name));
        //Mail::to('blairt371.dev@gmail.com')->send(new MessageMailable($request->message, $request->name));
        Message::create($request->all());
        //return $request->all();
        return redirect(route('message'));
    }
}
