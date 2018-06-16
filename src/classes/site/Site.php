<?php
namespace App\classes\site;

      Class Site{
      	   const WEB_SITE_NAME='BLUEBEARD';
      	   const WEB_SITE_URL='http://localhost:82/projet_bluebeard';
      	   public function set_flash($message,$type='info'){
      	   	   $_SESSION['notification']['message']=$message;
      	   	   $_SESSION['notification']['type']=$type;

      	   }
      }