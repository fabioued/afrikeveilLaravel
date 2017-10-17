@extends('layouts.app')

@section('title')

    Trashed Posts | Afrik Eveil
@endsection

@section('content')
    <div class="col s12 m8 l9">
        @if($posts->count() > 0)
            <div class="row">
                <div class="col s12 m9 l12 invoice-brief grey lighten-2 red-text z-depth-1">
                    <h4 class="text center">
                        All Trashed Posts
                    </h4>
                </div>
            </div>
            <br> <br>
        <table class="striped hoverable">
            <thead>
            <tr>
                <th data-field="id">Image</th>
                <th data-field="id">Title</th>
                <th data-field="id">Language</th>
                <th data-field="price">Restore</th>
                <th data-field="price">Delete</th>
            </tr>
            </thead>
            <tbody>


                @foreach($posts as $post)
                    <tr>
                        <td> <img src="{{asset($post->featuredImage)}}" width="90px" height="50px" alt="{{$post->title}}"></td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->language}}</td>
                        <td><a class="waves-effect waves-light btn green " href="{{route('post.restore', ['id' => $post->id ])}}"><i class="mdi-action-cached right "></i> Restore</a></td>
                        <td><a class="waves-effect waves-light btn red "   href="{{route('post.kill',    ['id' => $post->id ])}}"><i class="mdi-content-remove-circle right "></i>Delete</a></td>
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
                                            <h1 class="white-text  col s12">No Trashed Posts Yet</h1>
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