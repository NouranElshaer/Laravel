<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        // $posts = [
        //     ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'],
        //     ['id' => 2, 'title' => 'Js', 'posted_by' => 'mohamed', 'created_at' => '2021-03-25'],
        //     ['id' => 3, 'title' => 'Java', 'posted_by' => 'mahmoud', 'created_at' => '2021-03-30']
        // ]; 
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($post)
    {
        $post= Post::find($post);
        // dd($post);
        //  $post = ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'Ahmed', 'desc' => 'this is the discription of the post', 'created_at' => '2021-03-13']; 
        // dd($post);
        return view('posts.show', ['post' => $post]);
    }
    
    public function create()
    {
        //  $post = ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'Ahmed', 'desc' => 'this is the discription of the post', 'created_at' => '2021-03-13']; 
        
        return view('posts.create', ['users' => User::all()]);
    }

    public function store(Request $myRequestObject)
    {  
        $data = $myRequestObject->all();
        //  using Request class => eltara2a de esmaha type hinting

        // $data = request()->all();
        // request()->title == $data['title'];
        
        // Post::create([
        //     'title' => $data['title'],
        //     'description' => $data['description'],
        // ]);        
            // dd($data);
            $post=new Post();
            $post->title =$data['title'];
            $post->description =$data['description'];
            $post->user_id =$data['user_id'];
            $post->save();

        // Post::create([$data]);//only use this with protected yourself with fillable 
        // Post::create([$myRequestObject]);//only use this with protected yourself with fillable 

        

        return redirect()->route('posts.index');
    }

    public function edit($post)
    {
        // dd($post);
        $post = ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'Ahmed', 'desc' => 'this is the discription of the post', 'created_at' => '2021-03-13']; 
        return view('posts.update', ['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        return redirect()->route('posts.index');
    }
    // public function edit()
    // {
    //     return view('posts.edit');
    // }
    public function destroy($id)
    {
        return redirect()->route('posts.index');
    }
}


