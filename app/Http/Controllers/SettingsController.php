<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;

use Session;

class SettingsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index () {

        return view('admin.settings.settings')->with('setting', Settings::First());
    }

    public function update () {


        $this->validate(request(),[

            'contact_numberFr'  => 'required',
            'contact_numberEn'  => 'required',
            'contact_emailEn'   => 'required|email',
            'contact_emailFr'   => 'required|email',
            'addresse'          => 'required',
            'introductionVideo' => 'required|url',
            'aboutUs'           => 'required',
            'aboutFr'           => 'required',
            'youtube'           => 'required|url',
            'facebook'          => 'required|url',
            'twitter'           => 'required|url',
            'copyrightEn'       => 'required',
            'copyrightFr'       => 'required'
        ]);


        $settings = Settings::first();

        $settings->contact_numberFr  = request()->contact_numberFr;
        $settings->contact_numberEn  = request()->contact_numberEn;
        $settings->contact_emailEn   = request()->contact_emailEn;
        $settings->contact_emailFr   = request()->contact_emailFr;
        $settings->addresse          = request()->addresse;
        $settings->introductionVideo = request()->introductionVideo;
        $settings->aboutUs           = request()->aboutUs;
        $settings->aboutFr           = request()->aboutFr;
        $settings->youtube           = request()->youtube;
        $settings->facebook          = request()->facebook;
        $settings->twitter           = request()->twitter;
        $settings->copyrightEn       = request()->copyrightEn;
        $settings->copyrightFr       = request()->copyrightFr;

        $settings->save();

        Session::flash('success','Settings Successfully Updated');

        return redirect()->route('settings.index');

    }
}
