<?php include_once("common/config.php"); ?>
<?php
$url = 'php/project?';

$id = $enc->denc1();
if ($id != '') {

    $link = $url . $enc->enc1('UPDATE');

    $detail = $PROJECT_DETAIL->fetch_where(['projectID' => $id]);
    $type = $PROJECT_TYPE->fetch_where(['projectID' => $id]);
    $review = $CLIENT_REVIEW->fetch_where(['projectID' => $id]);
} else {
    header('Location:project.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Engineering Innovations Research Lab Private Limited</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Engineering Innovations, a leader in engineering services, helps smart cities in creating and executing innovative solutions" />
        <meta name="keywords" content="Engineering Innovations, EI, EIRL, Engineering Innovations Research Lab, it solutions, engineering services" />
        <meta name="author" content="Engineering Innovations Research Lab Private Limited" />

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

        <script src="js/modernizr-2.6.2.min.js" type="61896e05032c486babc6961c-text/javascript"></script>

        
    </head>

    <style>
        
        .main {
            flex-direction: column;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }
        .hero {
            position: relative;
            padding-left: 5em   ;
            padding-top: 20px;
            max-height:550px;
            background: -webkit-gradient(linear,left top,right top,from(#0b6ba7),to(#96c15b));
            background: -o-linear-gradient(left,#0b6ba7 0,#96c15b 100%);
            background: linear-gradient(90deg,#0b6ba7,#96c15b);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50%;
        }
         .wrapper {
        position: relative;
        max-width: -webkit-calc(1200px + var(--padding-size)*2);
        max-width: calc(1200px + var(--padding-size)*2);
        margin: 0 auto;
        padding: 0 var(--padding-size);
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        z-index: 1;
        }

         .hero__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            max-width: 480px;
            padding: 105px 0 145px;
            z-index: 7;
        }
         .india .hero__content--title {
            margin-bottom: 20px;
            font-size: 50px;
            line-height: 55px;
            font-weight: 600;
            color: #fff;
        }

         .india .hero__content--text {
            margin-bottom: 40px;
            color: var(--india-typography-secondary);
            font-size: 24px;
            color: #fff;
        }
        .india .hero__content--btn:hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .india .btn--primary:hover {
            color: #fff !important;
            background: -o-linear-gradient(.15deg,#96c15b .1%,#0b6ba7 99.87%);
            background: linear-gradient(89.85deg,#96c15b .1%,#0b6ba7 99.87%);
        }
        .india .btn:active, .india .btn:focus, .india .btn:hover {
            text-decoration: none;
            outline: none;
        }
        .india .btn--primary {
            font-weight: 600;
            color: #fff!important;
            background: -o-linear-gradient(89.85deg,#96c15b .1%,#0b6ba7 99.87%);
            background: linear-gradient(.15deg,#96c15b .1%,#0b6ba7 99.87%);
            border: none;
            -webkit-transition: all .2s linear;
            -o-transition: all linear .2s;
            transition: all .2s linear;
        }
        .india .hero__content--btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            font-size:20px !important;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            color: #0b6ba7;
            -webkit-appearance: none;
            -webkit-box-shadow: 0 100px 80px rgb(2 52 69 / 25%), 0 42px 33px rgb(2 52 69 / 18%), 0 22px 18px rgb(2 52 69 / 15%), 0 12px 10px rgb(2 52 69 / 13%), 0 7px 5px rgb(2 52 69 / 10%), 0 3px 2px rgb(2 52 69 / 7%);
            box-shadow: 0 100px 80px rgb(2 52 69 / 25%), 0 42px 33px rgb(2 52 69 / 18%), 0 22px 18px rgb(2 52 69 / 15%), 0 12px 10px rgb(2 52 69 / 13%), 0 7px 5px rgb(2 52 69 / 10%), 0 3px 2px rgb(2 52 69 / 7%);
        }
        .container .font li a {
            font-size:16px;
            color:black;
            font-weight:bold;
        }
        .modal-sm {
            width: 400px !important;
        }
        .rounded {
            border-radius: 22px;
        }
    </style>
    <body>


    
    <div class="modal inmodal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
         <div class="modal-dialog modal-sm">
            <div class="modal-content loader-parent" style="background-color: #f5f5f5;">
               <div class="sk-spinner sk-spinner-double-bounce">
                  <div class="sk-double-bounce1"></div>
                  <div class="sk-double-bounce2"></div>
               </div>
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                     <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                  </button>
                  <h4 class="modal-title">Add User</h4>
               </div>
               <form role="form" id="enquiry" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                     <div class="row form-group">
                        <div class="col-md-12">
                           <input type="text" id="name" name="name" class="form-control" placeholder="Your name (optional)" >
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col-md-12">
                           <input type="email" id="email" name="email" class="form-control" placeholder="Email address (optional)" >
                        </div>
                     </div>
                     <div class="row form-group">
                     <div class="col-md-12">
                           <input type="text" id="mobile" minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" name="phone" class="form-control" placeholder="10 digit mobile no" required>
                        </div>
                     </div>
                     <div class="row form-group">
                        <div class="col-md-12">
                           <textarea id="message" name="message" cols="30" rows="4" class="form-control" placeholder="Detailed Enquiry (optional)" ></textarea>
                        </div>
                     </div>
                     <div class="form-group text-center india">
                        <button type="submit" class="btn btn--primary text-center">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5303 6.46967L15.5303 10.4697C15.6768 10.6161 15.75 10.8081 15.75 11C15.75 11.1017 15.7298 11.1987 15.6931 11.2871C15.6565 11.3755 15.6022 11.4584 15.5303 11.5303L11.5303 15.5303C11.2374 15.8232 10.7626 15.8232 10.4697 15.5303C10.1768 15.2374 10.1768 14.7626 10.4697 14.4697L13.1893 11.75H7C6.58579 11.75 6.25 11.4142 6.25 11C6.25 10.5858 6.58579 10.25 7 10.25H13.1893L10.4697 7.53033C10.1768 7.23744 10.1768 6.76256 10.4697 6.46967C10.7626 6.17678 11.2374 6.17678 11.5303 6.46967Z"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 11C0.25 5.06294 5.06294 0.25 11 0.25C16.9371 0.25 21.75 5.06294 21.75 11C21.75 16.9371 16.9371 21.75 11 21.75C5.06294 21.75 0.25 16.9371 0.25 11ZM11 1.75C5.89137 1.75 1.75 5.89137 1.75 11C1.75 16.1086 5.89137 20.25 11 20.25C16.1086 20.25 20.25 16.1086 20.25 11C20.25 5.89137 16.1086 1.75 11 1.75Z"></path>
                        </svg> &nbsp;

                        Book a demo
                        </button>
                        <button type="button" class="btn btn-white" data-dismiss="modal">
                           Close
                        </button>
                     </div>
                  </div>
                  <div class="modal-footer">
                    <p id="msg"></p>
                  </div>
               </form>
               
            </div>
         </div>
      </div>
        <!-- <div class="colorlib-loader"></div> -->
        <div id="page">
            <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="index.php"><img src="images/logo.png" width="200px"></a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1" style="margin-top:-18px">
                        <ul class="font">
                        <li><a href="mailto:support@eiindia.in" class="header-india__contacts--item"><i class="icon-envelope" style="font-size:16px;color:red" ></i> <span>support@eiindia.in</span></a></li>
                        <li><a href="tel:+919516702394" class="header-india__contacts--item"><i class="icon-phone" style="font-size:16px;color:red" ></i> <span>+91-951-670-2394</span></a></li>
                        
                        <li class="india"><a href="javascript:void(0)" onclick="showForm()" class="btn btn--primary rounded">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5303 6.46967L15.5303 10.4697C15.6768 10.6161 15.75 10.8081 15.75 11C15.75 11.1017 15.7298 11.1987 15.6931 11.2871C15.6565 11.3755 15.6022 11.4584 15.5303 11.5303L11.5303 15.5303C11.2374 15.8232 10.7626 15.8232 10.4697 15.5303C10.1768 15.2374 10.1768 14.7626 10.4697 14.4697L13.1893 11.75H7C6.58579 11.75 6.25 11.4142 6.25 11C6.25 10.5858 6.58579 10.25 7 10.25H13.1893L10.4697 7.53033C10.1768 7.23744 10.1768 6.76256 10.4697 6.46967C10.7626 6.17678 11.2374 6.17678 11.5303 6.46967Z"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 11C0.25 5.06294 5.06294 0.25 11 0.25C16.9371 0.25 21.75 5.06294 21.75 11C21.75 16.9371 16.9371 21.75 11 21.75C5.06294 21.75 0.25 16.9371 0.25 11ZM11 1.75C5.89137 1.75 1.75 5.89137 1.75 11C1.75 16.1086 5.89137 20.25 11 20.25C16.1086 20.25 20.25 16.1086 20.25 11C20.25 5.89137 16.1086 1.75 11 1.75Z"></path>
                            </svg> &nbsp;

                            Book a demo
                                </a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            </nav>
            <aside id="colorlib-hero">
                <div class="flexslider india">
                    <section class="hero">
                        <div class="container-fluid">
                        <div class="wrapper">
                            <div class="hero__content">
                                <h1 class="hero__content--title">
                                    Grow your business with Us</h1>
                                <div class="hero__content--text">
                                    One partner to support and develop your business                    </div>
                                <a href="javascript:void(0)" onclick="showForm()" class="btn btn--primary hero__content--btn rounded">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5303 6.46967L15.5303 10.4697C15.6768 10.6161 15.75 10.8081 15.75 11C15.75 11.1017 15.7298 11.1987 15.6931 11.2871C15.6565 11.3755 15.6022 11.4584 15.5303 11.5303L11.5303 15.5303C11.2374 15.8232 10.7626 15.8232 10.4697 15.5303C10.1768 15.2374 10.1768 14.7626 10.4697 14.4697L13.1893 11.75H7C6.58579 11.75 6.25 11.4142 6.25 11C6.25 10.5858 6.58579 10.25 7 10.25H13.1893L10.4697 7.53033C10.1768 7.23744 10.1768 6.76256 10.4697 6.46967C10.7626 6.17678 11.2374 6.17678 11.5303 6.46967Z"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 11C0.25 5.06294 5.06294 0.25 11 0.25C16.9371 0.25 21.75 5.06294 21.75 11C21.75 16.9371 16.9371 21.75 11 21.75C5.06294 21.75 0.25 16.9371 0.25 11ZM11 1.75C5.89137 1.75 1.75 5.89137 1.75 11C1.75 16.1086 5.89137 20.25 11 20.25C16.1086 20.25 20.25 16.1086 20.25 11C20.25 5.89137 16.1086 1.75 11 1.75Z"></path>
                                    </svg> &nbsp;

                                    Book a demo
                                </a>
                            </div>
                        </div>

                        <div class="hero__bg"></div>
                        </div>
                </div>
            </aside>
            <?php if (!empty($detail)) { ?>
            <div id="colorlib-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 tabulation animate-box">
                            <ul class="nav nav-tabs"> 
                                <?php  foreach ($detail as $key => $det) { ?>
                                        <li class="">
                                            <a data-toggle="tab" href="#plan<?php echo $det['project_detailID']?>"><i class="flaticon-sketch"></i> <?php echo $det['heading']; ?></a>
                                        </li>
                                        
                                    <?php }?>
                            </ul>
                            <div class="tab-content">
                                <?php if (!empty($detail)) { 
                                    foreach ($detail as $key => $det) {
                                        ?>
                                        <div id="plan<?php echo $det['project_detailID']; ?>" class="tab-pane fade in">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="services-img" style="background-image: url(image/<?php echo $det['image']; ?>);"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="services-desc"><?php echo $det['description']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if (!empty($type)) { ?>
            <div id="colorlib-services">
                <div class="container">
                    <div class="row">
                        <?php foreach ($type as $key => $ty) { ?>
                            <div class="col-md-4 text-center animate-box">
                                <div class="services">
                                    <span class="icon">
                                        <?php echo $ty['icon'] ?>
                                    </span>
                                    <div class="desc">
                                        <h3><?php echo $ty['heading'] ?></h3>
                                        <p><?php echo $ty['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if (!empty($review)) { ?>
            <div id="colorlib-testimony" style="background:#ededed; padding:2em 0 !important">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center animate-box">
                            <h2>Client Says:</h2>
                            <p>Here are few words our clients says about Engineering innovations..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="colorlib-testimony" style="padding:1em 0 !important">
                <div class="container">            
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="row animate-box">
                                <div class="owl-carousel1">
                                <?php foreach ($review as $key => $re) { ?>
                                    <div class="item">
                                        <div class="testimony-slide">
                                            <div class="testimony-wrap">
                                                <figure>
                                                    <img src="image/<?php echo $re['image'] ?>" alt="review client" / >
                                                </figure>
                                                <blockquote>
                                                    <span><?php echo $re['heading'] ?></span>
                                                    <p><?php echo $re['description'] ?></p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php include_once("footer.php"); ?>
        </div>
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
        </div>

      
    </body>
</html>


<script>

    // A $( document ).ready() block.
$( document ).ready(function() {
    $(".nav-tabs li").first().addClass("active");
    $(".tab-content .tab-pane").first().addClass("active");
});
</script>  

<?php 
$link1 = 'php/contact?' . $enc->enc1('ENQUIRY');
?>

<script>
   function showForm() {
      $("#name, #email, #mobile, #message").val("");
      $("#msg").html("");
      $(".modal-title").html("Book A Demo");
      $("#myModal").modal("show");
   }

   $(document).ready(function(ddds) {

      $("#enquiry").on('submit', (function(ddds) {
          ddds.preventDefault();
         $.ajax({
            url: "<?= $link1 ?>",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
               $("#msg").html(data);
               setTimeout(
                  function(){ $('#myModal').modal('hide'); 
               }, 4000);

            },

            error: function(error) {
               $("#msg").html(error);
            }
         });

      }));

   });


function IsNumeric(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>