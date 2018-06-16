<?php

     function homePage(){
          $site=new App\classes\site\Site();
     	require('src/view/acceuil/acceuil.view.php');
     }
     function registration(){
          $site=new App\classes\site\Site();
     	require('src/view/formulaire/formulaire.view.php');
     }
     function formularTreatment(){
          $site=new App\classes\site\Site();
     	require('src/view/traitement/formularTreatment.php');
     }
     function connexionTreatment(){
          $site=new App\classes\site\Site();
          require('src/view/traitement/connexionTreatment.php');
     }
     function connexion(){
          $site=new App\classes\site\Site();
     	require('src/view/connexion/connexion.view.php');
     }
     function activation($pseudo,$token){
          $site=new App\classes\site\Site();
          require('src/view/traitement/activation.php');
     }
     function application(){
          require('src/view/partials/initialize.php');
          require('src/view/application/application.view.php');
     }
     function chating(){
          require('src/view/partials/initialize.php');
          require('src/view/application/chat/traitement/ChatManager.php');
          $chatManager=new ChatManager();
          $req=$chatManager->getConversation($user->getId());
          ob_start();
          require('src/view/application/chat/chat.view.php');
          $content=ob_get_clean();
          require('src/view/application/application.view.php');
     }
     function coding(){
         require('src/view/partials/initialize.php');
          ob_start();
          require('src/view/application/codage/coding.view.php');
          $content=ob_get_clean();
          require('src/view/application/application.view.php'); 
     }
     function codingTreatment(){
          $site=new App\classes\site\Site();
          require('src/view/application/codage/traitement/codingTreatment.php'); 
     }
     function codingView(){
          require('src/view/partials/initialize.php'); 
          ob_start();
          require('src/view/application/codage/codingView.view.php');
          $content=ob_get_clean();
          require('src/view/application/application.view.php'); 
     }
     function forum(){
          require('src/view/partials/initialize.php');
          
          ob_start();
          require('src/view/application/forum/forum.view.php');
          $content=ob_get_clean();
          require('src/view/application/application.view.php'); 
          
     }
      function forumTreatment(){
          $site=new App\classes\site\Site();
          require('src/view/application/forum/traitement/forumTreatment.php'); 
     }
     function profil(){
          require('src/view/partials/initialize.php');
          ob_start();
          require('src/view/application/profil/profil.view.php');
          $content=ob_get_clean();
          require('src/view/application/application.view.php'); 
     }
      function profilModify(){
          require('src/view/partials/initialize.php');
          ob_start();
          require('src/view/application/profil/profilModify.view.php');
          $content=ob_get_clean();
          require('src/view/application/application.view.php'); 
     }