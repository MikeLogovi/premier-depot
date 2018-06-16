<?php
namespace App\classes\database;
use \PDO as PDO;
       Class Manager{
       	protected function baseConnection(){
       		$bdd=new PDO('mysql:host=localhost;dbname=bluebeard2;charset=utf8','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
       		return $bdd;
       	}
     }