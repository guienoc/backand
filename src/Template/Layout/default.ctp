<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <base href="<?=$base?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?></title>
    <meta name="description" content="HostGuru is a fully responsive web hosting template, suited perfectly for any web hosting business. It also includes an elegant, WHMCS integration.">
    <link href="site-layout/css/bootstrap.min.css" rel="stylesheet">
    <link href="site-layout/css/font-awesome.css" rel="stylesheet">
    <link href="site-layout/css/flaticon.css" rel="stylesheet">
    <link href="site-layout/css/fopen-sans.css" rel="stylesheet">
    <link href="site-layout/css/raleway-webfont.css" rel="stylesheet">
    <link href="site-layout/css/lato.css" rel="stylesheet">
    <link href="site-layout/css/idangerous.swiper.css" rel="stylesheet">
    <link href="site-layout/css/magnific-popup.css" rel="stylesheet">
    <link href="site-layout/img/favicon.ico" rel="shortcut icon">
    <link href="site-layout/css/style.css" rel="stylesheet">
    <link href="site-layout/css/responsive.css" rel="stylesheet">
    <?= $this->fetch('css') ?>
  </head>
  <body>

    <div class="wpc-menu-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-3 no-padding">
                    <a href="<?=$this->Html->Url->build(['action'=>'index'])?>">
                        <img src="site-layout/img/logo.png" alt="logo" class="logo-menu">
                    </a>
                </div>
                <div class="col-md-9 no-padding">
                    <nav class="wpc-nav-menu">
                        <button class="menu-toggle">
                            <span class="icon"></span>
                            <span class="icon"></span>
                            <span class="icon"></span>
                        </button>
                        <ul class="main-menu pull-right no-margin">

                            <li class="menu-item">
                                <a href="<?=$this->Html->Url->build(['action'=>'servicos'])?>">SERVIÇOS</a>
                            </li>

                            <li class="menu-item">
                                <a href="<?=$this->Html->Url->build(['action'=>'faq'])?>">FAQ</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?=$this->Html->Url->build(['action'=>'contato'])?>">CONTATO</a>
                            </li>

                            <li class="menu-item registrar">
                                <?
                                if ($auth_user) {
                                    $url = $this->Html->Url->build(['prefix'=>'admin','controller'=>'Painel' ,'action'=>'index']);
                                } else {
                                    $url = $this->Html->Url->build(['action'=>'registrar']);
                                }
                                ?>
                                <a href="<?=$url?>">Área do Cliente</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?= $this->fetch('content') ?>
    <footer class="wpc-footer">
        <div class="container no-padding-sm">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="site-layout/img/logo-light.png" alt="logo">
                    <div class="footer-info">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Officiis at, voluptatem similique tempora voluptate quia in ea minima earum.
                    </div>
                    <p class="contact"><i class="flaticon-location"></i> 2901 Some Road, City, Country</p> 
                    <p class="contact"><a href="mailto:info@hostguru.com"><i class="flaticon-letter"></i>info@hostguru.com</a></p> 
                    <p class="contact"><a href="tel:+1234567890"><i class="flaticon-technology-1"></i>1 -234 -456 -7890 </a></p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="heading">Explore our pages</div>
                    <ul class="footer-menu classic">
                        <li class="menu-item"><a href="index.html">Home</a> </li>                             
                        <li class="menu-item"><a href="about.html">About Us</a> </li>
                        <li class="menu-item"><a href="services.html">Services</a></li>
                        <li class="menu-item"><a href="shop.html">shop</a></li>
                        <li class="menu-item"><a href="blog.html">Blog</a></li>
                        <li class="menu-item"><a href="hosting.html">Hosting</a></li>
                        <li class="menu-item"><a href="team.html">Our team</a></li>
                        <li class="menu-item"><a href="countdown.html">Coming soon</a></li>
                        <li class="menu-item"><a href="faq.html">Faq</a></li>                       
                        <li class="menu-item"><a href="cart.html">cart</a></li>
                        <li class="menu-item"><a href="checkout.html">checkout</a></li>
                        <li class="menu-item"><a href="product.html">product</a></li>
                        <li class="menu-item"><a href="portfolio.html">portfolio</a></li>
                        <li class="menu-item"><a href="contact.html">contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 text-xs-center text-sm-center">
                    <div class="heading">Contact info</div>
                    <div class="soc-icons">
                        <a href=""><i class="fa fa-facebook"></i> Facebook</a>
                        <a href=""><i class="fa fa-google-plus"></i> Google Plus</a> <br>
                        <a href=""><i class="fa fa-twitter"></i> Twitter</a> 
                        <a href=""><i class="fa fa-linkedin"></i> Linkedin</a>                      
                    </div>                  
                </div>
            </div>          
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 no-padding-sm">
                    <div class="footer-bottom">
                    <div class="container no-padding-sm">
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 text-center text-lg-left">
                                <div class="copyrigh">Copyright © <?=date('Y')?> backand.com.br</div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <ul class="footer-menu">
                                    <li class="menu-item"><a href="#">Legal</a></li>
                                    <li class="menu-item"><a href="#">Sitemap</a></li>
                                    <li class="menu-item"><a href="#">Privacy Policy</a></li>                             
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="site-layout/js/jquery.min.js"></script>
    <script src="site-layout/js/bootstrap.min.js"></script>
    <script src="site-layout/js/idangerous.swiper.min.js"></script>
    <script src="site-layout/js/jquery.viewportchecker.min.js"></script>
    <script src="site-layout/js/jquery.circliful.min.js"></script>
    <script src="site-layout/js/jquery.magnific-popup.min.js"></script>
    <script src="site-layout/js/scripts.js"></script>
    <?= $this->fetch('script') ?>
  </body>
</html>