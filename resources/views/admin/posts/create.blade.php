@extends('layouts.app')

@section('title')

    New Post | Afrik Eveil
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m9 l12 invoice-brief grey lighten-2 red-text z-depth-1">
            <h4 class="text center">
                Create a new post
            </h4>
        </div>
    </div>
    <br> <br>
    <div class="col s12 m12 l6">
        <div class="card-panel">
            <div class="row">
                <form action="{{ route('post.store')}}"  method="post" class="col s12 right-alert" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="title" name="title" type="text" class="validate">
                            <label for="title">Title</label>
                            @if ($errors->has('title'))
                                <div id="uname-error" class="error">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                    </div>

                    @if ($errors->has('featuredImage'))
                        <br><div id="uname-error" class="error">{{ $errors->first('featuredImage') }}</div>

                    @endif
                    <label for="featuredImage" class="">featured Image</label><br>
                    <input  name="featuredImage" type="file">
                    <div class="input-field col s6">
                        <div class="select-wrapper initialized">
                            <select name="category_id" class="initialized">
                                <option value="" disabled="" selected="">Category</option>

                                @foreach($categories as $category)

                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>

                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('category_id'))
                            <div id="uname-error" class="error">{{ $errors->first('category_id') }}</div><br>
                        @endif
                    </div>
                    <div class="input-field col s6">
                        <div class="select-wrapper initialized">
                            <select name="blog" class="initialized">
                                <option value="" disabled="" selected="">Type</option>
                                <option value="blog"> Blog </option>
                                <option value="post"> Post </option>
                            </select>
                        </div>
                        @if ($errors->has('blog'))
                            <div id="uname-error" class="error">{{ $errors->first('blog') }}</div><br>
                        @endif
                    </div>
                    <div class="input-field col s12">
                        <div class="select-wrapper initialized">
                            <label for="Tag" class="">Tags</label><br><br>
                            @foreach($tags as $tag)
                                <input name="tags[]" value="{{ $tag->id }}" type="checkbox" class="filled-in" id="{{ $tag->tag }}">
                                <label for="{{ $tag->tag }}">{{ $tag->tag }}</label>
                            @endforeach
                        </div>
                        @if ($errors->has('tag_id'))
                            <div id="uname-error" class="error">{{ $errors->first('tag_id') }}</div><br>
                        @endif
                    </div>
                    <div class="input-field col s12">
                        <div class="select-wrapper initialized">
                            <select name="language" class="initialized">
                                <option value="" disabled="" selected="">Language</option>
                                <option value="english">English </option>
                                <option value="french">French</option>
                            </select>
                        </div>
                        @if ($errors->has('language'))
                            <div id="uname-error" class="error">{{ $errors->first('language') }}</div><br>
                        @endif
                    </div>

                    <br>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-question-answer prefix"></i>
                            <textarea id="content" name="content" class="materialize-textarea"></textarea>
                            @if ($errors->has('content'))
                                <div id="uname-error" class="error">{{ $errors->first('content') }}</div><br>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <button class="btn waves-effect waves-light right" type="submit" name="submit">Create Post
                                <i class="mdi-content-send right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection