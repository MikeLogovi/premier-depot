<?php
namespace App\view\application\forum\traitement;
use App\classes\application\Functions;
use App\classes\application\forum\ForumManager;
use \PDO as PDO;
/*require('Functions.php');
require('Site.php');
require('ForumManager.php');*/
$function=new Functions();

     extract($_POST);
     if($function->not_empty_by_post(['fmessage'])){
     	$forumManager=new ForumManager();
     	if($forumManager->postMessage($_SESSION['user']['id'],$function->xssControl($fmessage))){
          header('Location:forum');
               
             /*  $req=$forumManager->getMessage();
               $nbMessage=$forumManager->getNbMessage()->fetch(PDO::FETCH_OBJ);
               ob_start();
               require('forum.view.php');
               $content=ob_get_clean();
               echo $content;*/
     	}
     	else{
     		$site->set_flash("Une erreur est survenue lors de la publication du message.Veuillez reessayer svp","danger");
     	}
     }
     else{
          $site->set_flash("Aucun message","danger");
          header('Location:forum');
          /*echo'problem';
          echo $_POST['fmessage'];*/
    }