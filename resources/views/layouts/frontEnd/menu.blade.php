<div class="headertopv2">
	<!-- top saerch here  -->
	<div class="row">
		<div class="topsearch topsearch-v2">
			<form action="GET">
				<input type="text" class="search-top" placeholder="What are you looking for ?">
			</form>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hdtop-ct">
					<div class="hd-socail">
						<a href="https://www.facebook.com/afrikeveil.org/" target="_blank"><i class="ion-social-facebook"></i></a>
						<a href="https://twitter.com/A_eveil"              target="_blank"><i class="ion-social-twitter"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- BEGIN | Header -->
<header class="ht-header ht-headerv1">
	<div class="container">
		<div class="row">
			<nav id="mainNav" class="navbar navbar-default navbar-custom">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="col-md-2 col-sm-2 col-xs-12">
						<div class="logo">
							<a class="hd-logo" href="{{route('home')}}"><img  class="logo" src="{{asset('images/logo2.png')}}" alt="Afrik Eveil Logo"></a>
						</div>
					</div>
					<div class="navbar-header">
						<div  class="menu-btn" id="mobile-btn">
							<span class="sr-only">Toggle navigation</span>
							<div id="nav-icon1">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="col-md-10 col-sm-10 col-xs-12">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav hd-menu">
								<li class="hidden">
									<a href="#page-top"></a>
								</li>
								<li class="dropdown first">
									<a href="{{route('home')}}" class="btn btn-default dropdown-toggle lv1 ">{{ trans('app.home') }}</a>
								</li>
								<li class="dropdown first">
									<a href="#" class="btn btn-default dropdown-toggle lv1">{{ trans('app.quiSommesNous') }}</a>
									<ul class="dropdown-menu level1">
										<li><a href="{{route('notreOrganisation')}}">	{{ trans('app.notreOrganisation') }}</a></li>
										<li><a href="{{route('notreHistoire')}}">		{{ trans('app.notreHistoire') }}</a></li>
										<li><a href="{{route('notreEquipe')}}">			{{ trans('app.notreEquipe') }}</a></li>
									</ul>
								</li>
								<li class="dropdown first">
									<a href="{{route('howWeWork')}}" class="btn btn-default dropdown-toggle lv1" >
										{{ trans('app.howWeWork') }}</a>
								</li>

								<li class="dropdown first">
									<a href="{{route('areYouInterrested')}}" class="btn btn-default dropdown-toggle lv1" >
										{{ trans('app.areYouInterrested') }}</a>
								</li>
								<li class="dropdown first">
									<a href="#" class="btn btn-default dropdown-toggle lv1">{{ trans('app.publications') }}</a>
									<ul class="dropdown-menu level1">
										<li><a href="{{route('ourNews')}}">{{ trans('app.ourNews') }}</a></li>
										<li><a href="{{route('blog')}}">	{{ trans('app.blog') }}</a></li>
									</ul>
								</li>
								<li class="dropdown first">
									<a href="{{route('contactUs')}}" class="btn btn-default dropdown-toggle lv1">{{ trans('app.contactUs') }}</a>
								</li>
								<li class="dropdown first"><a href="#" class="btn btn-default dropdown-toggle lv1">{{ app()->getLocale() }}</a>
									<ul class="dropdown-menu level1">
										@foreach(config('translatable.locales') as $lang => $language)
											@if ($lang != app()->getLocale())
												<li><a href="{{ route('lang.switch', $lang) }}">{{ $language }}</a></li>
											@endif
										@endforeach
									</ul>
								</li>
							</ul>
						</div>
					</div>
				<!-- /.navbar-collapse -->
		    </nav>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- menu for mobile -->
				<div class="mobile-menu">
					<nav id="menu">
						<ul class="main-menu clearfix">
							<li class="it1 mn-lv1"><a href="{{route('home')}}">{{ trans('app.home') }}</a></li></li>
							<li class="it2 mn-lv1"><a href="#">{{ trans('app.quiSommesNous') }}<i class="ion-ios-arrow-down"></i></a>
								<ul class="sub-menu sub2">
									<li><a href="{{route('notreOrganisation')}}">{{ trans('app.notreOrganisation') }}</a></li>
									<li><a href="{{route('notreHistoire')}}">	{{ trans('app.notreHistoire') }}</a></li>
									<li><a href="{{route('notreEquipe')}}">		{{ trans('app.notreEquipe') }}</a></li>
								</ul>
							</li>
							<li class="it3 mn-lv1">		<a href="{{route('howWeWork') }}">		 {{ trans('app.howWeWork') }}</a></li>
							<li class="it4 mn-lv1">		<a href="{{route('areYouInterrested')}}">{{ trans('app.areYouInterrested') }}</a></li>
							<li class="it3 mn-lv1">		<a href="#">							 {{ trans('app.publications') }}<i class="ion-ios-arrow-down"></i></a>
								<ul class="sub-menu sub3">
									<li><a href="{{route('ourNews')}}">{{ trans('app.ourNews') }}</a></li>
									<li><a href="{{route('blog')}}">{{ trans('app.blog') }}</a></li>
								</ul>
							</li>
							<li class="mn-lv1"><a href="{{route('contactUs')}}">{{ trans('app.contactUs') }}</a></li>
							<li class="it5 mn-lv1">
								<a href="#">
									{{ app()->getLocale() }}<i class="ion-ios-arrow-down"></i>
								</a>
								<ul class="sub-menu sub5">
									@foreach(config('translatable.locales') as $lang => $language)
										@if ($lang != app()->getLocale())
											<li>
												<a href="{{ route('lang.switch', $lang) }}">
													{{ $language }}
												</a>
											</li>
										@endif
									@endforeach
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- END | Header -->