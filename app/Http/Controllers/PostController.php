<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function Submit(PostRequest $req)
    {
        $name = $req->name;
        $email = $req->email;
        $message = $req->message;
        $created_at = date("y-m-d");
        \DB::table('post')->insert([
                'name' => $name,
                'email' => $email,
                'message' => $message,
                'created_at' => $created_at
            ]);
        return back()->withInput();
    }

    public function Output()
    {
        $posts = \DB::table('post')->select('*')->get();
        return view('/app', compact('posts'));
    }
}
