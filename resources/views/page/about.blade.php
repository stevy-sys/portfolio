@extends('welcome',['title' => 'A propos de moi'])
@section('content')
    <section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta text-center">{{ (__('about.a-propos'))}}</span>
										<h2 class="colorlib-heading text-center">{{( __('about.qui')) }}</h2>
										<p><strong>{{(__('home.moi'))}}</strong>{{ __('about.date') }} {{ __('about.passion')}} </p>
										<p>{{ __('about.probleme') }} {{__('about.autodidacte') }}</p>
										<p>{{ __('about.qualite') }}</p>
									</div>
								</div>
							</div>
							<div class="row">
								@foreach ($about as $item)
									<div class="col-md-3 animate-box" data-animate-effect="{{$item->animate}}">
										<div class="services color-{{$item->color}}">
											<span class="{{$item->taille}}"><i class="icon-{{$item->icon}}"></i></span>
											<h3>{{$item->qualite}}</h3>
										</div>
									</div>
								@endforeach
							</div>
							<!--<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<div class="hire">
										<h2>I am happy to know you <br>that 300+ projects done sucessfully!</h2>
										<a href="#" class="btn-hire">Hire me</a>
									</div>
								</div>
							</div>-->
						</div>
					</div>
				</div>
			</section>
@endsection