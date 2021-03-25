@extends('welcome',['title' => 'Accueil'])

@section('content')
    <section id="colorlib-hero" class="js-fullheight" data-section="home">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                <div class="slider-text-inner js-fullheight">
                                    <div class="desc">
                                        <h1>{{__('home.bonjour')}} <br>{{__('home.moi')}}</h1>
                                        <h2>{{__('home.portfolio')}}</h2>
                                        <p><a href="#" class="btn btn-primary btn-learn">{{__('home.telecharger')}}<i class="icon-download4"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(images/img_bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1>{{__('home.je_suis')}} <br>{{__('home.metier')}}</h1>
                                            <p><a href="/work" class="btn btn-primary btn-learn">{{__('home.voir_portfolio')}} <i class="icon-briefcase3"></i></a></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
	</section>
@endsection