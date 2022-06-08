<!DOCTYPE HTML>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Projects | Engineering Innovations</title>
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
   <script src="js/modernizr-2.6.2.min.js" type="f8fb1531b7e1547f1a9204eb-text/javascript"></script>
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
                              <h1>Projects | Engineering Innovations</h1>
                              <h2><a href="index.html">Home</a> - Project</h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </aside>
      <div id="colorlib-project">
         <div class="container">
            <div class="row">
               <?php
               if (!empty($PROJECT)) {
                  foreach ($PROJECT->fetch() as $value) { ?>
                     <div class="col-md-4 animate-box">
                        <div class="project-entry">
                           <!-- <a href="javascript:void(0);" onclick="showForm();" class="project-img text-center" style="background-image: url(image/<?= $value['image'] ?>);"> -->
                           <a href="project-detail.php?<?= $enc->enc1($value['projectID']); ?>   " class="project-img text-center" style="background-image: url(image/<?= $value['image'] ?>);">
                              <span class="icon">
                                 <!-- <div style="background-color:#999898; padding: 10px;">
                                    <?php if ($value['description'] != '') { ?>
                                       <p style="color:white;text-align: justify;"><?php echo $value['description']; ?></p>
                                    <?php } ?>
                                       <p class="btn btn-danger px-5" style="text-align: justify;">Enquire Now</p>
                                 </div> -->
                           </a>
                           <div class="desc">
                              <h4><?= $value['title'] ?> &nbsp; <?php if ($value['playstore_link'] != '') { ?> <a href="<?= $value['playstore_link'] ?>" title="Play Store Link" target="_blank"><img src="images/android.png" height="20px" width="20px"></a> <?php }
                                                                                                                                                                                                                                                   if ($value['appstore_link'] != '') { ?>&nbsp;<a href="<?= $value['appstore_link'] ?>" title="App Store Link" target="_blank"><img src="images/apple.png" height="20px" width="20px"></a> <?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                if ($value['adove_xd_link'] != '') { ?>&nbsp;<a href="<?= $value['adove_xd_link'] ?>" title="Adove XD Link" target="_blank"><img src="images/xd.png" height="20px" width="20px"></a><?php }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    if ($value['pdf'] != '') { ?>&nbsp;<a href="image/<?= $value['pdf'] ?>" title="PDF Link" target="_blank"><img src="images/pdf.png" height="20px" width="20px"></a><?php } ?></h4>
                           </div>
                        </div>
                     </div>
               <?php }
               }
               ?>
            </div>
         </div>
      </div>
      <!-- Modal -->


      <?php include_once("footer.php"); ?>
   </div>
   <div class="gototop js-top">
      <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
   </div>

</body>

</html>
