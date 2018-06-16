<?php
  require('vendor/autoload.php');
  $faker=Faker\Factory::create();
  $bdd=new PDO('mysql:host=localhost;dbname=bluebeard2;charset=utf8','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
  for($i=1;$i<=150;$i++){
     $req=$bdd->prepare('INSERT INTO user(nom,prenom,pseudo,email,role,motpass) VALUES(:nom,:prenom,:pseudo,:email,:role,:motpass)');
     $req->execute(array(
      'nom'=>$faker->lastName,
      'prenom'=>$faker->firstName,
      'pseudo'=>$faker->userName,
      'email'=>$faker->email,
      'role'=>'USER',
      'motpass'=>sha1(md5('123456'))
     ));
  }
  echo "C'est bon";