<?php
namespace App\classes\User;
    Class user{
    	protected $id;
    	protected $pseudo;
    	protected $nom;
    	protected $prenoms;
    	protected $email;
    	protected $motPass;
        protected $photoDeProfil;
        protected $ipAdress;
        protected $onlineStatus;
    	protected $role='USER';
    	public function __construct($pseudo=null,$email=null,$motpass=null,$nom=null,$prenoms=null,$photoDeProfil=null,$ipAdress=null,$role=null){
            if($pseudo!=null){
                $this->setPseudo($pseudo);
            }
            if($email!=null){
                $this->setEmail($email);
            }
            if($motpass!=null){
                $this->setMotPass($motpass);
            }
            if($nom!=null){
                $this->setNom($nom);
            }
            if($prenoms!=null){
                $this->setPrenoms($prenoms);
            }
            if($photoDeProfil!=null){
                $this->setPhotoDeProfil($photoDeProfil);
            }
            if($ipAdress!=null){
                $this->setIpAdress($ipAdress);
            }
            if($role!=null){
                $this->setRole($role);
            }
            
        }
        public function setId($id){
             $this->id=$id;
        }
    	public function getId(){
            return $this->id;
    	}
    	public function getPseudo(){
    		return $this->pseudo;
    	}
        public function setPseudo($pseudo){
            $this->pseudo=$pseudo;
        }
    	public function getNom(){
    		return $this->nom;
    	}
    	public function setNom($nom){
    		$this->nom=$nom;
    	}
    	public function getPrenoms(){
    		return $this->prenoms;
    	}
    	public function setPrenoms($prenoms){
    		$this->prenoms=$prenoms;
    	}
    	public function getEmail(){
    		return $this->email;
    	}
    	public function setEmail($email){
    		$this->email=$email;
    	}
    	public function getMotPass(){
    		return $this->motPass;
    	}
    	public function setMotPass($motpass){
    		$this->motPass=$motpass;
    	}
    	public function getRole(){
    		return $this->role;
    	}
    	public function setRole($role){
    		$this->role=$role;
    	}
        public function getPhotoDeProfil(){
            return $this->photoDeProfil;
        }
        public function setPhotoDeProfil($photoDeProfil){
            $this->photoDeProfil=$photoDeProfil;
        }
         public function getIpAdress(){
            return $this->ipAdress;
        }
        public function setIpAdress($ipAdress){
            $this->ipAdress=$ipAdress;
        }
        public function getOnlineStatus(){
            return $this->ipAdress;
        }
        public function setOnlineStatus($onlineStatus){
            $this->onlineStatus=$onlineStatus;
        }

    }