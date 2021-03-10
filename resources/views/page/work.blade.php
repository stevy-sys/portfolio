@extends('welcome',['title' => 'Mon Portfolio'])

@section('content')
    <section class="colorlib-work" data-section="work">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<span class="heading-meta">{{__('work.question')}}</span>
					<h2 class="colorlib-heading animate-box">{{__('work.titre')}}</h2>
				</div>
			</div>
			<!--<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
				<div class="col-md-12">
					<p class="work-menu"><span><a href="#" class="active">Graphic Design</a></span> <span><a href="#">Web Design</a></span> <span><a href="#">Software</a></span> <span><a href="#">Apps</a></span></p>
				</div>
			</div>-->
			<div class="row">

				@foreach ($work as $item)
				<div class="col-md-6 animate-box" data-animate-effect="{{$item->animate}}">
					<div class="project" style="background-image: url({{$item->img}});">
						<div class="desc">
							<div class="con">
								<h3><a href="{{$item->url}}">{{$item->title}}</a></h3>
								<span>{{$item->type}}</span>
								<p class="icon">
									<span><a href="#"><i class="icon-share3"></i></a></span>
									<span><a href="#"><i class="icon-eye"></i> 100</a></span>
									<span><a href="#"><i class="icon-heart"></i> 49</a></span>
								</p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-md-12 animate-box">
					<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
				</div>
			</div>
		</div>
	</section>
@endsection