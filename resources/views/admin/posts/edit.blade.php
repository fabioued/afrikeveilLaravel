@extends('layouts.app')

@section('title')

    Edit Post | Afrik Eveil
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m9 l12 invoice-brief grey lighten-2 red-text z-depth-1">
            <h4 class="text center">
                Editing post {{$post->title}}
            </h4>
        </div>
    </div>
    <br> <br>
            <div class="col8 s8 m8 l8">
                <div class="card-panel">

                    <div class="col s12 m8 l12">
                        <a class="waves-effect waves-light btn modal-trigger  light-blue" href="#modal1"><i class="mdi-action-visibility"></i>Post Image</a>
                            <div id="modal1" class="modal">
                                <div class="modal-content">
                                    <div class="input-field col s12">
                                        <h4 class="text center">Post Image</h4>
                                        <div class="card-image profile-medium center">
                                            <img src="{{$post->featuredImage}}" alt="{{$post->featuredImage}}" width="200" height="80" class="responsive-img profile-post-image profile-medium">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><i class="mdi-navigation-cancel"></i></a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="{{ route('post.update',['id' => $post->id] )}}"  method="post" class="col s12 right-alert" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="title" name="title" type="text" class="validate" value="{{$post->title}}">
                            <label for="title">Title</label>
                            @if ($errors->has('title'))
                                <div id="uname-error" class="error">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="input-field col s6">
                        @if ($errors->has('featuredImage'))
                            <br><div id="uname-error" class="error">{{ $errors->first('featuredImage') }}</div>

                        @endif
                        <label for="featuredImage"   class="">featured Image</label><br>
                        <input  name="featuredImage" type="file" >
                    </div>

                    <div class="input-field col s6">
                        <div class="select-wrapper initialized">Category
                            <select name="category_id" class="initialized">


                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                            @if($post->category->id == $category->id)

                                                selected
                                            @endif

                                            > {{ $category->name }} </option>
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
                                <option  @if($post->blog)

                                         selected disabled
                                        @endif> {{ $post->blog }} </option>
                                <option value="blog"> Blog </option>
                                <option value="post"> Post </option>
                            </select>
                        </div>
                        @if ($errors->has('blog'))
                            <div id="uname-error" class="error">{{ $errors->first('blog') }}</div><br>
                        @endif
                    </div>
                    <div class="input-field col s6">
                        <div class="select-wrapper initialized">Tags:<br><br>
                            @foreach($tags as $tag)
                                <input name="tags[]" value="{{ $tag->id }}"
                                       @foreach($post->tags as $t)
                                            @if($tag->id == $t->id)
                                               checked
                                            @endif
                                       @endforeach
                                       type="checkbox" class="filled-in" id="{{ $tag->tag }}">
                                <label for="{{ $tag->tag }}">{{ $tag->tag }}</label>
                            @endforeach
                        </div>
                        @if ($errors->has('tag_id'))
                            <div id="uname-error" class="error">{{ $errors->first('tag_id') }}</div><br>
                        @endif
                    </div>
                    <div class="input-field col s6">
                        <div class="select-wrapper initialized">Language:
                            <select name="language" class="initialized">
                                <option value="{{$post->language}}" elected="{{$post->language}}">{{$post->language}}</option>
                                <option value="english">English </option>
                                <option value="french">French</option>
                            </select>
                        </div>
                        @if ($errors->has('language'))
                            <div id="uname-error" class="error">{{ $errors->first('language') }}</div><br>
                        @endif
                    </div><br><br>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-question-answer prefix"></i>
                            <textarea id="content" name="content" class="materialize-textarea" >{{$post->content}}</textarea>
                            @if ($errors->has('content'))
                                <div id="uname-error" class="error">{{ $errors->first('content') }}</div><br>
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
@endsection