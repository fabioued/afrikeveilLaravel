@extends('layouts.app')

@section('title')
    {{ trans('app.profileTitle') }}
@endsection

@section('content')
    <section id="content">
        <!--start container-->
        <div class="container">
            <div id="profile-page" class="section">
                <!-- profile-page-header -->
                <div id="profile-page-header" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{asset('images/user-profile-bg.jpg')}}" alt="user background">
                    </div>
                    <figure class="card-profile-image">
                        <img src="{{asset($user->profile->avatar)}}" alt="{{$user->name}}" class="circle z-depth-2 responsive-img activator">
                    </figure>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s3 offset-s2">
                                <h4 class="card-title grey-text text-darken-4">{{$user->name}}</h4>
                                <p class="medium-small grey-text">@if($user->admin) {{ trans('app.administrator') }} @else {{ trans('app.author') }} @endif</p>
                            </div>
                            <div class="col s3">
                                <h4 class="card-title grey-text text-darken-4">{{$user->email}}</h4>
                                <p class="medium-small grey-text">{{ trans('app.email') }}</p>
                            </div>
                            <div class="col s4 right-align">
                                <a class="btn-floating activator waves-effect waves-light darken-2 right">
                                    <i class="mdi-action-perm-identity"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <p>
                            <span class="card-title grey-text text-darken-4">{{$user->name}}<i class="mdi-navigation-close right"></i></span>
                            <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> @if($user->admin) {{ trans('app.administrator') }} @else {{ trans('app.author') }}@endif</span>
                        </p>

                        <p>{!! $user->profile->about  !!}</p>

                        <p><a href="{{$user->profile->facebook}}" target="blank" class="waves-effect waves-light btn green"><i class="mdi-social-group-add white-text text-darken-2"></i> Facebook</a></p>
                    </div>
                </div>
                <!--/ profile-page-header -->

                <!-- profile-page-content -->
                <div id="profile-page-content" class="row">
                    <!-- profile-page-sidebar-->
                    <div id="profile-page-sidebar" class="col s12 m4">
                        <!-- Profile About  -->
                        <div class="card light-blue">
                            <div class="card-content white-text">
                                <span class="card-title ">{!! trans('app.aboutMe')  !!}</span>
                                <p style="text-align: justify">{!! $user->profile->about !!}</p>
                            </div>
                        </div>
                        <!-- Profile About  -->

                        <!-- Profile About  -->
                        <div class="card amber darken-2">
                            <div class="card-content white-text center-align">
                                <p class="card-title"><i class="mdi-social-group-add"></i> Facebbok</p>
                                <p><a href="{{$user->profile->facebook}}" target="blank" class="waves-effect waves-light btn green">{{ trans('app.view') }}</a></p>
                            </div>
                        </div>
                        <!-- Profile About  -->
                    </div>
                    <!-- profile-page-sidebar-->

                    <!-- profile-page-wall -->
                    <div id="profile-page-wall" class="col s12 m8">
                        <!-- profile-page-wall-share -->
                        <div id="profile-page-wall-share" class="row">
                            <div class="col s12">
                                <ul class="tabs tab-profile z-depth-1 light-blue">
                                    <li class="tab col s3"><a class="white-text waves-effect waves-light active" href="#UpdateStatus"><i class="mdi-editor-border-color"></i> {{ trans('app.updateProfile') }}</a>
                                    </li>
                                </ul>
                                <!-- UpdateStatus-->
                                <form action="{{ route('users.profile.update',['id' => $user->id])}}"  method="post" class="col s12 right-alert" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <br>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-circle prefix"></i>
                                            <input id="name" name="name" type="text" class="validate" value="{{$user->name}}">
                                            <label for="name">{{ trans('app.name') }}</label>
                                            @if ($errors->has('title'))
                                                <div id="uname-error" class="error">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="input-field col s6">
                                            <i class="mdi-communication-email prefix"></i>
                                            <input id="email" name="email" type="email" class="validate" required value="{{$user->email}}">
                                            <label for="email">{{ trans('app.email') }}</label>
                                            @if ($errors->has('email'))
                                                <div id="uname-error" class="error">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="mdi-action-lock-outline prefix"></i>
                                            <input name="password" id="password" type="password" class="validate">
                                            <label for="password">{{ trans('app.newPassword') }}</label>
                                            @if ($errors->has('password'))
                                                <div id="uname-error" class="error">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>
                                        <div class="input-field col s6">
                                            @if ($errors->has('avatar'))
                                                <br><div id="uname-error" class="error">{{ $errors->first('avatar') }}</div>

                                            @endif
                                            <label for="avatar" class="">{{ trans('app.profileImage') }}</label><br>
                                            <input  name="avatar" type="file" value="{{$user->profile->avatar}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="mdi-content-link prefix"></i>
                                            <input name="facebook" id="facebook" type="url"  value="{{$user->profile->facebook}}">
                                            <label for="facebook" class="">Facebook Url</label>
                                            @if ($errors->has('facebook'))
                                                <br><div id="uname-error" class="error">{{ $errors->first('facebook') }}</div>

                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                    </div>
                                    <div id="UpdateStatus" class="tab-content col s12  grey lighten-4">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label for="textarea" class="">{{ trans('app.aboutMe') }}</label><br>
                                                <textarea name="about" id="textarea" row="5" class="materialize-textarea">{{$user->profile->about}}</textarea>
                                                @if ($errors->has('about'))
                                                    <br><div id="uname-error" class="error">{{ $errors->first('about') }}</div>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s8">
                                            <button class="btn waves-effect waves-light right" type="submit" name="submit">{{ trans('app.update') }}
                                                <i class="mdi-content-save right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ profile-page-wall-share -->
                    </div>
                    <!--/ profile-page-wall -->
                </div>
            </div>
        </div>
        </div>
        <!--end container-->
    </section>
@endsection