<?php 
/*echo"<pre>";
var_dump($_SESSION);
echo"</pre>";*/?>
   <div class='main'>
    <div class="container">
        <div class="row pad-top pad-bottom">          
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="chat-box-online-div" id='online-user'>
                   
                </div>

            </div>
            <div class="col-xs-9" id='main-prop-chat'>
                <div class="chat-box-new-div">
                    <div class="chat-box-new-head">
                       <ul class="list-unstyled nav2">
                       	  <a href="coucou" class='active astyle'><span>CONVERSATIONS</span></a>
                       	    <a href="#"  class='astyle'><span>STORIES</span></a>
                       	   <a href="#"  class='astyle'><span>PROGRAMMES</span></a>
                       </ul>
                       	 
                    </div>
                    <div class="panel-body chat-box-new" id='main-chat'>
                      <?php 
                             while($data=$req->fetch(PDO::FETCH_OBJ)){
                              echo '<div id="'.$data->idFriend.'" onclick="getCurrentMessage(this)" class="convDiv">';
                              echo "<img class='convPicture img-circle' src='$data->photoDeProfil'/>"." "."<span class='identityFriend'>".$data->pseudo."</span>"." "."<span class='mess'>".$data->lastMessage."</span>".'<br/>';
                              echo '<hr/>';
                               echo"</div>";
                           }
                      ?>
                       <!--<center>
                             <img src='src/public/images/chatMessage.gif' alt='chatMessage'/>
                       </center>-->  
 
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
