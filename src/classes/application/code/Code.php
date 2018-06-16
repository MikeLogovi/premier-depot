<?php
namespace App\classes\application\code;
          
          Class Code{
          	     private $id;
          	     private $idUser;
          	     private $nom;
          	     private $type;
          	     private $code;

          	     public function __construct($id=null,$idUser=null,$nom=null,$type=null,$code=null){
                     if($id!=null){
                           $this->setId($id);
                     }
                      if($idUser!=null){
                     	   $this->setIdUser($idUser);
                     }
                      if($nom!=null){
                     	   $this->setNom($nom);
                     }
                      if($type!=null){
                     	   $this->setType($type);
                     }
                      if($code!=null){
                     	   $this->setCode($code);
                     }
          	     }
                 public function getId(){
                 	return $this->id;
                 }
                 public function setId($id){
                 	$this->id=$id;
                 }
                 public function getIdUser(){
                 	return $this->idUser;
                 }
                 public function setIdUser($idUser){
                 	$this->idUser=$idUser;
                 }
                 public function getNom(){
                 	return $this->nom;
                 }
                 public function setNom($nom){
                 	$this->nom=$nom;
                 }
                  public function getType(){
                 	return $this->type;
                 }
                 public function setType($type){
                 	$this->type=$type;
                 }
                  public function getCode(){
                 	return $this->code;
                 }
                 public function setCode($code){
                 	$this->code=$code;
                 }
          }