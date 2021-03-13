<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'],
            ['id' => 2, 'title' => 'Js', 'posted_by' => 'mohamed', 'created_at' => '2021-03-25'],
            ['id' => 3, 'title' => 'Java', 'posted_by' => 'mahmoud', 'created_at' => '2021-03-30']
        ]; 
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($post)
    {
         $post = ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'Ahmed', 'desc' => 'this is the discription of the post', 'created_at' => '2021-03-13']; 
        return view('posts.show', ['post' => $post]);
    }

}


