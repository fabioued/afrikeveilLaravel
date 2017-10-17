@extends('layouts.frontEnd.app')

@section('title')
    {{ trans('app.contactTitle') }}
@endsection


@section('style')
    <style>
        #map {
            height: 400px;
            margin-bottom: 20px;
        }
        .active {
            max-width: 150px;
            background: #099;
            color: #fff;
        }
    </style>
@endsection

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ trans('app.contactUs') }}</h1>
                    <img src="{{asset('images/uploads/hero-line.png')}}" alt="">
                    <ul class="breadcumb">
                        <li><a href="/">{{ trans('app.home') }}</a></li>
                        <li><span>/</span> {{ trans('app.contactUs') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contactpage servicesingle map-contact" id="map-check">
        <div class="container">
            <div class="row">
                <div class="contact-it sidebar">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="sb-it">
                            <div class="sb-title">
                                <h2>{{ trans('app.ourcontact') }}</h2>
                            </div>
                            <div class="sb-content">
                                <div class="ct-it">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p>{{$settings->addresse}}</p>
                                </div>
                                <div class="ct-it">
                                    <i class="ion-android-phone-portrait"></i>
                                    <p>{{$settings->contact_numberEn}}</p>

                                </div>
                                <div class="ct-it">
                                    <i class="ion-email"></i>
                                    <p><a href="#">{{$settings->contact_emailFr}}</a><br/>
                                        <a href="#">Ghana:{{$settings->contact_emailEn}}</a>
                                    </p>
                                </div>
                                <div class="ct-icon">
                                    <a href="https://www.facebook.com/afrikeveil.org/" target="_blank" class="hvr-grow"><i class="ion-social-facebook "></i></a>
                                    <a href="https://twitter.com/a_eveil" 			   target="_blank" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <!--div id="map_canvas" style="width:100%;height:430px">
                        </div-->
                        <div id="map"></div>
                        <div id="dragend"></div>
                        <div id="bounds_changed"></div>
                        <script src='https://maps.googleapis.com/maps/api/js'></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contactpage-form bloglistpost-v1 blogsingle" >
        <div class="container blogpost-v1">
            <div class="row blogsingle-ct">
                <div class="cmt-form blog-it-left">
                    <!-- comment form -->
                    <form action="{{route('email')}}" method="post" class="post-cmt">
                        {{ csrf_field() }}
                        <label class="hd">{{ trans('app.leaveMessage') }}</label>
                        <p></p>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <input name="name" class="name" type="text" placeholder="{{ trans('app.name') }}">
                                @if ($errors->has('name'))
                                    <div id="uname-error" class="error">{{ $errors->first('name') }}</div><br>
                                @endif
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <input  name="email" class="email" type="text" placeholder="{{ trans('app.email') }}*" required>
                                @if ($errors->has('email'))
                                    <div id="uname-error" class="error">{{ $errors->first('email') }}</div><br>
                                @endif
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <input name="phone" class="email" type="tel" placeholder="{{ trans('app.phone') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" id="" cols="" rows="" placeholder="{{ trans('app.message') }}"></textarea>
                                @if ($errors->has('message'))
                                    <div id="uname-error" class="error">{{ $errors->first('message') }}</div><br>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input class="submit" type="submit" value="{{ trans('app.sendMessage') }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contactv1">
        <div class="container contact-ct">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <h1>{{ trans('app.sendFacebook') }}</h1>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="contact-bt">
                        <a href="https://m.me/afrikeveil.org" target="_blank" class="readmore2">{{ trans('app.send') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(window).scrollPress();
    </script>
@endsection
