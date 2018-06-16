<?php
namespace App\classes\filters;
         Class Filter{
         	public function isNotGuest(){
         		if(empty($_SESSION['user'])&&empty($_COOKIE['pseudo'])){
         			header('location:acceuil');
         		}
         		
         	}
         	public function isClient(){

         	}
         }