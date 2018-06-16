   <?php
     session_start();
     extract($_POST); 
     require('traitement/ChatManager.php');
     $chatManager=new ChatManager();
     $req=$chatManager->getCurrentMessages($userId,$friendId);
     $req1=$chatManager->getFriendProperties($friendId);
     $data1=$req1->fetch(PDO::FETCH_OBJ);
     ob_start();
   ?>
   <input type='hidden' id='<?=$userId;?>' class='userId'/>
   <input type='hidden' id='<?=$friendId;?>' class='friendId'/>
     <!--<script src="src/view/application/vendor/js/jquery.min.js" type="text/javascript"></script>
     <script src="src/view/application/vendor/js/bootstrap.min.js" type="text/javascript"></script>-->
   <div class="chat-box-div" id='testlo'>
                    <div class="chat-box-head">
                            <img src="<?=$data1->photoDeProfil;?>"  class="img-circle convPicture"/>&nbsp;&nbsp;&nbsp;&nbsp;<span><?=$data1->pseudo;?></span>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="fa fa-cogs"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><span class="fa fa-map-marker"></span>&nbsp;Invisible</a></li>
                                    <li><a href="#"><span class="fa fa-comments-o"></span>&nbsp;Online</a></li>
                                    <li><a href="#"><span class="fa fa-lock"></span>&nbsp;Busy</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><span class="fa fa-circle-o-notch"></span>&nbsp;Logout</a></li>
                                </ul>
                            </div>
                    </div>
                    <div class="panel-body chat-box-main" id='propMain'>
                        <div id='hum'>
                        <?php
                             while($data=$req->fetch(PDO::FETCH_OBJ)){?>
                                <?php if($data->idUser!=$userId):?>
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
                                    <img src="<?=$_SESSION['user']['photoDeProfil'];?>"  class="img-circle" />
                                    - Vous
                                </div>
                                <hr class="hr-clas" />
                            <?php endif ?>
                       <?php } ?>
                      </div>
                    </div>
                    <div class="chat-box-footer">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Text Here..." id='text'>
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button" onclick="postMessage();">SEND</button>
                            </span>
                        </div>
                    </div>

                </div>
                <script>
                        var reloadTime=1000;
                        var timeout=3000;
                        function getMessages(){
                         var userId=document.getElementsByClassName('userId')[0];
                         var friendId=document.getElementsByClassName('friendId')[0];
                         $.ajax({
                            type:"POST",
                            url:'src/view/application/chat/chatGetMessage.php',
                            data:{
                                 user_id:userId.id,
                                 friend_id:friendId.id  
                            },
                            success:function(data){
                                
                                $('#propMain').html(data);
                                $('#propMain').animate({'scrollTop':1000000},"slow");
                                
                            }
                         });
                        }
                        function postMessage(){
                          var userId=document.getElementsByClassName('userId')[0];
                          var friendId=document.getElementsByClassName('friendId')[0];
                          var message=$('#text').val();
                          $.ajax({
                            type:'POST',
                            url:'src/view/application/chat/chatPostMessage.php',
                            data:{
                                 messages:message,
                                 user_id:userId.id,
                                 friend_id:friendId.id  
                            },
                            success:function(data){
                                $('#propMain').animate({'scrollTop':1000000},"slow");
                                $('#text').focus();
                             // getMessage();
                                $('#text').val('');
                                $('#beep2')[0].play();
                              }
                          });
                           
                        }
                        $(function(){
                         
                          //$('.ap').tooltip();
                          //window.setTimeout(getMessage,timeout);
                           window.setInterval(getMessages,reloadTime);
                          //$("#f-main").animate({"scrollTop":$("#f-main").height()}, "slow");
                          $('body').append("<audio id='beep2'><source type='audio/mpeg' src='src/view/application/forum/forum_style/son2.mp3' >");
                          $('#text').focus();
                          $('#text').keypress(function(e){
                                 if(e.which==13){
                                    e.preventDefault();
                                    postMessage();
                                 }
                          });
                         /* $('#envoyer').click(function(){
                             postMessage();
                          });*/
                        });
                </script>
<?php
    $content=ob_get_clean();
    echo $content;
    ?>