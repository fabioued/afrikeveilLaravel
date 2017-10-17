@extends('layouts.frontEnd.app')

@section('title')
    {{ trans('app.cequeNousFaisonTitle') }}
@endsection

@section('style')
    <style type="text/css">
        .services .item h2{

            font-size:40px;
        }

        .services .item p{

            text-align: justify;
        }
    </style>
@endsection

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ trans('app.howWeWork') }}</h1>
                    <img src="{{asset('images/uploads/hero-line.png')}}" alt="">
                    <ul class="breadcumb">
                        <li><a href="{{route('home')}}">{{ trans('app.home') }}</a></li>
                        <li><span>/</span>{{ trans('app.howWeWork') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="chooseus">
        <div class="container">
            <div class="row">
                <div class="heading-it">
                    <h1>{{ trans('app.ourValues') }}<span><br><br>{{ trans('app.ourValues Text') }}</span></h1>
                    <img src="{{asset('images/uploads/title-line.png')}}" alt="">
                    <p style="font-size:19px;"><br>{{ trans('app.ourValuesIntro') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="services">
        <div class="container">
            <div class="row">
                <div id="service-testimonial">
                    <div class="sv-item item" >
                        <h2>{{ trans('app.research') }}</h2>
                        <p>{{ trans('app.research Text') }}</p>
                    </div>
                    <div class=" sv-item item ">
                        <h2>{{ trans('app.advisory') }}</h2>
                        <p>{{ trans('app.advisory Text') }}</p>
                    </div>
                    <div class=" sv-item item ">
                        <h2>{{ trans('app.incubation') }}</h2>
                        <p>{{ trans('app.incubation Text') }}</p>
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