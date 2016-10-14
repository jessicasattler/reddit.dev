<?php
//tells you where your class lives
namespace App\Http\Controllers;
//user is more for importing
use Illuminate\Http\Request;


use App\Models\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Log;
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


        Log::info('This is some useful information.');

        abort(503);

        // $posts = Post::paginate(3);

        // $data = array('posts'=>$posts);
        // return view('posts.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
         // associative array whose keys are input names in the request
        // values are the validation rules
        $rules = [
            'title'   => 'required|min:5',
            'url'     => 'required',
            'content' => 'required',
        ];

        $request->session()->flash('ERROR_MESSAGE', 'Post was not saved.');
        // will redirect back with $errors object populated if validation fails
        $this->validate($request, $rules);

        $request->session()->forget('ERROR_MESSAGE');

        $post = new Post;
        $post->title = $request->title;
        $post->url=$request->url;
        $post->content =$request->content;
        $post->created_by = 1;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved succesfully');
        return redirect()->action('PostsController@show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        // dd($post);

        $data = array('posts'=>$posts);

        return view('posts.show', $data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $data = array('post'=>$post);
        return view ('posts.edit', $data);
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
       
        // return back()->withInput();
        // return view('posts.create', $inputs);
     
        $rules = [
            'title'   => 'required|min:5',
            'url'     => 'required',
            'content' => 'required',
        ];

        $request->session()->flash('ERROR_MESSAGE', 'Post was not saved.');
        // will redirect back with $errors object populated if validation fails
        $this->validate($request, $rules);

        $request->session()->forget('ERROR_MESSAGE');

        $post = Post::find($id);
        $post->title = $request->title;
        $post->url=$request->url;
        $post->content =$request->content;
        $post->created_by = 1;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved succesfully');

        return redirect()->action('PostsController@show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post = delete();

    }
}
