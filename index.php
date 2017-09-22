<!DOCTYPE html>
<html>
<head>
	<title>The Dodge Club</title>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="Description" content="robots, authors, copyright, keywords, distribution, abstract">
  	<meta name="robots" content="index, follow">
  	<meta name="authors" lang="fr" content="Homerine Deschamps, Damien Crepel & Matthieu Debuire">
  	<meta name="copyright" content="Wild Code School">
  	<meta name="keywords" lang="Fr" content="Doge, Lille">
  	<meta name="distribution" content="global">
  	<meta name="abstract" content="Ce site présente le nouveau Doge Club">
<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
<!--menu-->
    <link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
	<?php include('header.php'); ?>
<!--caroussel-->
	<div class="row">
		<div class="hidden-xs col-md-12">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  		</ol>
	<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
				    	<img src="Photos/doge1.jpg" alt="...">
					</div>
					<div class="item">
						<img src="Photos/batimentExt.jpg" alt="...">
					</div>
					<div class="item">
			  			<img src="Photos/batint2.jpg" alt="...">
					</div>
				</div>
	<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<div class="container-fluid">
<!--title notebook-->
		<div class="col-xs-12 col-sm-12 color">
			<h2 class="title_index">Agenda & Actualité</h2>
		</div>
<!--notebook #####-->
	<div class="col-xs-12 col-sm-6">
		<div class="row">
			<div class="col-xs-12 col-sm-offset-1 col-sm-11 index-jumbotron">
				<img src="Photos/reunion.jpg" class="col-xs-5 img-jumbotron" alt="...">
				<h2 class="col-xs-7 h2-jumbotron">Reunion</h2>
				<p class="col-xs-7 p-jumbotron col-sm-8">Date: A venir<br>
	  			Reunion pour la gestion du Doge club.</p>
			</div>
			<div class="col-xs-12 col-sm-offset-1 col-sm-11 index-jumbotron">
				<img src="Photos/meetup.jpg" class="col-xs-5 img-jumbotron" alt="...">
				<h2 class="col-xs-7 h2-jumbotron">Meet-up</h2>
				<p class="col-xs-7 p-jumbotron col-sm-8">Date: A venir <br>
	  			Conférence de Mr Habib Oualidi.</p>
			</div>
			<div class="col-xs-12 col-sm-offset-1 col-sm-11 index-jumbotron">
				<img src="Photos/pingpong.jpg" class="col-xs-5 img-jumbotron" alt="...">
				<h2 class="col-xs-7 h2-jumbotron">Ping Pong</h2>
				<p class="col-xs-7 p-jumbotron col-sm-8">Date: A venir <br>
	  			Tournoi de ping pong.</p>
			</div>
	    </div>
	</div>
	<div class="iframe hidden-xs col-sm-6">
		<div class="row">
			<iframe class="col-xs-12 col-sm-offset-1 col-sm-11" src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/dogeclubeuratec/&width=700&height=630&colorscheme=light&show_faces=false&header=true&stream=true&show_border=true&appId=499696216710861" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:630px; width:700px;" allowTransparency="true"></iframe>
		</div>

	</div>
		
	</div>
	<footer>
		<?php include ("footer.php"); ?>
	</footer>
<!--Bootstrap-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/39d63e1489.js"></script>
<!--menu-->
	<script src="http://code.jquery.com/jquery-3.1.1.slim.min.js"></script> 
    <script>
        $(document).ready(function () {
        $('.mobile-nav-button').on('click', function() {
        $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
        $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  
        $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  
        $('.mobile-menu').toggleClass('mobile-menu--open');
        return false;
        }); 
        });
    </script>
<!--scroll-bar-->
	<script type="text/javascript">
		function checkScroll(){
    var startY = $('.navbar').height() * 1; //The point where the navbar changes in px

    if($(window).scrollTop() > startY){
        $('.navbar').addClass("scrolled");}
    else{
        $('.navbar').removeClass("scrolled");}
	}
    
	if($('.navbar').length > 0){
    	$(window).on("scroll load resize", function(){
        checkScroll(); });
	}
	</script>
</body>
</html>
<!--pseudo frame-->