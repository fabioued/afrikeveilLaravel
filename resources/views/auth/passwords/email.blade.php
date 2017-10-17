@extends('layouts.login')

@section('title')
    Reset Password | Afrik Eveil
@endsection

@section('content')
    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="login-form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12 center">
                        <h4>Forgot Password</h4>
                        <p class="center">You can reset your password</p>
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
                        <label for="email" class="center-align">E-Mail Address</label>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary">
                        Send Password Reset Link
                    </button>
                    <div class="input-field col s12">
                        <p class="margin sign-up"><a href="/login">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
