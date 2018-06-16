<?php
    session_start();
    require('traitement/ChatManager.php');
    $chatManager=new ChatManager();
    $chatManager->setOnline($_SESSION['user']['id']);
    $chatManager->offLine();
    $req=$chatManager->getOnlineUsers($_SESSION['user']['id']);
    ob_start();
    
?>                   <div class="chat-box-online-head">
                        AMI(E)S EN LIGNE(<?=$req->rowCount();?>)
                      </div>  
        <?php while($data=$req->fetch(PDO::FETCH_OBJ)){?>
                     
                     <div class="chat-box-online-left">
                          
                            <a href="<?=$data->photoDeProfil;?>"><img src="<?=$data->photoDeProfil!=null?$data->photoDeProfil:'src/public/users_pictures/anonyme.jpg';?>" alt="bootstrap Chat box user image" class="img-circle" /></a>
                            -  <?=$data->pseudo;?>
                            <br />
                            ( <small>Active from 3 hours</small> )
                      </div> 
           
         <?php } ?>
<?php
    $content=ob_get_clean();
    echo json_encode($content);