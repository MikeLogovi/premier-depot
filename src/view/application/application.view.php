<?php
namespace App\view\application;
use App\classes\filters\Filter;
    $filter=new Filter();
    $filter->isNotGuest();
use App\classes\application\Functions;
$function=new Functions();
/*echo'<pre>';
var_dump($_SERVER);
echo'</pre>';
echo"Le mechant ".$function->requestCodingJsLink()*/;

?>
<!DOCTYPE html>
<html >
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$site::WEB_SITE_NAME.'-APPLICATION';?></title>
        <link href="src/public/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <?=$function->requestChatCssLink();?>
        <?=$function->requestCodingCssLink();?>
        <?=$function->requestcodingViewCssLink();?>
         <?=$function->requestForumCssLink();?>
         <?=$function->requestProfilCssLink();?>
        <link href="src/view/application/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="src/view/application/vendor/css/style.css" rel="stylesheet">
        <link href="src/view/application/vendor/fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="src/view/application/vendor/css/lightbox.min.css">
        <link href="src/view/application/vendor/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
       
         
        <link rel="icon" type="image/png" sizes="32x32" href="src/view/application/vendor/images/mylog.png">
    </head>
    <body>
        <div id="page">
            <!---header top---->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                        <div class="col-md-12">
                            <div class="social-grid">
                                <ul class="list-unstyled text-right pull-right">
                                    <li><a href=><i class="fab fa-facebook-square"></i></i></a></li>
                                      
                                    <li><a><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header-->
            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-xs-2 ">
                                <div id="logo">
                                    <a href="acceuil"><img src="src/view/application/vendor/images/logo5.png" alt="logo"/></a>
                                </div>                       
                            </div><br/>
                            <div class="col-xs-10 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li class="dropdown">
                                              <a href='messagerie' class='dropdown-toggle'<?=$function->setActive('messagerie');?> data-toggle="dropdown"  data-hover="MESSAGERIE"><span>MESSAGERIE</span></a><span class='caret' id='caret'></span>
                                              <ul class="dropdown-menu" role="menu">
                                                      <li><a  class="dropdown-item myitem" id="myitem1" href="messagerie"><i class="fas fa-comments"></i></i>CHAT INSTANTANE</a></li>
                                                      <li><a  class="dropdown-item myitem" id="myitem1" href="style"><i class="fas fa-user-plus"></i></i>INVITER UN AMI</a></li>
                                                      <li><a class="dropdown-item myitem"  id="myitem2" href="mama"><i class="fas fa-users"></i>CREER UN GROUPE</a></li>
                                                      <li><a class="dropdown-item myitem"  id="myitem3" href="moumou"><i class="fas fa-user-secret"></i>LISTES DES UTILISATEURS</a></li> 
                                                      <li><a class="dropdown-item myitem"  id="myitem3" href="moumou"><i class="fas fa-exclamation-circle"></i>MESSAGE IMPORTANTS</a></li> 
                                                      <li><a class="dropdown-item myitem"  id="myitem4" href="moumou"><i class="fas fa-user-times"></i>CREER UNE LISTE NOIRE</a></li>
                                              </ul>
                                        </li>
                                            <li><a href='forum' data-hover="Forum" <?="class=".$function->setActive('forum');?> ><span>Forum</span></a></li>
                                            <li><a data-hover="Publications"  href='publication'  <?="class=".$function->setActive('publications');?>><span>Publications</span></a></li>
                                            <li><a data-hover="Galerie" href='galerie'  <?="class=".$function->setActive('galerie');?> ><span>Galerie</span></a></li>
                                            <li><a data-hover="Compétitions"  href='competition' <?="class=".$function->setActive('competition');?>><span>Compétitions</span></a></li>
                                            <li class="dropdown">
                                              <a href='#' class='dropdown-toggle' data-toggle="dropdown"  data-hover="PARTAGER"><span>PARTAGER</span></a><span class='caret' id='caret'></span>
                                              <ul class="dropdown-menu" role="menu">
                                                      <li><a  class="dropdown-item myitem" id="myitem1" href="style"><i class="fas fa-image"></i>PHOTOS</a></li>
                                                      <li><a class="dropdown-item myitem"  id="myitem2" href="mama"><i class="fas fa-video"></i>VIDEOS</a></li>
                                                      <li><a class="dropdown-item myitem"  id="myitem3" href="code_source"><i class="fas fa-keyboard"></i>CODES SOURCES</a></li> 
                                                      <li><a class="dropdown-item myitem"  id="myitem4" href="moumou"><i class="fas fa-link"></i>LIENS</a></li>
                                              </ul>
                                        </li>
                                        <li class="dropdown">
                                              <a href='#' class='dropdown-toggle' data-toggle="dropdown"  data-hover="VOS PARAMETRES"><span>VOS&nbsp; PARAMETRES</span></a><span class='caret' id='caret'></span>
                                              <ul class="dropdown-menu" role="menu">
                                                      <li><a  class="dropdown-item myitem" id="myitem1" href="profil"><i class="fas fa-user"></i>PROFIL</a></li>
                                              <li><a  class="dropdown-item myitem" href='profilModify' id="myitem1" href="profil"><i class="fas fa-edit"></i>MODIFIER LE PROFIL</a></li>
                                                      <li><a class="dropdown-item myitem"  id="myitem2" href="mama"><i class="fas fa-th"></i>MODIFIER LE THEME</a></li>
                                                      
                                                      <li class="dropdow-divider"></li>
                                                      <li><a class="dropdown-item myitem"  id="myitem4" href="moumou"><i class="fas fa-power-off"></i>DECONNEXION</a></li>
                                              </ul>
                                        </li>
                                             
                                       </ul>


                                 </div>
                                     
                             </nav>   
                        </div>
                    </div>
                </div>
            </header>
             <?php 
            require('src/view/partials/flash.php');
              $_SESSION['notification']=[];
              ?>
            <section id="contenu-principal">
                     <?=$content;?>
                     <input type='hidden' class='user' id="<?=$user->getId()?>"/>
            </section>           
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                            <div class="footer-details">
                                <h4>A VOTRE SERVICE</h4>
                                <ul class="list-unstyled footer-contact-list">
                                    <li>
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <p>Alger,Ben Aknoun</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg"></i>
                                        <p><a href="tel:+1-202-555-0100"> +213672626466</a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o fa-lg"></i>
                                        <p><a href="mailto:logovimike20@yahoo.com"> logovimike20@yahoo.com</a></p>
                                    </li>
                                </ul>
                                <div class="footer-social-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>                              <a href="#"><i class="fa fa-instagram"></i></a>
                               </div>
                            </div>
                        </div>
                        <br/><br/><br/><br/>
                    <div class="copyright">
                        &copy; 2018 Tous droits résevés. Design fait par<a href="https://www.facebook.com/mike.logovi.71" target="_blank"> Mike LOGOVI</a>
                    </div>

                </div>
            </footer>

            <!--back to top-->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
         
        <script src="src/view/application/vendor/js/jquery.min.js" type="text/javascript"></script>
         <script src="src/view/application/vendor/js/bootstrap.min.js" type="text/javascript"></script>
         <?=$function->requestCodingJsLink();?>
         <?=$function->requestcodingViewJsLink();?>
         <?=$function->requestForumJsLink();?>
         <?=$function->requestChatJsLink();?>
    </body>
</html>
