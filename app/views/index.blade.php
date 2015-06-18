<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Terabyte</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#"><img src="assets/images/logo.jpg" height="90" width="110"  alt="logo"></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<h3>TERABYTE</h3>
						<li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">About</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">View By Category<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								@foreach($categories as $category)
                                    <li><a href="/{{ $category->id}}">{{ $category->name}}</a></li>
                                @endforeach
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<p class="text-danger" style="margin: -45px 180px;"></p>
					</ul>
				</div>
            </div>
        </div>
    </header><!--/header-->
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(assets/images/slider/pic1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">TERABYTE</h2>
                                    <p class="animation animated-item-2"> <font size="3">Terabyte is a sample inventory system project written in PHP using the <br> Laravel Framework developed by the Cozee Interns Karlos, Jolina and Genesis</font></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(assets/images/slider/poss1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">TERABYTE</h2>
                                
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->


    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Items</h3>
                    <p>Inventory</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    @foreach($items as $item)
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="assets/images/items/{{ $item->category_id }}.jpg" alt="">
                                                <h5>
                                                    {{ $item->name }}
                                                </h5>
                                                <h6> Php {{$item->price}} </h6>
                                            </div>
                                        </div>
                                    </div>                            
 
                                    @endforeach                           
                                </div><!--/.row-->
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

    <section id="services" class="emerald">
        <div class="container">
            <div class="row">
				<div class="col-md-1 col-sm-6"></div>
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-twitter icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Twitter</h3>
                            <p>Follow us at twitter @terabyte</p>
                        </div>
                    </div>
                </div>
				<div class="col-md-2 col-sm-6"></div>
				<!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-facebook icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Facebook</h3>
                            <p>Like our facebook page at facebook.com/terabyte</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
				<div class="col-md-1 col-sm-6"></div>
            </div>
        </div>
    </section><!--/#services-->
	
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <a target="_blank" href="" >Cozee Internship Team</a> (2015) All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>