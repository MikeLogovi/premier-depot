<?php
namespace App\view\traitement;
use App\classes\inscription\Functions;
use App\classes\User\UserManager;
use \PDO as PDO;
        extract($_POST);
        $functions=new Functions();
        if($functions->not_empty_by_post(['connectid','connectpass'])){
             $userManager=new UserManager;
                if($userManager->verifyUser($functions->xssControl($connectid),$functions->xssControl(sha1(md5($connectpass))))){
                    $req=$userManager->read($connectid)->fetch(PDO::FETCH_OBJ);
                    if(!empty($_FILES['connectphoto']['name'])){
                            if($functions->good_files(['connectphoto'])){

                            		      $info=pathinfo($_FILES['connectphoto']['name']);
                            		      $extension=$info['extension'];
                            		      if(!in_array($extension,['jpeg','JPEG','jpg','JPG','png','PNG'])){
                            		                        	$site->set_flash('Format de fichier invalide!Essayez un fichier png ou jpg au niveau de profil','danger');
                            		                        	header('Location:connexion');
                            		      }
                            		       else{
                                              try{
                                		                $functions->uploadpicture($req->pseudo,$req->email,$req->motpass,$extension);
                                                 }catch(Exception $e){
                                                     die("Erreur ".$e->getmessage());
                                                  }
                            		       }

                            }
                            else{
                                   Appset_flash("Erreur dans l'upload de la photo.Veuillez reéssayer s'il vous plait","danger");
                              header('Location:messagerie');
                            }
                    }
                    if (isset($connectsouvenir)){
                                                  //var_dump($connectsouvenir);
                       setcookie('pseudo', $req->pseudo, time() + 365*24*3600*10, null, null, false, true);
                       setcookie('id', $req->id, time() + 365*24*3600*10, null, null, false, true);
                    }

                    $_SESSION['user']['id']=$req->id;
                    $_SESSION['user']['identity']=$connectid;
                    $_SESSION['user']['password']=$connectpass;
                    $_SESSION['user']['adressIp']=$_SERVER['REMOTE_ADDR'];
                    header('Location:messagerie');
                  }

                  else{
                      $site->set_flash("Combinaison Identifiant/Mot de passe incorrect!Veuillez reéssayer s'il vous plait");
                      require('src/view/connexion/connexion.view.php');
                  }
        }
        else{
        	echo "hummm";
        }
