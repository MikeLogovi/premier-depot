<?php
          $site=new App\classes\site\Site();

          $userManager=new App\classes\User\UserManager();
          $identity= $_SESSION['user']['identity'];
          $person=$userManager->read($identity)->fetch(PDO::FETCH_OBJ);
          $user = new App\classes\User\User($person->pseudo,$person->email,$person->motpass,$person->nom,$person->prenom,$person->photoDeProfil,$person->ipAdress,$person->role);
          $online=new App\classes\User\OnlineUserManager();
          $user->setIpAdress($_SERVER['REMOTE_ADDR']);
          $user->setOnlineStatus('1');
          $userManager->update($user);
          $user->setId($person->id);
          $online->createOnlineUser($user);
          $_SESSION['user']['photoDeProfil']=$user->getPhotoDeProfil();


