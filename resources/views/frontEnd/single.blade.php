@extends('layouts.frontEnd.app')

@section('title')
	{{$post->title}} | Afrik Eveil Foundation
@endsection

@section('content')
	<div class="hero">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>{{$post->title}}</h1>
					<img src="{{asset('images/uploads/hero-line.png')}}" alt="">
					<ul class="breadcumb">
						<li><a href="/">HOME</a></li>
						<li><span>/</span> OUR NEWS</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="bloglistpost-v1 blogv3 blog servicesingle blogsingle">
		<div class="container">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="blogpost-v1">
					<div class="blog-it slider blogsingle-ct">
						<div class="post-thumbnail">
							<div id="owl-thumbnail">
								<div class="item">
									<img class="post-img" src="{{asset($post->featuredImage)}}" alt="Afrik Eveil">
								</div>
							</div>
						</div>
						<div class="blog-it-left">
							<div class="row">
								<div class="col-md-2 col-sm-12 col-xs-12">
									<div class="date">
										<h1>{{$post->created_at->format('D')}}</h1>
										<img src="{{asset('images/uploads/white-line.png')}}" alt="">
										<p>{{$post->created_at->toFormattedDateString()}}</p>
									</div>
								</div>
								<div class="col-md-10 col-sm-12 col-xs-12">
									<div class="inner-ct">
										<h2><a href="#">{{$post->title}}</a></h2>
										<div class="date-inner">
											<span><i class="ion-eye-person"></i><em>By</em> {{$post->user->name}} | Category: {{$post->category->name}} | Tags: @foreach($post->tags as $tag) {{$tag->tag}} @endforeach</span>
											<span>|</span>
											<span><i class="fa fa-calendar" aria-hidden="true"></i><em>{{$post->created_at->diffForHumans()}}</em></span>
										</div>
										<img class="divide2" src="{{asset('images/uploads/blogline.png')}}" alt="">
										<p style="text-align: justify;">{!! $post->content !!}</p>
									</div>
									<!-- tags -->
									<div class="share">
										<div class="row">
											<div class="col-md-9">

												<div class="social-icon">
													<p style="margin-right: 20px; color:black; font-weight:bold">Share </p>
													<div class="addthis_inline_share_toolbox"></div>
													<a class="w-inline-block social-share-btn fb" 	 alt="Share on Facebook" 	href="https://www.facebook.com/sharer/sharer.php?u=&t=" 						   title="Afrik Eveil" 			onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><i class="ion-social-facebook"></i></a>
													<a class="w-inline-block social-share-btn tw" 	 alt="Share on Twitter" 	href="https://twitter.com/intent/tweet?"                 						   title="Afrik Eveil" 			onclick="window.open('https://twitter.com/intent/tweet?text=' + ':%20 ' + encodeURIComponent(document.URL)); return false;" data-hashtags="AfrikEveil"><i class="ion-social-twitter"></i></a>
													<a class="w-inline-block social-share-btn gplus" alt="Share on Google Plus" href="https://plus.google.com/share?url=" 				 						   title="Share on Google+" 	onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><i class="ion-social-googleplus"></i></a>
													<a class="w-inline-block social-share-btn lnk" 	 alt="Share on LinkedIn" 	href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" title="Share on LinkedIn" 	onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title)); return false;"><i class="ion-social-linkedin"></i></a>
													<a class="w-inline-block social-share-btn email" alt="Share via Mail" 		href="mailto:?subject=&body=:%20"  												   title="Afrik Eveil" 			onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-envelope-o"></i></a>
												</div>
											</div>
										</div>
										<img class="div-line" src="{{asset('images/uploads/div-line.png')}}" alt="divide">
										<div class="icon">
											<div class="panigation2">
												<div class="row">
													@if($previous)
														<div class="col-md-6  col-sm-6 col-xs-12 left">
															<div class="infor">
																<h2><a href="#">{{substr($previous->title,0,10)}}</a></h2>
																<div class="icon">
																	<a href="{{route('post.single', ['slug' => $previous->slug])}}"><i class="ion-android-arrow-dropleft-circle"></i>Previous</a>
																</div>
															</div>
														</div>
													@endif
													@if($next)

														<div class="col-md-6 col-sm-6 col-xs-12 right">
															<div class="infor">
																<h2><a href="#">{{substr($next->title,0,100)}}</a></h2>
																<div class="icon">
																	<a href="{{route('post.single', ['slug' => $next->slug])}}">Next<i class="ion-android-arrow-dropright-circle"></i></a>
																</div>
															</div>
														</div>
													@endif
												</div>
											</div>
										</div>
										<img class="div-line" src="{{asset('images/uploads/div-line.png')}}" alt="divide">
										<!-- comment -->
										<div class="comment">
											<div id="disqus_thread"></div>
											<div id="disqus_thread"></div>
											<script>
                                                (function() { // DON'T EDIT BELOW THIS LINE
                                                    var d = document, s = d.createElement('script');
                                                    s.src = 'https://http-188-226-149-64-afrikeveil.disqus.com/embed.js';
                                                    s.setAttribute('data-timestamp', +new Date());
                                                    (d.head || d.body).appendChild(s);
                                                })();
											</script>
											<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('layouts.frontEnd.aside')
		</div>
	</div>

	<script>
        $(window).scrollPress();
	</script>
	<script id="dsq-count-scr" src="//http-188-226-149-64-afrikeveil.disqus.com/count.js" async></script>
@endsection

@section('post_header')
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" 		   content="{{$post->title}}" />
	<meta property="og:site_name" 	   content="Afrik Eveil">
	<meta property="fb:app_id" 		   content="400025927061215">
	<meta property="og:title"          content="{{$post->title}}" />
	<meta property="og:description"    content="{{$post->title}}" />
	<meta property="og:image"          content="{{asset($post->featuredImage)}}" />
	<meta property="og:type" 	       content="article">
	<meta property="og:url"            content="https://laracasts.com/series/lets-build-a-forum-with-laravel">
	<meta name="twitter:card"          content="summary">
	<meta name="twitter:site"          content="@afrikeveil">
	<meta name="twitter:title"         content="{{$post->title}}">
	<meta name="twitter:description"   content="{{$post->title}}">
	<meta name="twitter:image"         content="{{asset($post->featuredImage)}}">
@endsection
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59e19f0f0a650b07"></script>
