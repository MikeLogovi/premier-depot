<?php
//namespace App\classes\application\forum;
require('Manager.php');
echo'<pre>';
var_dump($_SERVER);
echo'</pre>';

       Class ForumManager extends Manager{
             public function postMessage($idUser,$fmessage){
                  $bdd=$this->baseConnection();
                  $req=$bdd->prepare('INSERT INTO forum(idUser,message,datePostMessage) VALUES(:idUser,:fmessage,NOW())');
                  $req->execute(array(
                  'idUser'=>$idUser,
                  'fmessage'=>$fmessage
                  ));
                  return $req;
             }
             public function getMessage(){
                   $bdd=$this->baseConnection(); 
                   $req=$bdd->query("SELECT user.photoDeProfil,user.pseudo,user.nom,user.prenom,forum.message, DATE_FORMAT(forum.datePostMessage,'Le %d/%m/%y à %Hh%imin%ss') as datePostMessage FROM user,forum WHERE user.id=forum.idUser ORDER BY forum.id DESC");
                   return $req;
             }
             public function getNbMessage(){
                   $bdd=$this->baseConnection(); 
                   $req=$bdd->query("SELECT COUNT(message) as count FROM forum");
                   return $req;
             }

       }