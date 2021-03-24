@extends('welcome',['title' => 'Mon Blog'])

@section('content')
    <section class="colorlib-blog" data-section="blog">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<span class="heading-meta text-center">Voir mon blog</span>
					<h2 class="colorlib-heading text-center">Blog recent</h2>
				</div>
			</div>
			<div class="row">
				@foreach ($blog as $item)
					<div class="col-lg-4 col-md-4 col-sm-6 animate-box" data-animate-effect="{{$item->animate}}">
						<div class="blog-entry">
							<a href="/blog/{{$item->id}}" class="blog-img"><img src="{{ environement() ? asset('storage').'/'.$item->img : secure_asset('storage').'/'.$item->img }}" class="img-responsive " alt="HTML5 Bootstrap Template by colorlib.com"></a>
							<div class="desc">
								<span><small>{{$item->date}}</small> | <small> {{$item->titre}} </small> | <small> <i class="icon-bubble3">{{count($item->commentaire)}}</i></small></span>
								<h3><a href="/blog/{{$item->id}}">{{$item->title}}</a></h3>
								<p>{{$item->content}}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-md-12 animate-box">
					<p>{{$blog->links()}}</p>
				</div>
			</div>
		</div>
	</section>
@endsection