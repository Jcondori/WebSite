<!DOCTYPE html>
<html lang="en" class="no-js"> 
    <head>
        <!-- meta character set -->
        <meta charset="utf-8">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pastoral Juvenil Prelatura Yauyos</title>	

        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS
        ================================================== -->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo RUTA; ?>/resources/img/pigeon.png">
        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo RUTA; ?>/resources/css/font-awesome.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo RUTA; ?>/resources/css/jquery.fancybox.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo RUTA; ?>/resources/css/bootstrap.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo RUTA; ?>/resources/css/owl.carousel.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="<?php echo RUTA; ?>/resources/css/slit-slider.css">
        <!-- bootstrap.min -->
        <!--<link rel="stylesheet" href="<?php echo RUTA; ?>/resources/css/animate.css">-->
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo RUTA; ?>/resources/css/main.css">

        <!-- Modernizer Script for old Browsers -->
        <script src="<?php echo RUTA; ?>/resources/js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">

        <!-- preloader -->
        <!--        <div id="preloader">
                    <div class="loder-box">
                        <div class="battery"></div>
                    </div>
                </div>-->
        <!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="#body">Pastoral Juvenil</a>
                    </h1>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Inicio</a></li>
                        <li><a href="#service">Nosotros</a></li>
                        <li><a href="#portfolio">Galería</a></li>
                        <li><a href="#social">Equipo</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->

        <main class="site-content" role="main">

            <!--
            Home Slider
            ==================================== -->

            <section id="home-slider">
                <div id="slider" class="sl-slider-wrapper">

                    <div class="sl-slider">

                        <?php foreach ($sliders as $slider): ?>
                            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

                                <div class="bg-img" style="background-image: url(resources/img/slider/<?php echo $slider['image']; ?>);"></div>

                                <div class="slide-caption">
                                    <div class="caption-content">
                                        <h2 class="animated fadeInDown"><?php echo $slider['encabezado']; ?></h2>
                                        <span class="animated fadeInDown"><?php echo $slider['subencabezado']; ?></span>
                                        <!--<a href="#" class="btn btn-blue btn-effect">Join US</a>-->
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; ?>

                        <!--                        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                        
                                                    <div class="bg-img bg-img-2"></div>
                                                    <div class="slide-caption">
                                                        <div class="caption-content">
                                                            <h2>BLUE Onepage HTML5 Template</h2>
                                                            <span>Clean and Professional one page Template</span>
                                                            <a href="#" class="btn btn-blue btn-effect">Join US</a>
                                                        </div>
                                                    </div>
                        
                                                </div>-->

                        <!--                        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                        
                                                    <div class="bg-img bg-img-3"></div>
                                                    <div class="slide-caption">
                                                        <div class="caption-content">
                                                            <h2>BLUE Onepage HTML5 Template</h2>
                                                            <span>Clean and Professional one page Template</span>
                                                            <a href="#" class="btn btn-blue btn-effect">Join US</a>
                                                        </div>
                                                    </div>
                        
                                                </div>-->

                    </div>
                    <!-- /sl-slider -->

                    <!-- 
                    <nav id="nav-arrows" class="nav-arrows">
                        <span class="nav-arrow-prev">Previous</span>
                        <span class="nav-arrow-next">Next</span>
                    </nav>
                    -->

                    <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                        <a href="javascript:;" class="sl-prev">
                            <i class="fa fa-angle-left fa-3x"></i>
                        </a>
                        <a href="javascript:;" class="sl-next">
                            <i class="fa fa-angle-right fa-3x"></i>
                        </a>
                    </nav>


                    <nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
                        <span class="nav-dot-current"></span>
                        <span></span>
                        <span></span>
                    </nav>

                </div>
                <!-- /slider-wrapper -->
            </section>


            <!-- Service section -->
            <section id="service">
                <div class="container">
                    <div class="row">

                        <div class="sec-title text-center">
                            <h2 class="wow animated bounceInLeft">Nosotros</h2>
                            <p class="wow animated bounceInRight">Pastoral Juvenil Prelatura Yautos</p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-location-arrow fa-3x"></i>
                                </div>
                                <h3>Misión</h3>
                                <p>Lograr que los jóvenes sean partícipes en la formación de evangelización
                                    íntegra, de la organización y capacitación de estructuras pastorales de la Prelatura de Yauyos.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-eye fa-3x"></i>
                                </div>
                                <h3>Visión</h3>
                                <p>Ser una comunidad de agentes de pastoral que ofrece a los jóvenes una formación 
                                    íntegra haciéndolos protagonistas de la construcción del Reino de Dios.</p>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-5 col-sm-offset-5 text-center wow animated zoomIn">
                            <a href="#" class="btn btn-blue btn-effect">Ver más</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end Service section -->

            <!-- portfolio section -->
            <section id="portfolio">
                <div class="container">
                    <div class="row">

                        <div class="sec-title text-center wow animated fadeInDown">
                            <h2>Galería</h2>
                        </div>


                        <ul class="project-wrapper wow animated fadeInUp">
                            <li class="portfolio-item">
                                <img src="<?php echo RUTA; ?>/resources/img/slider/slider1.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="<?php echo RUTA; ?>/resources/img/slider/slider1.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>

                            <li class="portfolio-item">
                                <img src="<?php echo RUTA; ?>/resources/img/slider/slider1.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street" href="<?php echo RUTA; ?>/resources/img/slider/slider1.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>

                            <li class="portfolio-item">
                                <img src="<?php echo RUTA; ?>/resources/img/slider/slider2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="<?php echo RUTA; ?>/resources/img/slider/slider2.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>

                            <li class="portfolio-item">
                                <img src="<?php echo RUTA; ?>/resources/img/slider/slider3.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street 4" data-fancybox-group="works" href="<?php echo RUTA; ?>/resources/img/slider/slider3.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>

                            <li class="portfolio-item">
                                <img src="<?php echo RUTA; ?>/resources/img/slider/slider1.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street 5" data-fancybox-group="works" href="<?php echo RUTA; ?>/resources/img/slider/slider1.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>

                            <li class="portfolio-item">
                                <img src="<?php echo RUTA; ?>/resources/img/slider/slider2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street 6" data-fancybox-group="works" href="<?php echo RUTA; ?>/resources/img/slider/slider2.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </section>
            <!-- end portfolio section -->

            <!-- Social section -->
            <section id="social" class="parallax">
                <div class="overlay">
                    <div class="container">
                        <div class="row">

                            <div class="sec-title text-center white wow animated fadeInDown">
                                <h2>Comisión de la Juventud</h2>
                            </div>

                            <ul class="social-button">
                                <?php foreach ($members as $member): ?>
                                    <li class="wow animated zoomIn">
                                        <img src="resources/img/<?php echo $member['image']; ?>" class="img img-circle" width="128" height="128">
                                        <h3 style="color: #FFF"><?php echo $member['nombre']; ?></h3>
                                        <h3 style="color: #FFF"><?php echo $member['cargo']; ?></h3>
                                        <h3 style="color: #FFF"><?php echo $member['area']; ?></h3>
                                    </li>
                                <?php endforeach; ?>				
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end Social section -->

            <!-- Contact section -->
            <section id="contact" >
                <div class="container">
                    <div class="row">

                        <div class="sec-title text-center wow animated fadeInDown">
                            <h2>Eventos</h2>
                            <p>Algunos de nuestros eventos</p>
                        </div>


