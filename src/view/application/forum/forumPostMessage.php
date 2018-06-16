<?php
session_start();
require('traitement/ForumManager.php');
extract($_POST);
$forumManager=new ForumManager();
if($forumManager->postMessage($_SESSION['user']['id'],$message)){
	echo '1';
}
else echo'0';
