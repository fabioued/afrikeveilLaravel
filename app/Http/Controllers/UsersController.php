<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Session;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct()
    {

        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.users.index')->with('users',User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[

            'name'  => 'required',
            'email' => 'required|email'
        ]);

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt('password'),

        ]);

        $profile = Profile::create([

            'user_id' => $user->id,
            'avatar'  => 'uploads/avatar/avatar.png'
        ]);

        Session::flash('success','User added Successfully');

        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);

        return view('admin.users.edit')->with('user', $user);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $user = User::find($id);

        $user->profile->delete();

        unlink($user->profile->avatar);

        $user->delete();

        Session::flash('success','User successfully deleted!');

        return redirect()->route('users.index');
    }

    public function admin($id) {

        $user = User::find($id);

        $user->admin = 1;

        $user->save();

        Session::flash('success','User is Set to Admin!');

        return redirect()->route('users.index');

    }

    public function not_admin($id) {

        $user = User::find($id);

        $user->admin = 0;

        $user->save();

        Session::flash('success','User is not Admin anymore!');

        return redirect()->route('users.index');

    }
}
