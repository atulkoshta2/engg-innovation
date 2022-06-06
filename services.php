<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Services | Engineering Innovations</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

        <meta property="og:title" content="" />
        <meta property="og:image" content="" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet" />

        <link rel="stylesheet" href="css/animate.css" />

        <link rel="stylesheet" href="css/icomoon.css" />

        <link rel="stylesheet" href="css/bootstrap.css" />

        <link rel="stylesheet" href="css/magnific-popup.css" />

        <link rel="stylesheet" href="css/flexslider.css" />

        <link rel="stylesheet" href="css/owl.carousel.min.css" />
        <link rel="stylesheet" href="css/owl.theme.default.min.css" />

        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

        <link rel="stylesheet" href="css/style.css" />

        <script src="js/modernizr-2.6.2.min.js" type="f3f55e30aade659e8d09e7fe-text/javascript"></script>

        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="colorlib-loader"></div>
        <div id="page">
            <?php include_once("header.php"); ?>
            <aside id="colorlib-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <li style="background-image: url(images/cover_img_3.jpg);">
                            <div class="overlay"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                        <div class="slider-text-inner text-center">
                                            <h1>Services</h1>
                                            <h2><a href="index.html">Home</a> - Services</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <div id="colorlib-services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center animate-box">
                            <div class="services">
                                <span class="icon">
                                    <i class="flaticon-engineer"></i>
                                </span>
                                <div class="desc">
                                    <h3>Rapid Prototyping</h3>
                                    <p>We help our clients to conceptulize, design, develop and test product prototype</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services">
                                <span class="icon">
                                    <i class="flaticon-engineering"></i>
                                </span>
                                <div class="desc">
                                    <h3>Android Apps</h3>
                                    <p>We develop customized Android apps for clients and help them grow online</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services">
                                <span class="icon">
                                    <i class="flaticon-skyline"></i>
                                </span>
                                <div class="desc">
                                    <h3>iOS Apps</h3>
                                    <p>We develop customized iOS apps for clients and help them grow online</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services">
                                <span class="icon">
                                    <i class="flaticon-crane"></i>
                                </span>
                                <div class="desc">
                                    <h3>Hybrid Apps</h3>
                                    <p>We do incredibly faster app development on Flutter/Ionic</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services">
                                <span class="icon">
                                    <i class="flaticon-sketch"></i>
                                </span>
                                <div class="desc">
                                    <h3>Circuit Designing</h3>
                                    <p>IOT driven customhardware development to help various kind of Industrial Problems</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <div class="services">
                                <span class="icon">
                                    <i class="flaticon-conveyor"></i>
                                </span>
                                <div class="desc">
                                    <h3>Funding & Complaince</h3>
                                    <p>Provides consultancy in geting financial and complaince oriented services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="colorlib-project">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>See Projects</h2>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                    if (!empty ($PROJECT)) {
                        foreach($PROJECT->all("projectID!='' LIMIT 3") as $value){ ?>
                    <div class="col-md-4 animate-box">
                        <div class="project-entry">
                            <a href="#" class="project-img text-center" style="background-image: url(image/<?=$value['image']?>);">
                            <span class="icon"><i class="icon-search2"></i></span>
                            </a>
                            <div class="desc">
                            <h4><?=$value['title']?> &nbsp; <?php if($value['playstore_link']!=''){?> <a href="<?=$value['playstore_link']?>" title="Play Store Link" target="_blank"><img src="images/android.png" height="20px" width="20px"></a> <?php } if($value['appstore_link']!=''){ ?>&nbsp;<a href="<?=$value['appstore_link']?>" title="App Store Link" target="_blank"><img src="images/apple.png" height="20px" width="20px"></a> <?php } if($value['adove_xd_link']!=''){ ?>&nbsp;<a href="<?=$value['adove_xd_link']?>" title="Adove XD Link" target="_blank"><img src="images/xd.png" height="20px" width="20px"></a><?php }if($value['pdf']!=''){ ?>&nbsp;<a href="image/<?=$value['pdf']?>" title="PDF Link" target="_blank"><img src="images/pdf.png" height="20px" width="20px"></a><?php } ?></h4>
                            </div>
                        </div>
                    </div>
                    <?php } 
                    }
                    ?>
                       
                      
                    </div>
                </div>
            </div>
            <div id="colorlib-testimony">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                            <h2>Client Says:</h2>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="row animate-box">
                                <div class="owl-carousel1">
                                    <div class="item">
                                        <div class="testimony-slide">
                                            <div class="testimony-wrap">
                                                <figure>
                                                    <img src="images/person1.jpg" alt="user" />
                                                </figure>
                                                <blockquote>
                                                    <span>Andrew Field</span>
                                                    <p>
                                                        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                                                        Semantics, a large language ocean.
                                                    </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-slide">
                                            <div class="testimony-wrap">
                                                <figure>
                                                    <img src="images/person2.jpg" alt="user" />
                                                </figure>
                                                <blockquote>
                                                    <span>Mark Bubble</span>
                                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-slide">
                                            <div class="testimony-wrap">
                                                <figure>
                                                    <img src="images/person3.jpg" alt="user" />
                                                </figure>
                                                <blockquote>
                                                    <span>Adam Smith</span>
                                                    <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php include_once("footer.php"); ?>
        </div>
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
        </div>

       
    </body>
</html>
