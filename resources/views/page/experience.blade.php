@extends('welcome')

@section('content')
    <section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Experience</span>
							<h2 class="colorlib-heading animate-box">Work Experience</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">

							@foreach ($experience as $item)
								<article class="timeline-entry animate-box" data-animate-effect="{{$item->animate}}">
									<div class="timeline-entry-inner">

										<div class="timeline-icon {{$item->color}}">
											<i class="icon-pen2"></i>
										</div>

										<div class="timeline-label">
											<h2><a href="#">{{$item->title}}</a> <span>{{$item->date}}</span></h2>
											<p>{{$item->content}}</p>
										</div>
									</div>
								</article>
								<article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
									<div class="timeline-entry-inner">
										<div class="timeline-icon color-none">
										</div>
									</div>
								</article>
							@endforeach

					      </div>
					   </div>
				   </div>
				</div>
			</section>
@endsection