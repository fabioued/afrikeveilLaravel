@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col s12 m9 l12 invoice-brief grey lighten-2 red-text z-depth-1">
            <h4 class="text center">
                Editing User {{$user->name}}
            </h4>
        </div>
    </div>
    <br> <br>
    <div class="col8 s8 m8 l8">
        <div class="card-panel">
            <div class="row">
                <form action="{{ route('users.update',['id' => $user->id] )}}"  method="post" class="col s8 right-alert" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="title" name="title" type="text" class="validate" value="{{$user->name}}">
                            <label for="name">Name</label>
                            @if ($errors->has('name'))
                                <div id="uname-error" class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>

                    @if ($errors->has('avatar'))
                        <br><div id="uname-error" class="error">{{ $errors->first('avatar') }}</div>

                    @endif

                    <label for="avatar" class="">featured Image</label><br>
                    <input  name="avatar" type="file">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-question-answer prefix"></i>
                            <textarea id="about" name="about" class="materialize-textarea" >{{$user->about}}</textarea>
                            <label for="about" class="">Content</label>
                            @if ($errors->has('about'))
                                <div id="uname-error" class="error">{{ $errors->first('about') }}</div><br>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <button class="btn waves-effect waves-light right" type="submit" name="submit">Update post
                                <i class="mdi-content-send right"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="input-field col s4">
                    <div class="card-image profile-medium">
                        <img src="{{asset($user->profile->avatar)}}" alt="{{$user->avatar}}" class="responsive-img profile-post-image profile-medium">
                        <br><span class="card-title center"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection