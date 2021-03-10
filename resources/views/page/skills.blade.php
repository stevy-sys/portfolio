@extends('welcome',['title' => 'Mes competences'])

@section('content')
    <section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">{{__('skills.question')}}</span>
							<h2 class="colorlib-heading animate-box">{{__('skills.titre')}}</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<p>{{__('skills.attout')}} {{__('skills.algo')}}</p>
							<p>{{__('skills.veille')}} {{__('skills.techno')}}</p>
							<hr>
							<p>{{__('skills.skills')}}</p>
						</div>

						@foreach ($skills as $item)
							<div class="col-md-6 animate-box" data-animate-effect="{{$item->animate}}">
								<div class="progress-wrap">
									<h3>{{$item->techno}}</h3>
									<div class="progress">
										<div class="progress-bar color-{{$item->color}}" role="progressbar" aria-valuenow="{{$item->pourcentage}}"
										aria-valuemin="0" aria-valuemax="100" style="width:{{$item->pourcentage}}%">
										<span>{{$item->pourcentage}}%</span>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>
@endsection