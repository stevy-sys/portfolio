@extends('welcome',['title' => 'Mes Formations'])

@section('content')
    <section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">{{__('education.question')}}</span>
							<h2 class="colorlib-heading animate-box">{{__('education.titre')}}</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">

									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									@foreach ($education as $item)
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="heading-{{$item->id}}">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$item->id}}" aria-expanded="false" aria-controls="collapse-{{$item->id}}">{{$item->title}}
													</a>
												</h4>
											</div>
											<div id="collapse-{{$item->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{$item->id}}">
												<div class="panel-body">
													<p>{{$item->content}}</p>	
												</div>
											</div>
										</div>
										<br><br>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection