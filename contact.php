<!DOCTYPE HTML>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Contact | Engineering Innovations</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/flexslider.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
      <link rel="stylesheet" href="css/style.css">
      <script src="js/modernizr-2.6.2.min.js" type="87d3eeb73a3f955eba03a117-text/javascript"></script>
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
                                 <h1>Contact us</h1>
                                 <h2><a href="index.php">Home</a> - Contact</h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </aside>
         <div id="colorlib-contact">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 col-md-offset-1 animate-box">
                     <h2>Contact Information</h2>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="contact-info-wrap-flex">
                              <div class="con-info">
                                 <p><span><i class="icon-location-2"></i></span> 84-a Chikitsik Nagar, <br> Near Bombay Hospital, Indore, Madhya Pradesh IN 452010
                                 <br> <a href="" target="_blank">See In Map</a></p>
                              </div>
                              <div class="con-info">
                                 <p><span><i class="icon-location-2"></i></span> A77/78, Soumya Privilege, Near Aura Mall, <br> Trilanga Bhopal, <br> Madhya Pradesh 462039
                              <br> <a href="https://g.page/r/CSMNX1xDQv-1EBA" target="_blank">See In Map</a>
                              </p>
                              </div>
                              <div class="con-info">
                                 <p><span><i class="icon-location-2"></i></span> 2004/C, Scheme No 14, Vijay Nagar, Near SBI Chowk, Jabalpur, Madhya Pradesh 482002
                                 <br> <a href="https://maps.app.goo.gl/rYyWcJsFDZgEGr138" target="_blank">See In Map</a>
                              </p>
                              </div>
                              <div class="con-info">
                                 <p><span><i class="icon-phone3"></i></span> <a href="tel://+919516703294">+ 91 9516703294</a></p>
                                 <p><span><i class="icon-paperplane"></i></span> <a href="mailto:support@eiindia.in">support@eiindia.in</a></p>
                                 <p><span><i class="icon-globe"></i></span> <a href="http://eiindia.in/">eiindia.in</a></p>
                              </div>
                              <!-- <div class="con-info">
                                 <p><span><i class="icon-paperplane"></i></span> <a href=""><span class=""></span></a></p>
                              </div> -->
                              <!-- <div class="con-info">
                                 <p><span><i class="icon-globe"></i></span> <a href="#">eiindia.in</a></p>
                              </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-10 col-md-offset-1 animate-box">
                     <h2>Get In Touch</h2>
                     <?php
                        /*session_start();
                        if(isset($_SESSION['msg']) && $_SESSION['msg'] != "")
                        {
                            echo $_SESSION["msg"];
                            $_SESSION['msg'] = "";
                        }*/
                        ?>
                     <form id="contactdata" method="post">
                        <div class="row form-group">
                           <div class="col-md-6">
                              <input type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname" required>
                           </div>
                           <div class="col-md-6">
                              <input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname">
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col-md-6">
                              <input type="email" id="email" name="email" class="form-control" placeholder="Your email address" required>
                           </div>
                           <div class="col-md-6">
                              <input type="text" id="mobile" name="phone" class="form-control" placeholder="Your mobile" required>
                           </div>
                        </div>
                       
                        <div class="row form-group">
                           <div class="col-md-12">
                              <input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message" required>
                           </div>
                        </div>
                        <div class="row form-group">
                           <div class="col-md-12">
                              <textarea id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                     </form>
                     <div id="msz"></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="map" class="colorlib-map"></div>
        
         <?php include_once("footer.php"); ?>
      </div>
      <div class="gototop js-top">
         <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
      </div>
     
      <script type="text/javascript">
         $(document).ready(function(ddds){
         $("#contactdata").on('submit',(function(ddds){
         ddds.preventDefault();
         $.ajax({
         url:"php/contact?<?=$enc->enc1("CONTACTUS") ?>",
         type:"POST",
         data:new FormData(this),
         contentType:false,
         cache:false,
         processData:false,
         success:function(data){
         $("#msz").html(data)
         },
         error:function(){}
         });
         }));
         });
      </script>
   </body>
</html>