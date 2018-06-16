<?php
namespace App\classes\inscription;
use App\classes\User\UserManager;
use App\classes\User\User;

    Class Functions{


            public function not_empty_by_post($fields=[]){
                if(count($fields)!=0){
                    foreach($fields as $field){
                        if(empty($_POST[$field])||trim($_POST[$field])==""){
                            return false;
                        }
                    }
                    return true;
                }
            }
            public function not_empty_by_get($fields=[]){
                if(count($fields)!=0){
                    foreach($fields as $field){
                        if(empty($_GET[$field])||trim($_GET[$field])==""){
                            return false;
                        }
                    }
                    return true;
                }
            }
            public function good_files($fields=[]){
                if(count($fields)!=0){
                    foreach($fields as $field){
                        if(empty($_FILES[$field])||$_FILES[$field]['error']!=0 ||$_FILES[$field]['size']>1000000){
                            return false;
                        }
                    }
                    return true;
                }
            }


           public function realy_isset($fields=[]){
                if(count($fields)!=0){
                    foreach($fields as $field){
                        if(isset($_POST[$field])){
                            return true;
                        }
                    }
                    return false;
                }
           }
           public function cleanPseudo($pseudo){
              return str_replace('','',str_replace('%','',str_replace('&','',$pseudo)));
           }
        	public function verifyCode($test,$code){
        		if($test==$code){
        			return true;
        		}
        	    return false;
        	}
        	public function verifyPassword($motpass,$confpass){
                 if($motpass==$confpass){
                 	return true;
                 }
                 return false;
        	}
        	public function verifyEmail($email){

        		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        			return false;
        		}
        		return true;
        	}
            public function verifyPseudo($pseudo){
                if(mb_strlen($pseudo)<3){
                    return false;
                }
                return true;
            }
            public function generatePseudo($pseudo){
                 $find=true;
                 $userManager=new UserManager();
                 While($find){
                    $pseudoGenerate=$pseudo.$this->generatePseudoId();
                     if(!$userManager->read($pseudoGenerate)->rowCount()){
                        $find=false;
                     }
                 }
                 return $pseudoGenerate;
            }
            private function generatePseudoId(){
                return strtoupper(substr(uniqid()*mt_rand(),0,5));
            }
            public function insertDb($pseudo,$email,$motpass){
                  $user=new User($pseudo,$email,$motpass);
                  $userManager=new UserManager();
                  $userManager->create($user);
            }
            public function uploadpicture($pseudo,$email,$motpass,$extension){
                   $token=sha1($pseudo.$email.$motpass);
                   $picture='src/public/users_pictures/'.$token.'.'.$extension;
                   move_uploaded_file($_FILES['connectphoto']['tmp_name'],$picture);
                   $userManager=new UserManager();
                   $user=new User($pseudo,$email,$motpass,null,null,$picture,null);
                   $userManager->update($user);
            }
            public function xssControl($value){
              return htmlspecialchars(trim($value));
            }
            public function save_input_data(){
               foreach($_POST as $key => $value){
                  if(!strpos($key, 'pass')){
                  $_SESSION['input'][$key]=$value;
                 }
               }
            }
            public function get_input($key){
              return !empty($_SESSION['input'][$key])? $_SESSION['input'][$key] : null;
            }
    }

