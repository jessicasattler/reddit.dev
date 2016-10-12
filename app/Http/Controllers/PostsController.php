<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

// Add a return value to each of the methods in the PostsController that describes what the method should do based on the table in this lesson.
// For example, we said that the index method should return a list of all posts, so going to reddit.dev/posts should return the string 'A listing of all posts'.

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'Return all the posts';

         // dd(Post::find(1));
        $posts = Post::all();
        //adlister version
        // foreach($posts as $post){
        //     echo $post['title'];
        //     echo $post['url'];
        //     echo $post['content'];
        // }

        //laravel version
        foreach($posts as $post){
            echo $post->title;
            echo $post->url;
            echo $post->content;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return view'Show a form for creating a post';
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //Fernando's Example
        // $inputs = $request->all();
        // if($request->has('name')){
        //     echo 'has name';
        // }else{
        //     echo "Doesn't have name";
        // }
        

        // var_dump($inputs['name']);
        //var_dump($request->name);
        //var_dump($request->input('name'));


         return back()->withInput();
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Show a specific post';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('posts.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        return back()->withInput();
        // return view('posts.create', $inputs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Delete a specific post';
    }
}
