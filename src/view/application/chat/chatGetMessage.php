<?php 
     session_start();
     
     extract($_POST); 
     require('traitement/ChatManager.php');
     $chatManager=new ChatManager();
     $req=$chatManager->getCurrentMessages($user_id,$friend_id);
     ob_start();
?>
        
        <?php
                             while($data=$req->fetch(PDO::FETCH_OBJ)){?>
                                <?php if($data->idUser!=$user_id):?>
                                    <div class="chat-box-left">
                                       <?=$data->message;?>
                                    </div>
                                    <div class="chat-box-name-left">
                                        <img src="$data->photoDeProfil"  class="img-circle" />
                                        -  <?=$data->pseudo;?>
                                    </div>
                                <hr class="hr-clas" />
                            <?php else:?>
                                <div class="chat-box-right">
                                  <?=$data->message;?>
                                </div>
                                <div class="chat-box-name-right">
                                    <img src="<?=$_SESSION['user']['photoDeProfil'];?>"   alt='humm' class="img-circle" />
                                    - Vous
                                </div>
                                <hr class="hr-clas" />
                            <?php endif ?>
                       <?php } ?>
<?php
    $content=ob_get_clean();
    echo $content;

      