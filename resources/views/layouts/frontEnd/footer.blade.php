<footer class="ht-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="ft-contact">
                    <div class="ft-heading">
                        <h6>{{ trans('app.aboutUs') }}</h6>
                    </div>
                    <div class="ct-it">
                        <div  style="text-align:left; color: #888888;">
                            @if(app()->getLocale() == "EN")
                                {!! $settings->aboutUs  !!}
                            @else
                                {!! $settings->aboutFr  !!}
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="ft-infor">
                    <div class="ft-heading">
                        <h6>{{ trans('app.afrikeveil') }} {{ trans('app.sitemap') }}</h6>
                    </div>
                    <div class="infor-it">
                        <ul class="left">
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('home')}}">             {{ trans('app.home') }}</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('notreOrganisation')}}">{{ trans('app.notreOrganisation') }}</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('notreHistoire')}}">    {{ trans('app.notreHistoire') }}</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('notreEquipe')}}">      {{ trans('app.notreEquipe') }}</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('howWeWork')}}">        {{ trans('app.howWeWork') }}</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('areYouInterrested')}}">{{ trans('app.areYouInterrested') }}</a></li>
                        </ul>
                        <ul class="left">
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('ourNews')}}">           {{ trans('app.ourNews') }}</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('blog')}}">              {{ trans('app.blog') }}</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('contactUs')}}">         {{ trans('app.contactUs') }}</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('ressources')}}">        {{ trans('app.ressources') }}</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{route('discours')}}">          {{ trans('app.discours') }}</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="ft-contact">
                    <div class="ft-heading">
                        <h6>{{ trans('app.ourcontact') }}</h6>
                    </div>
                    <ul class="ct-it">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">{{$settings->addresse}}</a></li><br/>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                            @if(app()->getLocale() == "EN")
                            <a href="#">{{$settings->contact_emailEn}}</a>
                            @else
                                <a href="#"> {{$settings->contact_emailFr}}</a>
                            @endif
                        </li><br/>
                        <li><i class="ion-ios-telephone"></i><a href="#">{{$settings->contact_numberEn}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="ft-below">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="ft-below-left">
                    @if(app()->getLocale() == "EN")
                        <center><p>{{$settings->copyrightEn}} By <a class="readmore2" href="https://yanfoma.tech" target="_blank">Yanfoma</a>.</p></center>
                    @else
                        <center><p>{{$settings->copyrightFr}} By <a class="readmore2" href="https://yanfoma.tech" target="_blank">Yanfoma</a>.</p></center>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
