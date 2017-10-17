@extends('layouts.app')

@section('title')

    All Posts | Afrik Eveil
@endsection

@section('content')

    @if($posts->count() > 0)
        <div class="row">
            <div class="col s12 m9 l12 invoice-brief grey lighten-2 red-text z-depth-1">
                <h4 class="text center">
                    All Posts
                </h4>
            </div>
        </div>
        <br> <br>
    <a class="waves-effect waves-light btn-large " href="{{route('post.create')}}"><i class="mdi-content-add-circle right"></i>New Post</a>

    <div class="col s12 m8 l9">
        <br>
        <table class="striped hoverable">
            <thead>
            <tr>
                <th data-field="id">Image</th>
                <th data-field="id">Title</th>
                <th data-field="id">Type</th>
                <th data-field="id">Language</th>
                <th data-field="name">Edit</th>
                <th data-field="price">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td> <img src="{{asset($post->featuredImage)}}" width="90px" height="50px" alt="{{$post->title}}"></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->blog}}</td>
                    <td>{{$post->language}}</td>
                    <td><a class="waves-effect waves-light btn blue" href="{{route('post.edit',   ['id' => $post->id ])}}"><i class="mdi-editor-border-color right"></i>Edit</a></td>
                    <td><a class="waves-effect waves-light btn red " href="{{route('post.delete', ['id' => $post->id ])}}"><i class="mdi-action-delete right"></i>Trash</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else
            <div id="error-page">

                <div class="row">
                    <div class="col s12">
                        <div class="browser-window">
                            <div class="content">
                                <div class="row">
                                    <div id="site-layout-example-top" class="col s12">
                                        <p class="flat-text-logo center white-text caption-uppercase"></p>
                                    </div>
                                    <div id="site-layout-example-right" class="col s12 m12 l12">
                                        <div class="row center">
                                            <br><br><br><br><br>
                                            <h1 class="white-text  col s12">No Published Posts</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endif
    </div>
@endsection