@extends('layouts.app')

@section('title')
    {{ trans('app.usersTitle') }}
@endsection

@section('content')

    @if($users->count() > 0)
        <div class="row">
            <div class="col s12 m9 l12 invoice-brief grey lighten-2 red-text z-depth-1">
                <h4 class="text center">
                    {{ trans('app.users') }}
                </h4>
            </div>
        </div>
        <br> <br>
    <a class="waves-effect waves-light btn-large " href="{{route('users.create')}}"><i class="mdi-social-person-add right"></i>{{ trans('app.newUser') }}</a>

    <div class="col s12 m8 l9">
        <br>
        <table class="striped hoverable">
            <thead>
            <tr>
                <th data-field="id">{{ trans('app.image') }}</th>
                <th data-field="id">{{ trans('app.nom') }}</th>
                <th data-field="id">{{ trans('app.permission') }}</th>
                <th data-field="name">{{ trans('app.actions') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        <figure class="card-profile-image">
                            <img src="{{asset($user->profile->avatar)}}"   width="100px" height="80px" alt="{{$user->name}}" class="circle z-depth-2 responsive-img activator">
                        </figure>
                    </td>
                    <td>{{$user->name}}</td>
                    <td>
                        @if($user->admin)
                            {{ trans('app.superAdmin') }}
                        @else
                            <a href="{{route('users.admin', ['id' => $user->id ] )}}" class="waves-effect waves-light green btn"><i class="mdi-action-verified-user left"></i>{{ trans('app.makeAdmin') }}</a>
                        @endif

                    </td>
                    <td>
                        <a class="waves-effect waves-light btn blue" href="{{route('users.profile',     ['id' => $user->id ])}}"><i class="mdi-action-visibility"></i>{{ trans('app.view') }}</a><br><br>
                        @if(Auth::id() != $user->id)
                            <a class="waves-effect waves-light btn red " href="{{route('users.delete',      ['id' => $user->id ])}}"><i class="mdi-action-delete right"></i>{{ trans('app.delete') }}</a>
                        @endif
                    </td>
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
                                            <h1 class="white-text  col s12">No Users</h1>
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