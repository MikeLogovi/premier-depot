<?php
namespace App\classes\User;
use App\classes\database\Manager;
use App\classes\User\User;
use \PDO as PDO;
         Class OnlineUserManager extends Manager{
         	public function createOnlineUser(User $user){
                   $bdd=$this->baseConnection();
                   $req1=$bdd->prepare('SELECT onlineIp FROM onlineuser WHERE onlineIdUser=:onlineIdUser');
                   $req1->execute(array(
                    'onlineIdUser'=>$user->getId()
                  ));
                   if($req1->rowCount()==0){
                     $req=$bdd->prepare('INSERT INTO onlineuser(onlineIp,onlineIdUser,onlineTimeUser) VALUES(:onlineIp,:onlineIdUser,:onlineTimeUser)');
                   $req->execute(array(
                   'onlineIp'=>$user->getIpAdress(),
                   'onlineIdUser'=>$user->getId(),
                   'onlineTimeUser'=>time()
                   ));
                   return $req;
                   }
                   else{
                     return;
                   }
          }
                  
         	public function updateStatus(User $user){
         		   $bdd=$this->baseConnection();
                   $req=$bdd->prepare('UPDATE onlineuser SET onlineStatus=:onlineStatus');
                   $req->execute(array(
                   'onlineStatus'=>$user->getOnlineStatus()
                   ));
                   return $req;
         	}
         	public function getOnlineUsers($id){
         		 $bdd=$this->baseConnection();
                 $req=$bdd->prepare('SELECT * FROM user,onlineuser WHERE (user.id=onlineuser.onlineIdUser AND onlineuser.onlineIdUser!=:id)');
                 $req->execute(array(
                  'id'=>$id));
                 return $req;
         	}
         	public function deleteNotOnlineUser(){
                   $bdd=$this->baseConnection();
                   $req=$bdd->prepare('DELETE FROM onlineuser WHERE onlineTimeUser<:timeout');
                   $req->execute(array(
                   'timeout'=>time()-5
                   ));
                   return $req ;
         	}
         }