 <?php 
     session_start();
     extract($_POST); 
     require('traitement/ChatManager.php');
     $chatManager=new ChatManager();
     $chatManager->postCurrentMessage($user_id,$friend_id,$messages);
     $chatManager->updateConversation($user_id,$friend_id,$messages);
     echo 'ok';