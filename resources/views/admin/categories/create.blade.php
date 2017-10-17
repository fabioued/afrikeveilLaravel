@extends('layouts.app')

@section('title')

    New Category | Afrik Eveil
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m9 l12 invoice-brief grey lighten-2 red-text z-depth-1">
            <h4 class="text center">
                Create a new Category
            </h4>
        </div>
    </div>
    <br> <br>
    <div class="col s12 m12 l6">
        <div class="card-panel">
            <div class="row">
                <form action="{{ route('category.store') }}"  method="post" class="col s12 right-alert">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="category" name="category" type="text" class="validate">
                            <label for="category">Name</label>
                            @if ($errors->has('category'))
                                <div id="uname-error" class="error">{{ $errors->first('category') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <button class="btn waves-effect waves-light right" type="submit" name="submit">Create
                                <i class="mdi-content-send right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection