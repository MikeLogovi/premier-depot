<?php
require('Managerf.php');

       Class ForumManager extends Managerf{
             public function postMessage($idUser,$fmessage){
                  $bdd=$this->baseConnection();
                  $req=$bdd->prepare('INSERT INTO forum(idUser,message,datePostMessage) VALUES(:idUser,:fmessage,NOW())');
                  $req->execute(array(
                  'idUser'=>$idUser,
                  'fmessage'=>htmlspecialchars($fmessage)
                  ));
                  return $req;
             }
             public function getMessage(){
                   $bdd=$this->baseConnection(); 
                   $req=$bdd->query("SELECT user.photoDeProfil,user.pseudo,user.nom,user.prenom,forum.message,forum.datePostMessage FROM user,forum WHERE user.id=forum.idUser ORDER BY forum.id DESC");
                   return $req;
             }
             public function getNbMessage(){
                   $bdd=$this->baseConnection(); 
                   $req=$bdd->query("SELECT COUNT(message) as count FROM forum");
                   return $req;
             }

       }