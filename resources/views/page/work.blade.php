@extends('welcome',['title' => 'Mon Portfolio'])

@section('content')
    <section class="colorlib-work" data-section="work">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<span class="heading-meta text-center">{{__('work.question')}}</span>
					<h2 class="colorlib-heading animate-box text-center">{{__('work.titre')}}</h2>
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
					<div class="project" style="background-image: url({{ environement() ? asset('storage').'/'.$item->img : secure_asset('storage').'/'.$item->img}});">
						<div class="desc">
							<div class="con">
								<h3><a href="/work/{{$item->id}}">{{$item->titre}}</a></h3>
								<span>{{$item->type}}</span>
								<p class="icon">
									<span><a href="{{$item->url_github}}"><i class="icon-github"></i></a></span>
									<span><a href="/work/{{$item->id}}"><i class="icon-eye"></i></a></span>
									<span><a href="#"><i class="icon-heart"></i> 49</a></span>
								</p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection