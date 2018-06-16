<?php
 namespace App\view\application\codage\traitement;
 use  App\classes\application\Functions;
 use App\classes\application\code\CodeManager;
 use App\classes\application\code\Code;
 use \PDO as PDO;
    $function=new Functions();
    extract($_POST);
      if($function->not_empty_by_post(['code','nomFichier','typeFichier'])){
          $codeManager=new CodeManager() ;
          $code =new Code(null,$_SESSION['user']['id'],$function->xssControl($nomFichier),$function->xssControl($typeFichier),$function->xssControl($code));
          if($codeManager->createCode($code)){
              $req=$codeManager->readLastCode();
              $req=$req->fetch(PDO::FETCH_OBJ);
              
              $_SESSION['code']=$req->code;
              //var_dump($_SESSION['code']));
              header('Location:code_source_view');
          }
          else{
          	$site->set_flash("Erreur lor de l'enregistrement du code source . Veuillez reéssayer");
          	header('Location:code_source');
          }
      }