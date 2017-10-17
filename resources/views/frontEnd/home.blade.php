@extends('layouts.frontEnd.app')

@section('title')
    {{ trans('app.afrikeveil') }}
@endsection

@section('content')
    @include('layouts.frontEnd.slideshow')
    <div class="aboutservice">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="heading-it">
                        <h1>{{ trans('app.introTitle') }}</h1>
                        <img src="{{asset('images/uploads/line-title.png')}}" alt="">
                        <p class="afIntro">{{ trans('app.intro') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bloglistpost-v1 blogv3 blog servicesingle bloglistpost-v2 bloglistpost-v3" style="background: #f0f0f0;">
        <div class="container">
            <div class="row">
                @foreach($latest_posts as $post)
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="blogpost-v1">
                            <div class="blog-it normal">
                                <div class="post-thumbnail crop">
                                    <img class="post-img" src="{{asset($post->featuredImage)}}" alt="thumb1" style="height:auto;">
                                </div>
                                <div class="blog-it-left">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                            <div class="date">
                                                <img src="{{asset('images/uploads/line-title.png')}}" alt="">
                                                <p>{{$post->created_at->toFormattedDateString()}}</p>
                                                <img src="{{asset('images/uploads/line-title.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <div class="inner-ct">
                                                <h2><a href="">
                                                        {{substr($post->title,0,40)."..."}}</a>
                                                </h2>
                                                <div class="date-inner">
                                                    <span><i class="ion-android-person"></i><em>By</em></span>
                                                    <span>{{$post->user->name}}</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i>{{$post->created_at->diffForHumans()}}</span>
                                                    <span><i class="fa fa-list-alt" aria-hidden="true"></i>Category: {{$post->category['name']}}</span>
                                                </div>
                                                <img class="divide2" src="{{asset('images/uploads/blogline.png')}}" alt="">
                                                <p style="text-align:justify;"> {!! substr($post->content, 0, 200)."..." !!}</p>
                                                <a class="read" href="{{'post/'.$post->slug}}">Read More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="core corev2">
        <div class="container">
            <div class="row">
                <div class="core-ct">
                    <a class="html5lightbox thm-btn" title="Introduction DE AFRIK EVEIL" href="{{$settings->introductionVideo}}"><img src="{{asset('images/uploads/playbtn1.png')}}" alt=""></a>
                    <div class="heading-it">
                        <h1> {{ trans('app.discover') }}   <span>{{ trans('app.afrikeveil') }}</span></h1>
                        <img src="{{asset('images/uploads/title-line.png')}}" alt="">
                    </div>
                    <div class="core-text">
                        <span>{{ trans('app.everything') }}</span><span></span><span class="embbed">{{ trans('app.surnous') }}</span>
                    </div>
                    <!--<iframe width="1080" height="500" src="https://www.youtube.com/embed/-xDcvGWgTNk" frameborder="0" allowfullscreen></iframe>-->
                </div>
            </div>
        </div>
    </div>
    <div class="contactv1">
        <div class="container contact-ct">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <h1>{{trans('app.brochureMoreInfo')}}</h1>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="contact-bt">
                        <a href="{{asset('documents/Trifold-AFRIKEVEIL.pdf')}}" target="_blank" class="readmore2">{{trans('app.download')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="aboutservice">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="heading-it">
                        <h1>{{ trans('app.newsletter') }}</h1>
                        <img src="{{asset('images/uploads/line-title.png')}}" alt="">
                        <p class="afIntro">{{ trans('app.newsletterText') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="freequote contactform">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="title"></div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="left-it ct-form">
                        <form method="post" action="{{route('subscribe')}}" class="ct-left">
                            {{csrf_field()}}
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <input  name="name" 	 class="name"   type="text" 	placeholder="{{ trans('app.name') }}" 	required>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <input  name="email" 	 class="email"  type="email" 	placeholder="{{ trans('app.email') }}" required>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <input  name="subscribe" class="submit2" type="submit" 	value="{{ trans('app.subscribe') }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scroll')
    <script>
        $(window).scrollPress();
    </script>
@endsection