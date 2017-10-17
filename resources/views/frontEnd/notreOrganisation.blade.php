@extends('layouts.frontEnd.app')

@section('title')
    {{ trans('app.notreOrganisationTitle') }}
@endsection

@section('style')
    <style type="text/css">
        .tab p {
            text-align: justify;
        }
    </style>
@endsection

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ trans('app.notreOrganisation') }}</h1>
                    <img src="{{asset('images/uploads/hero-line.png')}}" alt="">
                    <ul class="breadcumb">
                        <li><a href="{{route('home')}}">{{ trans('app.home') }}</a></li>
                        <li><span>/</span>{{ trans('app.notreOrganisation') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="intro clientsv3">
        <div class="container">
            <div class="intro-ct">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div id="owl-intro">
                            <div class="intro-it item">
                                <img src="{{asset('images/uploads/intro-slider.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <img class="quote-ico" src="{{asset('images/uploads/quote-ico.png')}}" alt="">
                        <div class="clientv3-it">
                            <p>{{ trans('app.ourMission') }}</p>
                            <a href="#">{{ trans('app.damienSomeCitation') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projectv3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="video">
                        <img  class="thumbnail" src="{{asset('images/uploads/projectv3-img.png')}}" alt="">
                        <a class="html5lightbox thm-btn" title=" {{ trans('app.introdeAfrikeveil') }} " href="https://youtu.be/mObSx7bMNTE">
                            <img class="btn hvr-grow" src="{{asset('images/uploads/playbtn1.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="project-left">
                        <div class="heading-it">
                            <h1>{{ trans('app.FoundationAfrikeveil') }}</h1>
                            <img src="{{asset('images/uploads/line-title2.png')}}" alt="">
                            <p style="text-align:justify;">
                                {{ trans('app.intro') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aboutservice">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="heading-it">
                        <img src="{{asset('images/uploads/line-title2.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tabs">
                        <ul class="tab-links">
                            <li class="active"><a href="#tab1"> {{trans('app.mission')}}</a></li>
                            <li><a href="#tab2">{{trans('app.vision')}}</a></li>
                            <li><a href="#tab3">{{trans('app.approach')}}</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab active">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <img src="{{asset('images/uploads/mission.png')}}" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <h2><a href="#"></a></h2>
                                        <p>{{trans('app.missionDescription')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab ">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <img src="{{asset('images/uploads/vision.png')}}" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-sm-12">
                                        <h2><a href="#"></a></h2>
                                        <p>{{trans('app.visionDescription')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <img src="{{asset('images/uploads/approche.png')}}" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-sm-12">
                                        <h2><a href="#"></a></h2>
                                        <p>{{trans('app.approachDescription')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
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
@endsection
