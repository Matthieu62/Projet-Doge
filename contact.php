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
<!-- menu -->
  	<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
	<?php include('header.php') ?>
	<div class="container container-form">

   		<?php if($_POST){

       		$errors = array();

       		if(empty($_POST['user_name'])) {
           		$errors['user_name1'] = "Vous n'avez mentionné ni votre Nom ni votre Prénom.";
       		}
       		if(empty($_POST['user_mail'])) {
           		$errors['user_mail1'] = "Vous n'avez pas mentionné votre adresse mail.";
       		}
       		if(empty($_POST['subject'])) {
           		$errors['subject1'] = "Vous n'avez pas renseigné le sujet de votre requête.";
       		}
       		if (empty($_POST['message'])) {
           		$errors['message1'] = "Vous n'avez pas énoncé de requête.";
       		}
       		if (count($errors) == 0) {
           		header("location: index.php");
           		exit();
       		}
   		}?>
	  	<form method="post" id="monForm" target="" action="contact.php">
	  		<h2 class="h2-form">Contacter le Club</h2>
	        <div>
	            <label for="user_name">Nom, Prénom: </label>
	            <input type="text" id="user_name" name="user_name" value="<?php echo $_POST['user_name']; ?>">
	            <p> <?php if(isset($errors['user_name1'])) echo $errors['user_name1'];?> </p>
	        </div>
	        <div>
	            <label for="user_mail">E-Mail: </label>
	            <input type="email" id="user_mail" name="user_mail" value="<?php echo $_POST['user_mail']; ?>">
	            <p> <?php if(isset($errors['user_mail1'])) echo $errors['user_mail1'];?> </p>
	        </div>
	      	<div>
	            <label for="subject">sujet: </label>
	            <input type="text" id="subject" name="subject" value="<?php echo $_POST['subject']; ?>">
	            <p> <?php if(isset($errors['subject1'])) echo $errors['subject1'];?> </p>
	        </div>
			<div>
	            <label for="message">Message: </label>
	            <textarea type="text" id="message" name="message" value="<?php echo $_POST['message']; ?>"></textarea>
	            <p> <?php if(isset($errors['message1'])) echo $errors['message1'];?> </p>
	        </div>
	        <div class="button">
	            <button class="submit-button" type="submit">Envoyer votre message</button>
	        </div>
	  	</form>

	    <div class="modal fade bs-example-modal-sm" id="form_ok" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	      	<div class="modal-dialog modal-sm" role="document">
	        	<div class="modal-content">
	          		<div>
	            		<p>Message envoyé,<br>merci de votre visite</p>
	          		</div>
	          		<div>
	            		<a href="index.php"><input type="button" name="retour" value="Retour"></a>
	          		</div>
	        	</div>
	      	</div>
	    </div>

	</div>
<!--Bootstrap-->
	<script src="https://use.fontawesome.com/39d63e1489.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
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
    <footer>
        <?php include ('footer.php') ?>
    </footer>
</body>
</html>
