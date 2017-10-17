@extends('layouts.frontEnd.app')

@section('title')
    {{ trans('app.areYouInterrestedTitle') }}
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
                    <h1>{{ trans('app.areYouInterrested') }}</h1>
                    <img src="{{asset('images/uploads/hero-line.png')}}" alt="">
                    <ul class="breadcumb">
                        <li><a href="/">{{ trans('app.home') }}</a></li>
                        <li><span>/</span>{{ trans('app.areYouInterrested') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="chooseus chooseusv2 ">
        <div class="container">
            <div class="row">
                <div class="heading-it">
                    <h1>{{ trans('app.areYouInterrested') }}</h1>
                    <img src="{{asset('images/uploads/title-line.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="chooseus-it">
                        <img src="{{asset('images/icon1.png')}}" alt="">
                        <div class="step-content">
                            <h2>{{ trans('app.becomePatron') }}</h2>
                            <p>{{ trans('app.becomePatron Text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="chooseus-it">
                        <img src="{{asset('images/icon2.png')}}" alt="">
                        <div class="step-content">
                            <h2>{{ trans('app.becomeMember') }}</h2>
                            <p>{{ trans('app.becomeMember Text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="chooseus-it">
                        <img src="{{asset('images/icon1.png')}}" alt="">
                        <div class="step-content">
                            <h2>{{ trans('app.becomeSponsor') }}</h2>
                            <p>{{ trans('app.becomeSponsor Text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="chooseus-it">
                        <img src="{{asset('images/icon6.png')}}" alt="">
                        <div class="step-content">
                            <h2>{{ trans('app.partnerWithUs') }}</h2>
                            <p>{{ trans('app.partnerWithUs Text') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="chooseus-it">
                        <img src="{{asset('images/icon5.png')}}" alt="">
                        <div class="step-content">
                            <h2>{{ trans('app.becomeClient') }}</h2>
                            <p>{{ trans('app.becomeClient Text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--div class="contactform consult">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="test-title">
                        <h2>Contactez - Nous!</h2>
                        <img  src="../commun/images/uploads/line-title.png" alt="">
                        <p></p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="left-it ct-form">
                        <form class="ct-left">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <h2>Je voudrais :</h2>
                                    <select>
                                        <option value="DevenirParrain">Devenir Parrain</option>
                                        <option value="DevenirMemmbre">Devenir Memmbre</option>
                                        <option value="DevenirPartenaire">Devenir Partenaire</option>
                                        <option value="DevenirClient">Devenir Client</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <h2>Nom & Prénoms</h2>
                                    <input class="name" type="text" placeholder="Nom et prénoms">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <h2>Numéro De Téléphone(*)</h2>
                                    <input class="phone" type="text" placeholder="Votre numéro de téléphone">
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <h2>Email</h2>
                                    <input class="phone" type="email" placeholder="Votre email">
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <h2>Nous vous répondrons aussitôt que possible!</h2>
                                    <div>
                                        <input class="submit" type="submit" name="submit" value="Envoyer">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <script>
        $(window).scrollPress();
    </script>
@endsection
