@extends('layouts.app')

@section('title')

    All Tags | Afrik Eveil
@endsection

@section('content')
    @if($tags->count() > 0)
    <div class="row">
        <div class="col s12 m9 l12 invoice-brief grey lighten-2 red-text z-depth-1" >
            <h4 class="text center">
                All Tags
            </h4>
        </div>
    </div>
    <br> <br>
    <a class="waves-effect waves-light btn-large " href="{{route('tags.create')}}"><i class="mdi-content-add-circle right"></i>New Tag</a>

    <div class="col s12 m8 l9">
        <br>
        <table class="striped">
            <thead>
                <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Edit</th>
                    <th data-field="price">Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{$tag->tag}}</td>
                    <td><a class="waves-effect waves-light btn blue" href="{{route('tags.edit',   ['id' => $tag->id ])}}"><i class="mdi-editor-border-color right"></i>Edit</a></td>
                    <td><a class="waves-effect waves-light btn red " href="{{route('tags.delete', ['id' => $tag->id ])}}"><i class="mdi-action-delete right"></i>Delete</a></td>
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
                                            <h1 class="white-text  col s12">No Tags Yet</h1>
                                            <a class="waves-effect waves-light btn-large " href="{{route('tags.create')}}"><i class="mdi-content-add-circle right"></i>New Tag</a>
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