<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.users.profile')->with('user',Auth::user());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('admin.users.profile')->with('user',User::find($id));
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

        return view('admin.users.profile')->with('user',$user);
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

        //dd($request->all());
        $this->validate($request,[

            'name'  => 'required',
            'email'     => 'required|email',
            'facebook' => 'required|url',
            'about'     => 'required',

        ]);

        $user = User::find($id);

        if($request->hasFile('avatar')){

            unlink($user->profile->avatar);

            $avatar = $request->avatar;

            $avatar_new_name = time().$avatar->getClientOriginalName();

            $avatar->move('uploads/avatar', $avatar_new_name);

            $user->profile->avatar = 'uploads/avatar/'.$avatar_new_name;

            $user->profile()->save($user->profile);
        }

        $user->name  = $request->name;
        $user->email = $request->email;
        $user->profile->facebook = $request->facebook;
        $user->profile->about = $request->about;

        $user->save();

        $user->profile()->save($user->profile);

        if($request->has('password'))
        {

            $user->password = bcrypt($request->password);
        }

        Session::flash('success','Account Profile Updated');

        return redirect()->back();
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
    }
}
