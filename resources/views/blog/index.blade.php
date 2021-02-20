@extends('welcome')

@section('content')
   <section style="margin-top: 50px" id="content">
      <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
            <!--left-->
                <aside class="left-sidebar">
                    <div class="widget">
                        <form>
                        <div class="input-append">
                            <input class="form-control" id="appendedInputButton" type="text" placeholder="Type here">
                            <button style="margin-top: 10px" class="btn btn-info" type="submit">Search</button>
                        </div>
                        </form>
                    </div>

                    <div class="widget">
                        <h3>Categories</h3>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-cente"><a href="#">Web design</a><span class="badge bg-primary rounded-pill" > 20</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-cente"><a href="#">Web design</a><span class="badge bg-primary rounded-pill" > 20</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-cente"><a href="#">Web design</a><span class="badge bg-primary rounded-pill" > 20</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-cente"><a href="#">Web design</a><span class="badge bg-primary rounded-pill" > 20</span></li>
                        </ul>
                    </div>

                    <div class="widget">
                        <h3>Recent posts</h3>
                        <ul class="list-group">
                            <li class="list-group-item" ><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li class="list-group-item" ><a href="#">Ancillae senserit scribentur ea vel</a></li>
                            <li class="list-group-item"><a href="#">Persius nostrum eleifend ad has</a></li>
                            <li class="list-group-item"><a href="#">Facilis mediocrem urbanitas ad sed</a></li>
                            <li class="list-group-item"><a href="#">Eripuit veritus docendi cum ut</a></li>
                        </ul>
                    </div>
                </aside>
            <!--end left-->
            </div>
            <div class="col-lg-8">
            <!--right-->
                <div class="">
                    <article class="single">
                        <div class="row">
                            <div class="">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h1>Example single post title here</h1>
                                    </div>
                                    <img style="width: 600px" src="{{asset('images/za.jpg')}}" alt="" />
                                </div>
                                <ul class="breadcrumb">
                                    <li href="#" class="breadcrumb-item">By Admin</li>
                                    <li href="#" class="breadcrumb-item">10 Jun 2013</li>
                                    <li href="#" class="breadcrumb-item">dans la categorie de test</li>
                                </ul>
                                <p>
                                    Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
                                    ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Dicam appetere ne qui, no has scripta appellantur. Mazim alienum appellantur eu cum, cu ullum officiis pro, pri at eius erat accusamus. Eos id
                                    hinc fierent indoctum, ad accusam consetetur voluptatibus sit. His at quod impedit. Eu zril quando perfecto mel, sed eu eros debet.
                                </p>
                                <p>
                                    Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Dicam appetere ne qui, no has scripta appellantur. Mazim alienum appellantur eu cum, cu ullum officiis pro, pri
                                    at eius erat accusamus.
                                </p>
                            </div>
                        </div>
                    </article>

                    <div class="comment-area">
                        <h2>4 Commentaires</h2>
                        <div class="row">
                            <div class="col-lg-2"><a href="#" class="thumbnail pull-left"><img style="width: 70px" src="{{asset('images/za.jpg')}}" alt="" /></a></div>
                            <div class="col-lg-10">
                                <div class="media-content">
                                    <h6><span>March 12, 2013</span> Karen medisson</h6>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <button class="btn btn-danger">Repondre</button>
                                </div>
                            </div>
                        </div>
                        <hr class="marginbot30">
                        <div class="row">
                            <div class="col-lg-2" ><a href="#" class="thumbnail pull-left"><img style="width: 70px" src="{{asset('images/za.jpg')}}" alt="" /></a></div> 
                            <div class="col-lg-10 marginbot30">
                                <div class="media-content">
                                    <h6><span>March 12, 2013</span> Smith sanderson</h6>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <button class="btn btn-danger">Repondre</button>
                                </div>
                                
                                <div class="row">
                                    <div  class="col-lg-2 col-xs-4" ><a href="#" class="thumbnail pull-left"><img style="width: 70px" src="{{asset('images/za.jpg')}}" alt="" /></a></div> 
                                    <div  class="col-lg-10 col-xs-7 marginleft40">
                                        <div class="media-content">
                                            <h6><span>March 12, 2013</span> Thomas guttenberg</h6>
                                            <p>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="marginbot30">
                        <div class="row">
                            <div class="col-lg-2"><a href="#" class="thumbnail pull-left"><img style="width: 70px" src="{{asset('images/za.jpg')}}" alt="" /></a></div>
                            <div class="col-lg-10">
                                <div class="media-content">
                                    <h6><span>March 12, 2013</span> Karen medisson</h6>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <button class="btn btn-danger">Repondre</button>
                                </div>
                            </div>
                        </div>

                        
                        <h2>Leave your comment</h2>

                        <form id="commentform" action="#" method="post" name="comment-form">
                            <div class="row">
                                <div class="span4 marginbot30">
                                    <input class="form-control" type="text" placeholder="* Enter your full name" />
                                </div>
                                <br>
                                <div class="span4 marginbot30">
                                    <input class="form-control" type="text" placeholder="* Enter your email address" />
                                </div>
                                <br>
                                <div class="span8 marginbot30">
                                    <p>
                                        <textarea rows="12" class="input-block-level form-control" placeholder="*Your comment here"></textarea>
                                    </p>
                                    <p class="marginbot30">
                                        <button class="btn btn-success" type="submit">Submit comment</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        <!--end right-->
            </div>
        
        </div>
      </div>
    </section>
@endsection