<?php
namespace App\view\formulaire;
use App\classes\inscription\Functions;
$function=new Functions(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$site::WEB_SITE_NAME.'-INSCRIPTION';?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
     <link rel="icon" type="image/png" sizes="32x32" href="src/view/formulaire/images/favicon-32x32.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/public/bootstrap/dist/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/view/formulaire/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/view/formulaire/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/view/formulaire/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/view/formulaire/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/view/formulaire/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/view/formulaire/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/view/formulaire/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="src/view/formulaire/css/util.css">
	<link rel="stylesheet" type="text/css" href="src/view/formulaire/css/main.css">
<!--===============================================================================================-->
    



</head>
<body>
    
	<div class="container-contact100">
		<div class="wrap-contact100">
			
			<form class="contact100-form validate-form" method='post' data-parsley-validate action='formularTreatment'>
				<?php 
						require('src/view/partials/flash.php');
					    $_SESSION['notification']=[];
			     ?>
			<div class="container">	
				<div class="row">
					<div class="col-xs-2 col-xs-offset-5">
				       <span class="glyphicon glyphicon-user" style="color:rgba(128,128,255,1);font-size:3.5em;"></span>
					</div>
				</div>
			</div>
			<span class="contact100-form-title " style="color:rgba(2,255,255,1);">
					Inscrivez vous maintenant!
			</span>
             <?php require('src/view/partials/errors_form.php');?>        
			<label class="label-input100" for="pseudo">Votre pseudo</label>
			<div class="wrap-input100 validate-input" data-validate="Entrez votre pseudo">
				<input  type="text" id="pseudo" class="input100" name="pseudo" placeholder="Pseudo"<?='value='.$function->get_input('pseudo');?> >
				<span class="focus-input100"></span>
			</div>
			<label class="label-input100" for="email">Votre adresse e-mail</label>
			<div class="wrap-input100 validate-input" data-validate = "Format d'email valide : ex@abc.xyz">
				<input id="email" class="input100" type="text" name="email"  placeholder="Exemple :  bluebeard@gmail.com" required <?='value='.$function->get_input('email');?>>
				<span class="focus-input100"></span>
			</div>
            
			<label class="label-input100" for="motpass">Mot de passe</label>
		   	 
		   	     <div class="wrap-input100 validate-input input-group" data-validate = "Mot de passe requis">
					<input type="password" class="input100 passing"  name="motpass" id="motpass"/> 
					<span class="focus-input100"></span>
					<span class="input-group-addon"><input type="checkbox" id="checkbox1"/></span>
				</div>
			
			<label class="label-input100" for="confpass">Confirmer le mot de passe</label>
		 
				<div class="wrap-input100 input-group validate-input" data-validate = "Confirmation de mot de passe requise">
					
					<input type="password" class="input100 passing" name="confpass" id="confpass"/>
					<span class="focus-input100"></span>
					<span class="input-group-addon"><input type="checkbox" id="checkbox2"/></span>
					
				</div>
				<div class="container">
					 <div class="row">
					 	<div class="col-xs-12" id="information">
					 	</div>
					 </div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xs-7 col-xs-offset-2">
							<br>
							  <h3 class="captcha"> Etes vous un robot?</p>
						</div>
				    </div>
				    <div class="row">
						<div class="col-xs-6 col-xs-offset-4">	
						    <br>					      
				            <img src="src/view/formulaire/verif_cod_gen.php" alt="code de l image"/>
                        </div>
                    </div>
                </div>
				<label class="label-input100" for="code">Entrer le code de l'image</label>
		 
				<div class="wrap-input100 input-group validate-input" data-validate = "Confirmation de mot de passe requise">
					
					<input type="text" class="input100" name="code" id="code"/>
					<span class="focus-input100"></span>
					
					
				</div>
		
				<div class="container-contact100-form-btn">
					
					<button type="submit" class="contact100-form-btn">
						Envoyez
					</button>
				</div>
	      </form>
          <a href="acceuil" class="contact100-more flex-col-c-m" style="background-image: url('src/view/formulaire/images/log2.jpg');">
	   	  </a>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="src/view/formulaire/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="src/view/formulaire/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="src/view/formulaire/vendor/bootstrap/js/popper.js"></script>
	<script src="src/view/formulaire/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="src/view/formulaire/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="src/view/formulaire/vendor/daterangepicker/moment.min.js"></script>
	<script src="src/view/formulaire/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="src/view/formulaire/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="src/lib/parsley/parsley.min.js"></script>s
	<script src="src/view/formulaire/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
