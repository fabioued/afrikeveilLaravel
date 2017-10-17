@extends('layouts.app')

@section('title')

    Edit Tag | Afrik Eveil
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m9 l12 invoice-brief grey lighten-2 red-text z-depth-1">
            <h4 class="text center">
                Editing tag : {{$tag->tag}}
            </h4>
        </div>
    </div>
    <br> <br>
    <div class="col s12 m12 l6">
        <div class="card-panel">
            <div class="row">
                <form action="{{ route('tags.update',['id' => $tag->id]) }}"  method="post" class="col s12 right-alert">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="tag" name="tag" type="text" class="validate" value="{{$tag->tag}}">
                            <label for="tag">Name</label>
                            @if ($errors->has('tag'))
                                <div id="uname-error" class="error">{{ $errors->first('tag') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <button class="btn waves-effect waves-light right" type="submit" name="submit">Update
                                <i class="mdi-content-save right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection