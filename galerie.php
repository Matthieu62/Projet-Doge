<!DOCTYPE html>
<html>
<head>
	<title>The Dodge Club</title>
<!--Meta-->
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
<!--menu-->
  	<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
  	<?php include ('header.php'); ?>
  	<div class="galerie container-fluid">
    	<h2 class="col-sm-offset-1 h2_galerie">Première rencontre Doge club</h2>
<!--line_1-->
	    <div class="row">
	      	<div class="img-container col-sm-offset-1 col-sm-2 col-xs-6">
	        	<img class="photocom" alt="Brand" src="photocom/ph1.jpg">
	      	</div>
	      	<div class="img-container col-sm-2 col-xs-6">
	        	<img class="photocom" alt="Brand" src="photocom/ph3.jpg">
	      	</div>
	      	<div class="img-container col-sm-2 col-xs-6">
	        	<img class="photocom" alt="Brand" src="photocom/ph4.jpg">
	      	</div>
	      	<div class="img-container col-sm-2 col-xs-6">
	        	<img class="photocom" alt="Brand" src="photocom/ph5.jpg">
	      	</div>
	      	<div class="img-container col-sm-2 col-xs-6">
	        	<img class="photocom" alt="Brand" src="photocom/ph6.jpg">
	      	</div>
	    </div>
<!--line_2-->
	    <div class="row">
	      	<div class="img-container col-sm-offset-1 col-sm-2 col-xs-6">
	        	<img class="photocom" alt="Brand" src="photocom/ph7.jpg">
	      	</div>
	    </div>
	    <h2 class="col-sm-offset-1 h2_galerie">Batiment</h2>
<!--line_3-->
	    <div class="row">
	      	<div class="img-container col-sm-offset-1 col-sm-2 col-xs-6">
	        	<img class="photocom" alt="Brand" src="Photos/batimentExt.jpg">
	      	</div>
	      	<div class="img-container col-sm-2 col-xs-6">
	        	<img class="photocom" alt="Brand" src="Photos/batint2.jpg">
	      	</div>
	      	<div class="img-container col-sm-2 col-xs-6">
	        	<img class="photocom" alt="Brand" src="Photos/doge1.jpg">
	      	</div>
	    </div>
	</div>
	<footer>
	    <?php include ('footer.php'); ?>
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