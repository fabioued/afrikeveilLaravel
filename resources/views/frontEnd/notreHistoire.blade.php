@extends('layouts.frontEnd.app')

@section('title')
    {{ trans('app.notreHistoireTitle') }}
@endsection

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ trans('app.notreHistoire') }}</h1>
                    <img src="{{asset('images/uploads/hero-line.png')}}" alt="">
                    <ul class="breadcumb">
                        <li><a href="{{route('home')}}">{{ trans('app.home') }}</a></li>
                        <li><span>/</span>{{ trans('app.notreHistoire') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonialv2 popular blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 popular-left">
                    <div class="test-title left-it">
                        <h2>{{ trans('app.notreHistoire') }}</h2>
                        <img  src="{{asset('images/uploads/line-title.png')}}" alt="">
                        <p>{{ trans('app.notreHistoireIntro') }} <a href="http://www.healliance.org" target="_blank">{{ trans('app.www.healliance.org') }}</a>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="question-it">
                                <div class="accordion-item">
                                    <button class="accordion"><h2>{{ trans('app.July – Sept, 2010') }}</h2></button>
                                    <div class="panel">
                                        <p> {{ trans('app.July – Sept, 2010 Text') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="question-it">
                                <div class="accordion-item">
                                    <button class="accordion"><h2>{{ trans('app.February 2011') }}</h2></button>
                                    <div class="panel">
                                        <p> {{ trans('app.February 2011 Text') }}Formalization of the  A.E. Foundation (then Harambe Burkina Faso Eveil) by voting on, adopting and implementing its constitution and bylaws.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="question-it">
                                <div class="accordion-item">
                                    <button class="accordion"><h2>{{ trans('app.April 2011') }} </h2></button>
                                    <div class="panel">
                                        <p> {{ trans('app.April 2011 Text') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="question-it">
                                <div class="accordion-item">
                                    <button class="accordion"><h2>{{ trans('app.September 2011') }}</h2></button>
                                    <div class="panel">
                                        <p> {{ trans('app.September 2011 Text') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
