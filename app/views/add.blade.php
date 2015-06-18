<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Item</title>
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
				  <a class="navbar-brand" href="/"><img src="assets/images/logo.jpg" height="90" width="110"  alt="logo"></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<h3>TERABYTE</h3>
						<li class=><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
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
    <div align="center">
        <br><br><br>
        <h1>Add Item</h1> 
            {{ Form::open(array('url' => 'foo/bar')) }}
                Item Name <br>
                {{ Form::text('itemName') }} <br>
                Item Price <br>
                {{ Form::text('itemPrice') }} <br>
                Category Id <br>
                {{ Form::text('itemCategoryId') }} <br> <br>
                {{ Form::submit('Submit') }}
            {{ Form::close() }}
        <br><br>
    </div> 
	
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <a target="_blank" href="" >Cozee Internship Team</a> (2015) All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
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