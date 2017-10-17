<div class="col-md-3 col-sm-12 col-xs-12">
	<div class="bg-sidebar sidebar">
		<div class="search">
			<form action="/results" method="get" >
			<input class="search-input" name="query" type="text" placeholder="search post here">
			<i class="fa fa-search" aria-hidden="true"></i>
			</form>
		</div>

		<div class="pp-posts sb-it">
			<div class="sb-title">
				<h2>Recent Posts</h2>
				<img src="{{asset('images/uploads/line-title2.png')}}" alt="">
			</div>
			@foreach($posts as $post)
			<div class="pp-post-it">
				<div class="row">
					<div class="col-md-4 col-sm-3 col-xs-12">
						<a href="#"><img src="{{asset($post->featuredImage)}}" alt="post1"></a>
					</div>
					<div class="col-md-8 col-sm-9 col-xs-12">
						<div class="pp-infor">
							<h5><a href="{{route('post.single',['slug' => $post->slug ])}}">{{$post->title}}</a></h5>
							<div class="date-pp">
								<span>{{$post->created_at->toformattedDateString()}}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
				<img class="dot-div" src="{{asset('images/uploads/dotline.png')}}" alt="">
			@endforeach

		</div>
		<div class="sb-it archive">
			<div class="sb-title">
				<h2>Archive</h2>
				<img src="{{asset('images/uploads/line-title2.png')}}" alt="">
			</div>
			<ul class="sb-content">
				<li class="sv"><a href="#"> May 2015 (4)</a></li>
				<li class="sv"><a href="#">January 2015 (5)</a></li>
				<li class="sv"><a href="#"> December 2014 (6)</a></li>
				<li class="sv"><a href="#"> October 2014 (8)</a></li>
			</ul>
		</div>
		<div class="sb-it">
			<div class="sb-title">
				<h2>Categories</h2>
				<img src="{{asset('images/uploads/line-title2.png')}}" alt="">
			</div>
			<div class="sb-content">
				@foreach($categories as $category)
					<p class="sv"><a href="#">{{$category->name}}</a></p>
				@endforeach
			</div>
		</div>
		<div class="searchbytag sb-it">
			<div class="sb-title">
				<h2>tags</h2>
				<img src="{{asset('images/uploads/line-title2.png')}}" alt="">
			</div>
			<ul class="tags">
				@foreach($tags as $tag)
					<li><a href="#">{{$tag->tag}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>