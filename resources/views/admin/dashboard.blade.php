@extends('layouts.app')

@section('title')
    {{ trans('app.adminTitle') }}
@endsection

@section('content')
<div class="container">
    <div id="card-stats">
        <div class="row">
            <div class="col s12 m9 l12 invoice-brief grey lighten-2 green-text z-depth-1">
                <h4 class="text center">
                    {{ trans('app.welcome') }} {{Auth::user()->name}}
                </h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content  green white-text">
                        <p class="card-stats-title"><i class="mdi-action-view-list"></i>{{ trans('app.publishedPosts') }}</p>
                        <h4 class="card-stats-number">{{ $posts_count }}</h4>
                    </div>
                    <div class="card-action  green darken-2"></div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content  red white-text">
                        <p class="card-stats-title"><i class="mdi-action-delete "></i>{{ trans('app.trashedPosts') }}</p>
                        <h4 class="card-stats-number">{{ $trashed_count }}</h4>
                    </div>
                    <div class="card-action  red darken-2"></div>
                </div>
            </div>
            <div class="col s12 m6 l2">
                <div class="card">
                    <div class="card-content  blue white-text">
                        <p class="card-stats-title"><i class="mdi-social-group-add"></i>{{ trans('app.users') }}</p>
                        <h4 class="card-stats-number">{{ $users_count }}</h4>
                    </div>
                    <div class="card-action  blue darken-2"></div>
                </div>
            </div>
            <div class="col s12 m6 l2">
                <div class="card">
                    <div class="card-content  purple white-text">
                        <p class="card-stats-title"><i class="mdi-editor-format-list-bulleted"></i>{{ trans('app.categories') }}</p>
                        <h4 class="card-stats-number">{{ $categories_count }}</h4>
                    </div>
                    <div class="card-action  purple darken-2"></div>
                </div>
            </div>
            <div class="col s12 m6 l2">
                <div class="card">
                    <div class="card-content  purple white-text">
                        <p class="card-stats-title"><i class="mdi-maps-local-offer"></i>{{ trans('app.tags') }}</p>
                        <h4 class="card-stats-number">{{ $tags_count }}</h4>
                    </div>
                    <div class="card-action  purple darken-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div id="blog-post-full">
        <!-- medium size post-->
        <div class="card medium">
            <div class="card-image">
                <img src="{{$latest_post->featuredImage}}" alt="sample">
                <span class="card-title">{{$latest_post->title}}</span>
                <span class="card-title blog-post-full-cat right cyan"><a href="#">#{{ trans('app.latestPost') }}</a></span>
            </div>
            <div class="card-content">
                <p class="ultra-small">{{$latest_post->created_at->toFormattedDateString()}}</p>
                <p>{!!  $latest_post->content!!}</p>

            </div>
            <div class="card-action">
                {{ trans('app.by') }} <a href="#">{{$latest_post->user->name}}</a>
                   <a href="{{route('post.single',['slug' => $latest_post->slug ])}}" target="_blank" class="right">{{ trans('app.view') }} &gt;</a>
            </div>
        </div>
        <!-- video post -->
        <div class="card">
            <div class="card-image">
                <div class="video-container no-controls">
                    <iframe width="640" height="260" src="{{$introVideo->introductionVideo}}" frameborder="0" allowfullscreen=""></iframe>
                </div>
                <span class="card-title">{{ trans('app.introductionVideo') }}</span>
                <span class="card-title blog-post-full-cat right red"><a href="#">#{{ trans('app.introductionVideo') }}</a></span>
            </div>
        </div>
    </div>
</div>
@endsection