<!--                        <div class="col-md-7 contact-form wow animated fadeInLeft">
                            <form action="#" method="post">
                                <div class="input-field">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name...">
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email...">
                                </div>
                                <div class="input-field">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject...">
                                </div>
                                <div class="input-field">
                                    <textarea name="message" class="form-control" placeholder="Messages..."></textarea>
                                </div>
                                <button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
                            </form>
                        </div>

                        <div class="col-md-5 wow animated fadeInRight">
                            <address class="contact-details">
                                <h3>Contact Us</h3>						
                                <p><i class="fa fa-pencil"></i>Phoenix Inc.<span>PO Box 345678</span> <span>Little Lonsdale St, Melbourne </span><span>Australia</span></p><br>
                                <p><i class="fa fa-phone"></i>Phone: (415) 124-5678 </p>
                                <p><i class="fa fa-envelope"></i>website@yourname.com</p>
                            </address>
                        </div>-->

                    </div>
                </div>
            </section>
            <!-- end Contact section -->

        </main>

        <footer id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="footer-content">
                        <div class="wow animated fadeInDown">
                            <p>Pastoral Juvenil</p>
                            <p></p>
                        </div>
<!--                        <form action="#" method="post" class="subscribe-form wow animated fadeInUp">
                            <div class="input-field">
                                <input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
                                <button type="submit" class="submit-icon">
                                    <i class="fa fa-paper-plane fa-lg"></i>
                                </button>
                            </div>
                        </form>-->
                        <div class="footer-social">
                            <ul>
                                <li class="wow animated zoomIn"><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
                                <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
                                <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
                                <!--<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>-->
                                <li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
                            </ul>
                        </div>

                        <p>Copyright &copy; 2017 Powered by <a href="http://developerdatabase.hol.es/" target="_blank">Servifast</a> </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="<?php echo RUTA; ?>/resources/js/jquery-1.11.1.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="<?php echo RUTA; ?>/resources/js/bootstrap.min.js"></script>
        <!-- Single Page Nav -->
        <script src="<?php echo RUTA; ?>/resources/js/jquery.singlePageNav.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="<?php echo RUTA; ?>/resources/js/jquery.fancybox.pack.js"></script>
        <!-- Owl Carousel -->
        <script src="<?php echo RUTA; ?>/resources/js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="<?php echo RUTA; ?>/resources/js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="<?php echo RUTA; ?>/resources/js/jquery.slitslider.js"></script>

        <script src="<?php echo RUTA; ?>/resources/js/jquery.ba-cond.min.js"></script>
        <!-- onscroll animation -->
        <script src="<?php echo RUTA; ?>/resources/js/wow.min.js"></script>
        <!-- Custom Functions -->
        <script src="<?php echo RUTA; ?>/resources/js/main.js"></script>
    </body>
</html>