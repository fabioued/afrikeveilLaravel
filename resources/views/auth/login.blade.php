@extends('layouts.login')

@section('title')
    {{ trans('app.loginTitle') }}
@endsection

@section('content')

    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12 center">
                        <img src="{{asset('images/login-logo.png    ')}}" alt="" class="circle responsive-img valign profile-image-login">
                        <p class="center login-form-text">{{ trans('app.login Text') }}</p>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required >
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <label for="email" class="center-align">{{ trans('app.email') }} </label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}"">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        <label for="password">{{ trans('app.password') }} </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l12  login-text">
                        <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">{{ trans('app.rememberMe') }}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('app.login') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
