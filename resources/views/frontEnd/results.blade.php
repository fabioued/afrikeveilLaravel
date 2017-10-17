@extends('layouts.frontEnd.app')

@section('title')
	{{$title}} | Afrik Eveil Foundation
@endsection

@section('content')
	<div class="hero">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>{{$title}}</h1>
					<img src="{{asset('images/uploads/hero-line.png')}}" alt="">
					<ul class="breadcumb">
						<li><a href="/">HOME</a></li>
						<li><span>/</span>{{$title}}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="bloglistpost-v1 blogv3 blog servicesingle blogsingle">
		<div class="container">
			<div class="col-md-9 col-sm-12 col-xs-12">
				@if($posts_query->count() >0)
					@foreach($posts_query as $post)
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
											<h2><a href="{{route('post.single', ['slug' => $post->slug])}}">{{$post->title}}</a></h2>
											<div class="date-inner">
												<span><i class="ion-eye-person"></i><em>By</em> kdnjknkjd | Category: {{$post->category->name}} | Tags: @foreach($post->tags as $tag) {{$tag->tag}} @endforeach</span>
												<span>|</span>
												<span><i class="fa fa-calendar" aria-hidden="true"></i><em>{{$post->created_at->diffForHumans()}}</em></span>
											</div>
											<img class="divide2" src="{{asset('images/uploads/blogline.png')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				@else
					<blockquote>No result found</blockquote>
				@endif
			</div>
			@include('layouts.frontEnd.aside')
		</div>
	</div>
	<script>
        $(window).scrollPress();
	</script>
	<script id="dsq-count-scr" src="//http-188-226-149-64-afrikeveil.disqus.com/count.js" async></script>
@endsection
