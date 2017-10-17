<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Settings;
use App\Tag;
use PharIo\Manifest\Email;
use Session;
use Mail;
use App\Mail\contactMessage;
use Illuminate\Http\Request;

use Newsletter;

class PagesController extends Controller
{
    //

    public function home(){
        return view ('frontEnd/home')->with('latest_blogs',Post::where('blog','blog')->orderBy('created_at', 'desc')->take(2)->get())
                                     ->with('latest_posts',Post::where('blog','post')->orderBy('created_at', 'desc')->take(2)->get())
                                     ->with('settings', Settings::first());
    }

    public function singlePost($slug)
    {
        //

        $post           = Post::where('slug', $slug)->first();

        $next_id        = Post::where('id', '>',$post->id)->min('id');

        $previous_id    = Post::where('id', '<',$post->id)->max('id');

        return view('frontEnd/single')->with('post',$post)
                                      ->with('settings', Settings::first())
                                      ->with('next', Post::find($next_id))
                                      ->with('previous', Post::find($previous_id))
                                      ->with('tags', Tag::all())
                                      ->with('categories', Category::all())
                                      ->with('posts',Post::orderBy('created_at', 'desc')->take(3)->get());
    }

    public function subscribe(){
        $email = request('email');
        $name  = request('name');

        Newsletter::subscribe($email,['LNAME'=>$name]);


        Session::flash('success','you have been successfully registered!');

        return redirect()->back();
    }

    public function email(Request $request){

        $this->validate($request,[
            'name'      => 'required',
            'email'     => 'required|email',
            'message'   => 'required'
        ]);

        $email      = $request->email;
        $name       = $request->name;
        $message    = $request->message;
        $phone      = $request->phone;
        $send       = 'fabioued@yahoo.fr';

        Mail::to($send)->send(new contactMessage($name,$message,$phone,$email));

        /*Mail::send('emails.email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('afrikeveil@info.org');
                $message->to('fabioued@yahoo.fr', 'Admin')->subject('Message from Afrik Eveil');
            });*/


        Session::flash('success','Thanks for contacting us!');

        return redirect()->back();
    }

    public function notreOrganisation(){
        return view ('frontEnd/notreOrganisation')->with('settings', Settings::first());
    }

    public function notreHistoire(){
        return view ('frontEnd/notreHistoire')->with('settings', Settings::first());
    }

    public function notreEquipe(){
        return view ('frontEnd/notreEquipe')->with('settings', Settings::first());
    }

    public function howWeWork(){
        return view ('frontEnd/cequeNouFaisons')->with('settings', Settings::first());
    }

    public function areYouInterrested(){
        return view ('frontEnd/estVousInterrese')->with('settings', Settings::first());
    }

    public function ourNews(){
        return view ('frontEnd/ourNews')->with('settings', Settings::first());
    }

    public function blog(){
        return view ('frontEnd/blog')->with('settings', Settings::first());
    }

    public function contactUs(){
        return view ('frontEnd/contact')->with('settings', Settings::first());
    }

    public function ressources(){
        return view ('frontEnd/ressources')->with('settings', Settings::first());
    }

    public function discours(){
        return view ('frontEnd/discours')->with('settings', Settings::first());
    }
}
