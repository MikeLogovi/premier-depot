<?php
 session_start();
 $nb_chiffre=6;
 header("Content-type : image/png");
 $img=imagecreatefrompng("image.png");
 $avant_plan1=imagecolorallocate($img,128,255, 255);
 $avant_plan2=imagecolorallocate($img,255,128,255);
 $avant_plan3=imagecolorallocate($img,255,255,128);
 $nb=mt_rand(1,3);
 if($nb==1){
 	 $i=0;
 	while($i<$nb_chiffre){
 	$chiffre=mt_rand(0,9);
    $tab_chiffre[$i++]=$chiffre;
   }
    $nombre=null;
    foreach($tab_chiffre as $chiffres){
 	$nombre .=$chiffres;
   }
   $_SESSION['aleat_caract'] = $nombre;
   imagestring($img,5,18,8,$nombre,$avant_plan1);
   imagepng($img);
}
else if($nb==2){
	$liste=file('dico.txt');
	$mot=substr(trim($liste[array_rand($liste)]),0,6);
	$_SESSION['aleat_caract'] = $mot;
	imagestring($img,5,18,8,$mot,$avant_plan2);
	imagepng($img);
}
else if($nb==3){
     $mot=substr(md5(uniqid()),0,6);
     $_SESSION['aleat_caract'] = $mot;
     imagestring($img,5,18,8,$mot,$avant_plan3);
     imagepng($img);
}
 


?>