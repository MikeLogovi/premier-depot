<?php
     require('Managerm.php');
     Class ChatManager extends Managerm{
            public function setOnline($idUser){
                 $bdd=$this->baseConnection();
                 $req=$bdd->prepare('UPDATE onlineuser SET onlineTimeUser=:onlineTime WHERE onlineIdUser=:idUser');
                 $req->execute(array(
                 'onlineTime'=>time(),
                 'idUser'=>$idUser
                 ));
                 return $req;
            }
            public function offLine(){
            	 $bdd=$this->baseConnection();
                 $req=$bdd->prepare('DELETE FROM onlineuser WHERE onlineTimeUser<:fixedTime');
                 $req->execute(array(
                 	'fixedTime'=>time()-5
                 ));
                 return $req;
            }
            public function getOnlineUsers($id){
            	$bdd=$this->baseConnection();
                $req=$bdd->prepare('SELECT user.pseudo,user.photoDeProfil FROM user, onlineuser WHERE onlineuser.onlineIdUser=user.id AND onlineuser.onlineIdUser!=:id');
                $req->execute(array(
                'id'=>$id)); 
                 return $req;
            }
            public function getConversation($idUser){
                $bdd=$this->baseConnection();
                $req=$bdd->prepare('SELECT * FROM conversation,user WHERE conversation.idFriend=user.id AND conversation.idUser=:idUser');
                $req->execute(array(
                'idUser'=>$idUser
                ));
                return $req;
            }
            
            public function getCurrentMessages($idUser,$idFriend){
                $bdd=$this->baseConnection();
                $req=$bdd->prepare('SELECT * FROM chatmessage,user WHERE chatmessage.idFriend=:idFriend AND chatmessage.idUser=:idUser AND chatmessage.idFriend=user.id');
                $req->execute(array(
                'idFriend'=>$idFriend,
                'idUser'=>$idUser
                ));
                return $req;
            }
            public function postCurrentMessage($idUser,$idFriend,$message){
                $bdd=$this->baseConnection();
                $req=$bdd->prepare('INSERT INTO chatmessage(idUser,idFriend,message,datePostMessage) VALUES(:idUser,:idFriend,:message,NOW())');
                $req->execute(array(
                'idUser'=>$idUser,
                'idFriend'=>$idFriend,
                 'message'=>$message
                ));
                return $req;
            } 
            public function updateConversation($idUser,$idFriend,$message){
                 $bdd=$this->baseConnection();
                $req=$bdd->prepare('UPDATE conversation  SET lastMessage=:message,datePost=NOW() WHERE idUser=:idUser AND idFriend=:idFriend');
                $req->execute(array(
                'idFriend'=>$idFriend,
                'idUser'=>$idUser,
                'message'=>$message
                ));
                return $req;
            }
            public function getFriendProperties($idFriend){
                $bdd=$this->baseConnection();
                $req=$bdd->prepare('SELECT * FROM user WHERE id=:id');
                $req->execute(array(
                'id'=>$idFriend
                ));
                return $req;
            }      
     }