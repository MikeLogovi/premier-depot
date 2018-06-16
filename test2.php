<?php
function good_files($fields=[]){
                if(count($fields)!=0){
                    foreach($fields as $field){
                        if(empty($_FILES[$field])||$_FILES[$field]['error']!=0 ||$_FILES[$field]['size']>1000000){
                            return false;
                        }
                    }
                    return true;
                }
            }
            function good_files1($fields=[]){
                if(count($fields)!=0){
                    foreach($fields as $field){
                        if(empty($_FILES[$field])){
                            return "empty";
                        }
                        if($_FILES[$field]['error']!=0){
                        	return "error";
                        } 
                        if($_FILES[$field]['size']>1000000){
                        	return "Too big";
                        }
                    }
                    return "ok c est bon";
                }
            }
            echo good_files1(['connectphoto']);
  /*          
 if(isset($_FILES['connectphoto'])){
		                   if(good_files(['connectphoto'])){
		                   	     echo" Pas mal";
		                   	     ''
		                        $info=path($_FILES['connectphoto']['name']);
		                        $extension=$info['extension'];
		                        if(!in_array($extension,['jpeg','JPEG','jpg','JPG','png','PNG'])){
		                        	$site->set_flash('Format de fichier invalide!Essayer png ou jpg','danger');
		                        	header('Location:connexion');
		                        }
		                        else{
		                        	$functions->uploadpicture($req->pseudo,$req->email,$req->motpass,$extension);
		                        }  	
			                     
		                   }
		                   else{
		                      echo "Erreur";
		                   }
		        }
*/
		        ?>