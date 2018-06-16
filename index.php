<?php
    session_start();
    require('src/controller/frontend.php');
    require('vendor/autoload.php');
    $router=new App\Router\Router($_GET['url']);
/*if(isset($_COOKIE['pseudo'])){
         $router->get('/messagerie',function(){chating();});
         $router->post('/messagerie',function(){chating();});
         $router->run();
    }else{*/
    if(isset($_COOKIE['pseudo'])AND $_COOKIE['pseudo']!="Mikou"){
        $_SESSION['user']['id']=$_COOKIE['id'];
       $router->get('/',function(){chating();}) ;
    }
    else{
       $router->get('/',function(){homePage();}); 
    }
    
    $router->get('/acceuil',function(){homePage();});
    $router->get('/inscription',function(){registration();});
    $router->get('/connexion',function(){connexion();});
    $router->get('/formularTreatment',function(){formularTreatment();});
    $router->post('/formularTreatment',function(){formularTreatment();});
    $router->get('/connexionTreatment',function(){connexionTreatment();});
    $router->post('/connexionTreatment',function(){connexionTreatment();});
    $router->get('/activation/:pseudo/:token',function($pseudo,$token){activation($pseudo,$token);})->with('pseudo','[a-zA-Z0-9\^*\.\$]+')->with('token','[a-zA-Z0-9*\^\.\$]+');
    $router->get('/BLUEBEARD',function(){application();});
    $router->post('/BLUEBEARD',function(){application();});
    $router->get('/messagerie',function(){chating();});
    $router->post('/messagerie',function(){chating();});
    $router->get('/code_source',function(){coding();});
    $router->post('/code_source',function(){coding();});
    $router->get('/code_source_view',function(){codingView();});
    $router->post('/code_source_view',function(){codingView();});
    $router->get('/codingTreatment',function(){codingTreatment();});
    $router->post('/codingTreatment',function(){codingTreatment();});
    $router->get('/forum',function(){forum();});
    $router->post('/forum',function(){forum();});  
    $router->get('/forumTreatment',function(){forumTreatment();});
    $router->post('/forumTreatment',function(){forumTreatment();}); 
    $router->get('/profil',function(){profil();});
    $router->post('/profil',function(){profil();});  
    $router->get('/profilModify',function(){profilModify();});
    $router->post('/profilModify',function(){profilModify();}); 
    $router->get('/profilModify',function(){profilModify();});
    $router->post('/profilModify',function(){profilModify();}); 
     
    $router->run();
 
    
    