<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;
use App\Message;

class BlogController extends Controller
{
    public function index(Blog $blog)
    {
        $this->data['records'] = $blog->getActive();

        return view('blog.index', $this->data);
    }

    public function cart($slug, Blog $blog, Message $message)
    {
        $this->data['record'] = $blog->getBySlug($slug);
        $this->data['messages'] = $message->getPublished();

        return view('blog.cart', $this->data);
    }

    public function addToDBAjax($slug, Blog $blog, Message $message, Request $request)
    {
        $this->data['record'] = $blog->getBySlug($slug);

        Message::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);
        $res = $message->getPublished();
        return view('blog.cart',$this->data, ['messages' => $res, 'request' => $request]);
    }
}
