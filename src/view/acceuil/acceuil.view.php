<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?=$site::WEB_SITE_NAME?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel='stylesheet' href='src/public/bootstrap/dist/css/bootstrap.min.css'/>
    <link rel="stylesheet" href="src/view/acceuil/css/base.css">
    <link rel="stylesheet" href="src/view/acceuil/css/vendor.css">
    <link rel="stylesheet" href="src/view/acceuil/css/main.css">

    <!-- script
    ================================================== -->
    <script src="src/view/acceuil/js/modernizr.js"></script>
    <script src="src/view/acceuil/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
   <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">-->



        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="src/view/acceuil/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="src/view/acceuil/images/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">





</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="src/view/acceuil/images/log.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Acceuil</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">A propos</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Projet récents</a></li>
                    <li><a class="smoothscroll"  href="#clients" title="clients">Fondateur</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
                </ul>
    
                <p>Merci d avoir porté votre choix sur BLUEBEARD.Vous ne le regretterez pas! Songez à vous inscrire le plus vie possible sur la page d accueil ou en cliquant juste  <a href='#0'>ici!</a> </p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/mike.logovi.71"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/mikelogovi/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="src/view/acceuil/images/img1.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3 class="palabre" id="palabre_head">Bienvenue sur BLUEBEARD</h3>

                <h1 class="palabre" id="h1palabre">
                    Nous créons tout site <br>
                    de chats,de blogs. <br>
                    Nous pronons la liberté d'expression<br>
                    et le libre partage.
                </h1>

                <div class="home-content__buttons">
                    <a href="inscription" class="btn btn--stroke">
                        Inscription
                    </a>
                    <a href="connexion" class="btn btn--stroke">
                        Connexion
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroller vers le bas</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->

        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">A votre service</h3>
                <h1 class="display-1 display-1--light">BLUEBEARD<br/> LA<br/> REFERENCE</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
               Ce site vous offre la possibilité de communiquer facilement avec vos amis, de participer à des quiz compétitifs sur divers domaines et également de poster des vidéos;de liens,de la musique ,des documents et tous fichiers multimédia de votre envie! Laissez nous vous mettre à l'aise . 
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-3 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">127</div>
                <h5>Membres actifs</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1505</div>
                <h5>Blogs postés</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">109</div>
                <h5>Quiz en ligne</h5>
            </div>

        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->
    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Notre derniere oeuvre</h3>
                    <h1 class="display-2 display-2--light">Pour nous la programmation n'est pas juste un moyen lucratif mais c'est une passion,un moyen de s'amuser de s'evader de se divertir</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="src/view/acceuil/images/bblog.PNG" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="src/view/acceuil/images/bblog.PNG" 
                                         alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    B-BLOG
                                </h3>
                                <p class="item-folio__cat">
                                    Votre Blog en action
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>B-Blog est un site de publication de blog avec commentaires.Vous pouvez y mettre autant de blog que vous voulez et n 'importe qui peut les commenter!</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="src/view/acceuil/images/bb.PNG" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                    <img src="src/view/acceuil/images/bb.PNG" 
                                         srcset="src/view/acceuil/images/bb.PNG 1x, images/bb.PNG 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                   B-Blog
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Preentation du site.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Le fondateur</h3>
                <h1 class="display-2">Mike LOGOVI</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>BLUEBEARD a été développé  par le jeune étudiant Mike LOGOVI. Il est en deuxième année d'informatique virtuelle.Il est là pour vous aider dans vos projets futurs de développement</p>

                        <a href="src/view/acceuil/images/avatars/user.jpg"><img src="src/view/acceuil/images/avatars/user.jpg" alt="Author image" class="testimonials__avatar"></a>
                        <div class="testimonials__info">
                         <span class="testimonials__name">Mike LOGOVI</span> 
                        </div>

                    </div>
                </div><!-- end testimonials -->
                
            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->


    <!-- contact
    ================================================== -->
   


    <!-- footer
    ================================================== -->
    <footer id="contact">

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

               <div class="cinfo">
                        <h5>Comment nous voir?</h5>
                        <p>
                            Alger<br>
                            Ben Aknoun,<br>
                            Talheb Abderrhamane
                        </p>
                    </div>

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <div class="cinfo">
                        <h5>Envoyez nous des emails sur</h5>
                        <p>
                            logovimike@gmail.com<br>
                
                            logovimike20@gmail.com
                        </p>
                </div>
                  <ul class="contact-social">
                        <li>
                            <a href="https://www.facebook.com/mike.logovi.71"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/mikelogovi/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                </ul> <!-- end contact-social -->


            </div>
             <div class="col-six tab-full right footer-subscribe">
               <div class="footer-logo"></div>
            </div>


        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright BlueBeard 2018</span> 
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="src/view/acceuil/js/jquery-3.2.1.min.js"></script>
    <script src='src/public/bootstrap/dist/js/bootstrap.js'></script>
    <script src="src/view/acceuil/js/plugins.js"></script>
    <script src="src/view/acceuil/js/main.js"></script>

</body>

</html>