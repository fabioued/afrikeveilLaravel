@extends('layouts.app')

@section('title')

    {{ trans('app.settingsTitle') }}
@endsection

@section('content')
    <section id="content">

        <!--start container-->
        <div class="container">

            <div id="mail-app" class="section">
                <div class="row">
                    <div class="col s11">
                        <nav class="red">
                            <div class="left col s12 m5 l1">
                                <div class="nav-wrapper">
                                    <i class="mdi-action-settings"></i>
                                </div>
                            </div>
                            <div class="col s12 m5 l11">
                                <div class="nav-wrapper">
                                    <h4 class="text-center center-align">{{ trans('app.settings') }}</h4>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col s12">
                        <div id="email-list" class="col s10 m4 l4 card-panel z-depth-3">
                            <ul class="collection">
                                <br>
                                <h6 class="text-center center-align">{{ trans('app.contactNumber') }}</h6>
                                <hr>
                                <li class="collection-item avatar email-unread">
                                    <span class="circle green lighten-1"><i class="mdi-communication-call text-darken-3"></i></span>
                                    <span class="email-title">Ouagadougou </span>
                                    <p class="truncate grey-text ultra-small">{{$setting->contact_numberFr}}</p>
                                </li>
                                <li class="collection-item avatar email-unread">
                                    <span class="circle green lighten-1"><i class="mdi-communication-call text-darken-3"></i></span>
                                    <span class="email-title">Ghana</span>
                                    <p class="truncate grey-text ultra-small">{{$setting->contact_numberEn}}</p>
                                </li>
                                <br>
                                <h6 class="text-center center-align">{{ trans('app.emails') }}</h6>
                                <hr>
                                <li class="collection-item avatar email-unread">
                                    <span class="circle green lighten-1"><i class="mdi-communication-email text-darken-3"></i></span>
                                    <span class="email-title">Ouagadougou</span>
                                    <p class="truncate grey-text ultra-small">{{$setting->contact_emailFr}}</p>
                                </li>
                                <li class="collection-item avatar email-unread">
                                    <span class="circle green lighten-1"><i class="mdi-communication-email text-darken-3"></i></span>
                                    <span class="email-title">Ghana</span>
                                    <p class="truncate grey-text ultra-small">{{$setting->contact_emailEn}}</p>
                                </li>
                                <br>
                                <h6 class="text-center center-align">{{ trans('app.address') }}</h6>
                                <hr>
                                <li class="collection-item avatar email-unread">
                                    <span class="circle cyan darken-1">A</span>
                                    <span class="email-title">Address</span>
                                    <p class=" grey-text ultra-small">{{$setting->addresse}}</p>
                                </li>
                                <br>
                                <h6 class="text-center center-align">{{ trans('app.socialNetwork') }}</h6>
                                <hr>
                                <li class="collection-item avatar email-unread">
                                    <a href="{{$setting->facebook}}" target="_blank">
                                        <span class="circle indigo darken-1">F</span>
                                        <span class="email-title">Facebook</span>
                                        <p class=" grey-text ultra-small">{{$setting->facebook}}</p>
                                    </a>
                                </li>
                                <li class="collection-item avatar email-unread">
                                    <a href="{{$setting->twitter}}" target="_blank">
                                        <span class="circle light-blue">T</span>
                                        <span class="email-title">Twitter</span>
                                        <p class="truncate grey-text ultra-small">{{$setting->twitter}}</p>
                                    </a>
                                </li>
                                <li class="collection-item avatar email-unread">
                                    <a href="{{$setting->youtube}}" target="_blank">
                                        <span class="circle red">Y</span>
                                        <span class="email-title">Youtube</span>
                                        <p class=" grey-text ultra-small">{{$setting->youtube}}</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="email-details" class="col s12 m7 l7 card-panel">
                            <h6 class="text-center center-align">{{ trans('app.aboutUs') }}</h6>
                            <hr>
                            <div class="card light-blue">
                                <div class="card-content white-text">
                                    <p>{{ trans('app.french') }}: {!! $setting->aboutFr !!}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="card light-blue">
                                <div class="card-content white-text">
                                    <p>{{ trans('app.english') }}: {!! $setting->aboutUs !!}</p>
                                </div>
                            </div>


                            <br>
                            <h6 class="text-center center-align">{{ trans('app.introductionVideo') }}</h6>
                            <hr>

                            <div class="card-panel">
                                <div class="video-container">
                                    <iframe width="640" height="360" src="{{$setting->introductionVideo}}" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>

                            <h6 class="text-center center-align">{{ trans('app.copyrights') }}</h6>
                            <hr>
                            <div class="card light-blue">
                                <div class="card-content white-text">
                                    <p>{{ trans('app.french') }}:{{$setting->copyrightFr}}</p><hr>
                                    <p>{{ trans('app.english') }}:{{$setting->copyrightEn}}</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Edit Settings Trigger -->
                <div class="fixed-action-btn animated infinite pulse gradient-45deg-light-blue-cyan" style="bottom: 50px; right: 19px;">
                    <a class="btn-floating btn-large red modal-trigger" href="#modal1">
                        <i class="mdi-editor-border-color"></i>
                    </a>
                </div>
                <!-- Edit Settings  Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <nav class="red">
                            <div class="nav-wrapper">
                                <div class=" col s12 m5 l12">
                                    <h4 class="text-center center-align">{{ trans('app.editSettings') }}</h4>
                                </div>

                            </div>
                        </nav>
                    </div>
                    <div class="model-email-content">
                        <div class="col s12 m12 l6">
                            <div class="card-panel">
                                <div class="row">
                                    <form action="{{route('settings.update')}}"  method="post" class="col s12 right-alert" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-communication-call prefix"></i>
                                                <input id="contact_numberFr" name="contact_numberFr" type="tel" class="validate" value="{{$setting->contact_numberFr}}">
                                                <label for="contact_numberFr">Contact Ouaga</label>
                                                @if ($errors->has('contact_numberFr'))
                                                    <div id="uname-error" class="error">{{ $errors->first('contact_numberFr') }}</div>
                                                @endif
                                            </div>
                                            <div class="input-field col s16">
                                                <i class="mdi-communication-call prefix"></i>
                                                <input id="contact_numberEn" name="contact_numberEn" type="tel" class="validate" value="{{$setting->contact_numberEn}}">
                                                <label for="contact_numberEn">Contact Ghana</label>
                                                @if ($errors->has('contact_numberEn'))
                                                    <div id="uname-error" class="error">{{ $errors->first('contact_numberEn') }}</div>
                                                @endif
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="mdi-communication-email prefix"></i>
                                                <input id="contact_emailFr" name="contact_emailFr" type="email" class="validate" value="{{$setting->contact_emailFr}}">
                                                <label for="contact_emailFr">Email Ouaga</label>
                                                @if ($errors->has('contact_emailFr'))
                                                    <div id="uname-error" class="error">{{ $errors->first('contact_emailFr') }}</div>
                                                @endif
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="mdi-communication-email prefix"></i>
                                                <input id="contact_emailEn" name="contact_emailEn" type="email" class="validate" value="{{$setting->contact_emailEn}}">
                                                <label for="contact_emailEn">Email Ghana</label>
                                                @if ($errors->has('contact_emailEn'))
                                                    <div id="uname-error" class="error">{{ $errors->first('contact_emailEn') }}</div>
                                                @endif
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="mdi-maps-pin-drop prefix"></i>
                                                <input id="addresse" name="addresse" type="text" class="validate" value="{{$setting->addresse}}">
                                                <label for="addresse">Address</label>
                                                @if ($errors->has('addresse'))
                                                    <div id="uname-error" class="error">{{ $errors->first('addresse') }}</div>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s7">
                                                    <i class="mdi-content-link prefix"></i>
                                                    <input name="facebook" id="facebook" type="url"  value="{{$setting->facebook}}">
                                                    <label for="facebook" class="">Facebook Url</label>
                                                    @if ($errors->has('facebook'))
                                                        <br><div id="uname-error" class="error">{{ $errors->first('facebook') }}</div>

                                                    @endif
                                                </div>
                                                <div class="input-field col s5">
                                                    <i class="mdi-content-link prefix"></i>
                                                    <input name="twitter" id="twitter" type="url"  value="{{$setting->twitter}}">
                                                    <label for="twitter" class="">Twitter Url</label>
                                                    @if ($errors->has('twitter'))
                                                        <br><div id="uname-error" class="error">{{ $errors->first('twitter') }}</div>

                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="mdi-content-link prefix"></i>
                                                    <input name="youtube" id="youtube" type="url"  value="{{$setting->youtube}}">
                                                    <label for="youtube" class="">Youtube Url</label>
                                                    @if ($errors->has('youtube'))
                                                        <br><div id="uname-error" class="error">{{ $errors->first('youtube') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="mdi-content-link prefix"></i>
                                                    <input name="introductionVideo" id="introductionVideo" type="url"  value="{{$setting->introductionVideo}}">
                                                    <label for="introductionVideo" class="">Introduction Youtube Url</label>
                                                    @if ($errors->has('introductionVideo'))
                                                        <br><div id="uname-error" class="error">{{ $errors->first('introductionVideo') }}</div>

                                                    @endif
                                                </div>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="mdi-action-account-circle prefix"></i>
                                                <input id="copyrightEn" name="copyrightEn" type="text" class="validate" value="{{$setting->copyrightEn}}">
                                                <label for="copyrightEn">Copyrights En</label>
                                                @if ($errors->has('copyrightEn'))
                                                    <div id="uname-error" class="error">{{ $errors->first('copyrightEn') }}</div>
                                                @endif
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="mdi-action-account-circle prefix"></i>
                                                <input id="copyrightFr" name="copyrightFr" type="text" class="validate" value="{{$setting->copyrightFr}}">
                                                <label for="copyrightFr">Copyrights Fr</label>
                                                @if ($errors->has('copyrightFr'))
                                                    <div id="uname-error" class="error">{{ $errors->first('copyrightFr') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-action-question-answer prefix"></i>
                                                <textarea id="aboutUs" name="aboutUs" class="materialize-textarea">{{$setting->aboutUs}}</textarea>
                                                @if ($errors->has('aboutUs'))
                                                    <div id="uname-error" class="error">{{ $errors->first('aboutUs') }}</div><br>
                                                @endif
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="mdi-action-question-answer prefix"></i>
                                                <textarea id="aboutFr" name="aboutFr" class="materialize-textarea">{{$setting->aboutFr}}</textarea>
                                                @if ($errors->has('aboutFr'))
                                                    <div id="uname-error" class="error">{{ $errors->first('aboutFr') }}</div><br>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s8">
                                                <button class="btn waves-effect waves-light right" type="submit" name="submit">{{ trans('app.update') }}
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end container-->

    </section>
@endsection