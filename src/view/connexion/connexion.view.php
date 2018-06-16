
<!DOCTYPE HTML>
<html>
<head>
	<title><?=$site::WEB_SITE_NAME.'-CONNEXION'; ?></title>
	<!-- Custom Theme files -->
	<link rel="stylesheet" href="src/public/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="icon" type="image/png" sizes="32x32" href="src/view/connexion/images/favicon-32x32.png">
	<link href="src/view/connexion/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- Custom Theme files -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<!--Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--Google Fonts-->
	<script src="src/view/connexion/bootstrap/js/tests/vendor/jquery.min.js"></script>
   
	
</head>
<body>
<!--sign up form start here-->


<div class="app">
	<div class="top-bar">
			<div class="navg">
				<span class="menu"> <img src="src/view/connexion/images/menu.png" alt=""/></span>
				<ul class="res">
					<li><a class="active scroll" href="acceuil">Acceuil</a></li>
					<li><a class="scroll" href="inscription">Inscription</a></li>
					
				</ul>
				<script>
                                  $( "span.menu").click(function() {
                                                                    $(  "ul.res" ).slideToggle("slow", function() {
                                                                     // Animation complete.
                                                                     });
                                                                     });
		       </script>
			</div>
		<h2>Bienvenue!</h2>

	</div>
	
	<form method='POST' action='connexionTreatment' enctype=multipart/form-data >
		<?php  
	       require('src/view/partials/flash.php'); 
	    ?>
		<div class="cam-img">
			 <a href="#"><img src="src/view/connexion/images/cam.png" alt=""/></a> 
			 <input type="file" name='connectphoto' />
	    </div>
		<input type="text" name='connectid' value="Pseudo/Adresse e-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pseudo/Adresse e-mail';}"/>
		<input type="password" name='connectpass' value="Mot de passe"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mot de passe:';}"/><br/>
	<input type="checkbox" name='connectsouvenir' id='souvenir'/>	<label for='souvenir'>Se souvenir de moi</label>
	

		<input type="submit" value="Connexion" />
			<p><a href='#'>Avez-vous oublier votre mot de passe?<a></p>

	</form>
	<p>BlueBeard-Corporation</p>
</div>

<!--sign up form end here-->
</body>
</html>