<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class posts extends Controller
{
    public function getPostByUserId(Request $request)
    {
        $username = $request->input('username');
        $userPost = \App\Post::where('username', '=', $username)->get();
        var_dump($username);
        die;
        return view('postUser', compact('userPost'));
    }
    public function deletePost($id)
    {
        $postId = \App\Post::find($id);
        if ($postId) {
            $postId->delete();
        }
        return redirect()->action('posts@deletePost');
    }
    public function editPost($id)
    {
        $postId = \App\Post::find($id);
        return view('editPost',compact('postId'));
    }
}
