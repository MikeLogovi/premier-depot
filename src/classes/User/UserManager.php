<?php
namespace App\classes\User;
use App\classes\database\Manager;
use App\classes\User\User;
use \PDO as PDO;
    Class UserManager extends Manager{
        
    	public function create(User $user){
           $bdd=$this->baseConnection();
           $req=$bdd->prepare('INSERT INTO user(pseudo,email,motpass,dateCreationCompte) VALUES(:pseudo,:email,:motpass,NOW())');
           $req->execute(array(
              'pseudo'=>$user->getPseudo(),
              'email'=>$user->getEmail(),
              'motpass'=>$user->getMotPass()
           ));
    	}
    	public function read($user,$email=null){
           $bdd=$this->baseConnection();
           $req=$bdd->prepare('SELECT * FROM user WHERE pseudo=:user OR email=:user OR email=:email');
           $req->execute(array(
            'user'=>$user,
            'email'=>$email)
           );
           return $req;
    	}
    	public function update(User $user,$id=null){
          $tab_user=array('id'=>$user->getId(),'pseudo'=>$user->getPseudo(),'nom'=>$user->getNom(),'prenoms'=>$user->getPrenoms(),'email'=>$user->getEmail(),'motPass'=>$user->getMotPass(),'photoDeProfil'=>$user->getPhotoDeProfil(),'ipAdress'=>$user->getIpAdress(),'role'=>$user->getRole());
         // var_dump($tab_user);
          //var_dump(get_class_methods(get_class($user)));
         
          //die();
          foreach($tab_user as $attribute=>$value){
            $ucattr=ucfirst($attribute);
            $method1='get'.$ucattr;
            //var_dump($method1);
           try{
            if(method_exists(get_class($user), $method1)){
              //echo "Parfait";
              //die();
              if($user->$method1()!=null){
                 $method2='set'.$ucattr;
                 if(method_exists(get_class($user),$method2)){
                   $user->$method2($user->$method1());
                   $method3='update'.$ucattr;
                   if(method_exists($this, $method3)){
                    if($user->getPseudo()!=null)
                      {
                         $req=$this->read($user->getPseudo())->fetch(PDO::FETCH_OBJ);
                         $this->$method3($user->$method1(),$req->id);
                      }
                      else{
                         $this->$method3($user->$attribute,$id);
                      }
                    
                   }
                 }
              }
            }
            else{
              echo "ImParfait";
              die();
            }
          }catch(Exception $e){
                die("Erreur ".$e->getMessage());
          }
        }
    	}
      private function updatePseudo($pseudo,$id){
        $bdd=$this->baseConnection();
        $req=$bdd->prepare('UPDATE user SET pseudo=:pseudo WHERE id=:id');
        $req->execute(array(
             'pseudo'=>$pseudo,
             'id'=>$id
        ));
      }
      private function updateEmail($email,$id){
        $bdd=$this->baseConnection();
        $req=$bdd->prepare('UPDATE user SET email=:email WHERE id=:id');
        $req->execute(array(
             'email'=>$email,
             'id'=>$id
        ));
      }
      private function updateMotPass($motpass,$id){
        $bdd=$this->baseConnection();
        $req=$bdd->prepare('UPDATE user SET motpass=:motpass WHERE id=:id');
        $req->execute(array(
             'motpass'=>$motpass,
             'id'=>$id
        ));
      }
       private function updateNom($nom,$id){
        $bdd=$this->baseConnection();
        $req=$bdd->prepare('UPDATE user SET nom=:nom WHERE id=:id');
        $req->execute(array(
             'nom'=>$nom,
             'id'=>$id
        ));
      }
      private function updatePrenoms($prenom,$id){
        $bdd=$this->baseConnection();
        $req=$bdd->prepare('UPDATE user SET prenom=:prenom WHERE id=:id');
        $req->execute(array(
             'prenom'=>$prenom,
             'id'=>$id
        ));
      }
      private function updatePhotoDeProfil($photoDeProfil,$id){
        $bdd=$this->baseConnection();
        $req=$bdd->prepare('UPDATE user SET photoDeProfil=:photoDeProfil WHERE id=:id');
        $req->execute(array(
             'photoDeProfil'=>$photoDeProfil,
             'id'=>$id
        ));
      }
      private function updateRole($role,$id){
        $bdd=$this->baseConnection();
        $req=$bdd->prepare('UPDATE user SET role=:role WHERE id=:id');
        $req->execute(array(
             'role'=>$role,
             'id'=>$id
        ));
      }
      private function updateIpAdress($ipAdress,$id){
        $bdd=$this->baseConnection();
        $req=$bdd->prepare('UPDATE user SET ipAdress=:ipAdress WHERE id=:id');
        $req->execute(array(
             'ipAdress'=>$ipAdress,
             'id'=>$id
        ));
      }
    	public function delete($user){

    	}
    	public function getList(){


    	}
    	public function userNotAlreadyExist($pseudo,$email){
          $exist=[];
          $bdd=$this->baseConnection();
          $req1=$bdd->prepare('SELECT pseudo from user WHERE pseudo=:pseudo');
          $req1->execute(array(
            'pseudo'=>$pseudo
          ));
          if($req1->rowCount()!=0){
            $exist['pseudo']='pseudo';
          }
          $req2=$bdd->prepare('SELECT email from user WHERE email=:email');
          $req2->execute(array('email'=>$email
          ));
          if($req2->rowCount()!=0){
            $exist['email']='email';
          }
          $req1->closeCursor();
          $req2->closeCursor();
          return $exist;
    	}
      public function verifyUser($identity,$password){
          $bdd=$this->baseConnection();
          $req=$bdd->prepare('SELECT id FROM user WHERE (pseudo=:identity OR email=:identity) AND motpass=:password');
          $req->execute(array(
              'identity'=>$identity,
              'password'=>$password
          ));
          return $req->rowCount();
      }
      public function activateAccount($id,$activation='true'){
         $bdd=$this->baseConnection();
         $req=$bdd->prepare('UPDATE user SET activation=:activation WHERE id=:id');
         $req->execute(array(
             'activation'=>$activation,
             'id'=>$id
         ));
      }
    }