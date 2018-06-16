<?php
namespace App\classes\application\code;
use App\classes\application\code\Code;
use App\classes\database\Manager;
          Class CodeManager extends Manager{
          	   public function createCode(Code $code){
          	   	     $bdd=$this->baseConnection();
          	   	     $req=$bdd->prepare('INSERT INTO fichiercodesource(id_user,nom,type,code) VALUES(:idUser,:nomCode,:typeCode,:code)');
          	   	     $req->execute(array(
                         'idUser'=>$code->getIdUser(),
                         'nomCode'=>$code->getNom(),
                         'typeCode'=>$code->getType(),
                         'code'=>$code->getCode()
          	   	     ));
          	   	     return $req;
          	   }
          	   public function readLastCode(){
                          $bdd=$this->baseConnection();
                          $req=$bdd->query('SELECT code FROM fichiercodesource ORDER BY id DESC LIMIT 1');
                          return $req;
                  }
          }