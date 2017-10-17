<?php

namespace App\Http\Controllers;

use App\Category;

use App\Post;

use App\Tag;

use Session;

use File;

use Auth;

use Illuminate\Http\Response;

use Illuminate\View\View;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/posts/index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $tags = Tag::all();

        if($categories->count() == 0 || $tags->count() == 0){

            Session::flash('info','You must have Category or tag Before attemting to create a new post');

            return redirect()->back();
        }
        return view('admin.posts.create')->with('categories', $categories)
                                         ->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[
            'title'         => 'required',
            'featuredImage' => 'required|image',
            'language'      => 'required',
            'content'       => 'required',
            'category_id'   => 'required',
            'tags'          => 'required',
            'blog'          => 'required'
        ]);

        $featuredImage          = $request->featuredImage;

        $featuredImage_new_name = time().$featuredImage->getClientOriginalName();

        $featuredImage->move('uploads/', $featuredImage_new_name);

        $post = Post::create([

            'locale'        => $request->language,
            'user_id'       => Auth::id(),
            'title'         => $request->title,
            'slug'          => str_slug($request->title),
            'content'       => $request->content,
            'featuredImage' => 'uploads/' .$featuredImage_new_name,
            'language'      => $request->language,
            'category_id'   => $request->category_id,
            'blog'          => $request->blog,
    ]);

        $post->tags()->attach($request->tags);

        Session::flash('success','Post Created Succesfully');
        //dd($request->all());

        return redirect()->route('post.index');

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

        $tag = Tag::all();

        $categories =  Category::all();

        $post = Post::find($id);

        return view('admin.posts.edit')->with('post',$post)
                                       ->with('categories',$categories)
                                       ->with('tags',$tag);
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

        $this->validate($request, [
            'title'         => 'required',
            'content'       => 'required',
            'category_id'   => 'required',
            'language'      => 'required',
            'blog'          => 'required'
        ]);

        $post = Post::find($id);

        if($request->hasFile('featuredImage')){

            $path = parse_url($post->featuredImage);
            File::delete(public_path($path['path']));

            $featuredImage          = $request->featuredImage;

            $featuredImage_new_name = time().$featuredImage->getClientOriginalName();

            $featuredImage->move('uploads/', $featuredImage_new_name);

            $post->featuredImage = 'uploads/'.$featuredImage_new_name;



        }


        $post->title        = $request->title;
        $post->content      = $request->content;
        $post->language     = $request->language;
        $post->category_id  = $request->category_id;
        $post->blog         = $request->blog;

        $post->save();

        $post->tags()->sync($request->tags);

        Session::flash('success', 'Post Updated successfully');

        return redirect()->route('post.index');
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
        $post = Post::find($id);

        $post->delete();

        Session::flash('success','The post has been trashed');

        return redirect()->route('post.index');
    }

    public function trashed(){

        $posts = Post::onlyTrashed()->get();

        return view('admin.posts.trashed')->with('posts',$posts);


    }

    public function kill($id){

        $post = Post::withTrashed()->where('id', $id)->first();

        $path = parse_url($post->featuredImage);
        File::delete(public_path($path['path']));

        $post->forceDelete();

        Session::flash('success', 'Post deleted successfully');

        return redirect()->back();

    }

    public function restore ($id){
        //

        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        Session::flash('success', 'Post restored successfully');

        return redirect()->route('post.index');
    }
}
