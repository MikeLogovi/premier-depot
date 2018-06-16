<?php
namespace App\view\traitement;
use App\Classes\inscription\Functions;
use App\classes\User\UserManager;
use App\classes\User\User;
use App\classes\site\Site;
use \PDO as PDO;
      $functions=new Functions();
       $userManager=new UserManager();
       $req=$userManager->read($pseudo);
       var_dump($req);
       if($req->rowCount()){
           $req=$req->fetch(PDO::FETCH_OBJ);
           var_dump($req);
           $myToken=sha1(md5($req->pseudo.$req->email.$req->motpass));
       	   if($token==$myToken){
              $user=new User($req->pseudo,$req->email,$req->motpass);
               //$userManager->update($user);
               $userManager->activateAccount($req->id);
               header('Location:http://localhost:82/projet_bluebeard/connexion');
       	   }
       	  
       }
        else{
              $site->set_flash('Désolé,ce compte n a pas été activé à cause de paramètres invalides','danger');
              require('src/view/formulaire/formulaire.view.php');
      }
  