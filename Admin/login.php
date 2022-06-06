<?php require_once('../common/config.php') ?>

<!doctype html>

<html lang="en" dir="ltr">

<head>



    <meta charset="UTF-8">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <title>Engineering Innovation</title>







    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">







    <!-- inject:css-->







    <link rel="stylesheet" href="css/plugin.min.css">







    <link rel="stylesheet" href="css/style.css">







    <!-- endinject -->







    <link rel="icon" type="image/png" sizes="16x16" href="../images/logo.png">

<style>
    .signUP-admin-left__content {
       
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0;
}

.logo-font{
    font-family: Vivaldi;
    color: #fff;
    font-size: 30px;
}
</style>

</head>







<body>



    <main class="main-content">







        <div class="signUP-admin">



            <div class="container-fluid">



                <div class="row justify-content-center">



                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">



                        <div class="signUP-admin-left signIn-admin-left position-relative">



                            <div class="signUP-overlay">



<!--                                <img class="svg signupTop" src="img/svg/signuptop.html" alt="img" />-->



                                <img class="svg signupBottom" src="img/svg/signupbottom.svg" alt="img" />



                            </div><!-- End: .signUP-overlay  -->



                            <div class="signUP-admin-left__content">



                                <div class="text-capitalize mb-md-30 mb-15 ">



                                    <!-- <a class="wh-36 bg-primary text-white radius-md mr-10 content-center" href="index.html">V</a>



                                    <span class="text-dark">akeel Sahab</span> -->
                                    <img class="" src="../images/logo.png" alt="img" height="200px" width="550px" />
                                    <br>
                                    <br>
                                    <!-- <p class="logo-font">Mukesh Jain & Co.</p> -->



                                </div>



<!--                                <h1>Bootstrap 4 React Web Application</h1>-->



                            </div><!-- End: .signUP-admin-left__content  -->



                            <div class="signUP-admin-left__img">



<!--                                <img class="img-fluid svg" src="" alt="img" >-->

                           </div><!-- End: .signUP-admin-left__img  -->



                        </div><!-- End: .signUP-admin-left  -->



                    </div><!-- End: .col-xl-4  -->



                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">



                        <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">



                            <!-- End: .signUp-topbar  -->



                            <div class="row justify-content-center">



                                <div class="col-xl-7 col-lg-8 col-md-12">



                                    <div class="edit-profile mt-md-25 mt-0">



                                        <div class="card border-0">



                                            <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">



                                                <div class="edit-profile__title">



                                                    <h6>Login to <span class="color-primary">Admin</span></h6>



                                                </div>



                                            </div>



                                            <div class="card-body">

												<form id="form">

													<?php $enc->token(); ?>



                                                <div class="edit-profile__body">



                                                    <div class="form-group mb-20">



                                                        <label for="username">Username or Email Address</label>



                                                        <input type="email" class="form-control" id="username" placeholder="Username" name="email">



                                                    </div>



                                                    <div class="form-group mb-15">



                                                        <label for="password-field">password</label>



                                                        <div class="position-relative">



                                                            <input id="password-field" type="password" class="form-control" name="password" value="secret">



                                                            <div class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></div>



                                                        </div>



                                                    </div>



                                                    



                                                    <div class="button-group d-flex pt-1 justify-content-md-start justify-content-center">



                                                        <button class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn ">



                                                            sign in



                                                        </button>



                                                    </div>



                                                </div>

												</form>

												<div id="msz"></div>



                                            </div><!-- End: .card-body -->



                                        </div><!-- End: .card -->



                                    </div><!-- End: .edit-profile -->



                                </div><!-- End: .col-xl-5 -->



                            </div>



                        </div><!-- End: .signUp-admin-right  -->



                    </div><!-- End: .col-xl-8  -->



                </div>



            </div>



        </div><!-- End: .signUP-admin  -->







    </main>



    <div id="overlayer">



        <span class="loader-overlay">



            <div class="atbd-spin-dots spin-lg">



                <span class="spin-dot badge-dot dot-primary"></span>



                <span class="spin-dot badge-dot dot-primary"></span>



                <span class="spin-dot badge-dot dot-primary"></span>



                <span class="spin-dot badge-dot dot-primary"></span>



            </div>



        </span>



    </div>







    <!-- inject:js-->







    <script src="js/plugins.min.js"></script>







    <script src="js/script.min.js"></script>

</body>

</html>

<script type="text/javascript">

$(document).ready(function(ddds){

$("#form").on('submit',(function(ddds){

ddds.preventDefault();



$.ajax({

url:"php/login?<?= $enc->enc1('LOGIN'); ?>",

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