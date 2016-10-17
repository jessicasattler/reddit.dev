<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{   
      public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(3);

        $data = array('users'=>$users);
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'name' => 'required|min:3',
            // 'email'=> 'required|email',
            'email' => 'required',
            'password' => 'required|min:3',

        ];

        $request->session()->flash('ERROR_MESSAGE', 'User information was not saved');
        // // will redirect back with $errors object populated if validation fails
        $this->validate($request, $rules);

        $request->session()->forget('ERROR_MESSAGE');

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'User was saved succesfully');
        return redirect()->action('UsersController@show', $user->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        $data = array('user' => $user);

        return view('users.show', $data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $data = array('user'=>$user);
        return view('users.edit', $data);
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

        // $hashed_password = Hash::make($password);
        $rules = [
            'title' => 'required|min:5',
            'url' => 'required',
            'content' => 'required',
        ];

        $request->session()->forget('ERROR_MESSAGE');

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'User was saved succesfully');

        return redirect()->action('UsersController@show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Post::find($id);
        $user = delete();

    }

    // public function logout()
    // {
    //     Auth::logout();
    // }
}
