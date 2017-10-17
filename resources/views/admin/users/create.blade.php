@extends('layouts.app')

@section('title')
    {{ trans('app.createUserTitle') }}
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m9 l12 invoice-brief grey lighten-2 red-text z-depth-1">
            <h4 class="text center">
                {{ trans('app.createUser') }}
            </h4>
        </div>
    </div>
    <br> <br>
    <div class="col s12 m12 l6">
        <div class="card-panel">
            <div class="row">
                <form action="{{ route('users.store')}}"  method="post" class="col s12 right-alert" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="name" name="name" type="text" class="validate">
                            <label for="name">{{ trans('app.name') }}</label>
                            @if ($errors->has('title'))
                                <div id="uname-error" class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-communication-email prefix"></i>
                            <input id="email" name="email" type="email" class="validate" required>
                            <label for="name">{{ trans('app.email') }}</label>
                            @if ($errors->has('email'))
                                <div id="uname-error" class="error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <button class="btn waves-effect waves-light right" type="submit" name="submit">{{ trans('app.create') }}
                                <i class="mdi-content-send right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection