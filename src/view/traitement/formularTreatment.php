<?php
namespace App\view\traitement;
use App\classes\inscription\Functions;
use App\classes\User\UserManager;
use App\classes\User\MailerManager\PHPMailer\MailerManager;
    $functions = new Functions();
    $functions->save_input_data();
    if($functions->not_empty_by_post(['pseudo','email','motpass','confpass','code'])){
                  if(!$functions->verifyCode($_POST['code'],$_SESSION['aleat_caract'])){
                        $_SESSION['errors']['errcode']="Code anti-robot invalide.Veuillez reessayer!";  
                  }
                  if(!$functions->verifyPassword($_POST['motpass'],$_POST['confpass'])){
                        $_SESSION['errors']['errpass']="Veuillez bien revérifier votre mot de passe!";
                  }
                  if(!$functions->verifyEmail($_POST['email'])){
                    $_SESSION['errors']['errmail']="Format d'email incorrect! Veuillez reésayer!";
                  }
                  if(!$functions->verifyPseudo($_POST['pseudo'])){
                    $_SESSION['errors']['errpseudo']="Pseudo trop court. Minimum 3 caractères";
                  }
                  $userManager=new UserManager();
                  $exist=$userManager->userNotAlreadyExist($_POST['pseudo'],$_POST['email']);
                  if(!empty($exist)){
                     if(!empty($exist['pseudo']) && $exist['pseudo']=='pseudo'){
                         $_SESSION['errors']['errpseudoalreadyexist']="Pseudo déjà utilisé! Essayez ".$functions->generatePseudo($_POST['pseudo']);    
                  }
                  if(!empty($exist['email']) &&$exist['email']=='email'){
                          $_SESSION['errors']['erremailalreadyexist']="Adresse e-mail déjà utilisé!";
                  }
                }
                 
                 

                if(isset($_SESSION['errors'])){
                       require('src\view\formulaire\formulaire.view.php');
                  }
                  else{
                      //Envoi du message
                    $pseudo=$_POST['pseudo'];
                    $email=$_POST['email'];
                    $motpass=sha1(md5($_POST['motpass']));
                    $functions->insertDb($functions->xssControl($pseudo),$functions->xssControl($email),$functions->xssControl($motpass));
                    $pseudo_hash=$functions->cleanPseudo($pseudo);
                    $token=sha1(md5($functions->xssControl($pseudo).$functions->xssControl($email).$functions->xssControl($motpass)));
                    $mail=new MailerManager();
                    ob_start();
                    require('src/view/email/email.view.php');
                    $content=ob_get_clean();
                    if($mail->sendMail($_POST['email'],$_POST['pseudo'],$content)){
                      $site->set_flash("Email d 'activation envoyé!Veuillez s'il vous plait consulter votre messagerie pour activer votre compte","success");
                      require('src/view/formulaire/formulaire.view.php');
                    }
                    else{
                      $site->set_flash("Email d 'activation non envoyé à cause d'une erreur!Veuillez s'il vous plait vous reinscrire","warning");
                      require('src/view/formulaire/formulaire.view.php');
                    }

                  }       
   }

    else{
      $_SESSION['errors']['errchamp']="Veuillez remplir tous les champs s'il vous plait";
    	header('location:inscription');
    }       
