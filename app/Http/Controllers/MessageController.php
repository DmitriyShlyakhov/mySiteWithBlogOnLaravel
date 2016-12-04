<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;

class MessageController extends Controller
{

    public function getFromDB(Message $message)
    {
        $this->data['messages'] = $message->getPublished();
        return view('blog.comments', $this->data);
    }

    public function addToDBAjax(Message $message, Request $request){
       Message::create([
           'name' => $request->name,
           'message' => $request->message,
       ]);


       $res = $message->getPublished();
       return view('blog.comments',['messages' => $res, 'request' => $request]);
    }

}
