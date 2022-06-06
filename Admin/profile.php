<?php require_once('header.php');
$fetch=$ADMIN->ID($web->session_get('adminID'));

?>

<div class="contents">

            <div class="atbd-page-content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="breadcrumb-main">

                                <h4 class="text-capitalize breadcrumb-name">My Profile </h4>

                                <div class="breadcrumb-action justify-content-center flex-wrap">

                                    <div class="action-btn">
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="card card-default ">
                                <div class="card-header">
                                    <h6>Update Profile</h6>
                                    <?php //print_r($fetch) ?>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <form id="form">
											<?php $enc->token(); ?>
                                            <div class="form-basic">
                                                 <div class="form-group mb-25">
                                                    <label>Name<span>*</span></label>
                                                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Name" value="<?php echo $fetch['name'] ?>">
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label>Mobile<span>*</span></label>
                                                    <input class="form-control form-control-lg" type="text" name="mobile" placeholder="mobile" value="<?=$fetch['mobile'] ?>">
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label>Email<span>*</span></label>
                                                    <input class="form-control form-control-lg" type="text" name="username" placeholder="Email" value="<?=$fetch['username'] ?>">
                                                </div>
												 <div class="form-group mb-25">
                                                    <label>Aadhar<span>*</span></label>
                                                    <input class="form-control form-control-lg" type="number" name="aadhar" placeholder="Aadhar Number" value="<?=$fetch['aadhar'] ?>">
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label>PAN<span>*</span></label>
                                                    <input class="form-control form-control-lg" type="text" name="pan" placeholder="Pan" value="<?=$fetch['pan'] ?>">
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label>Password<span>*</span></label>
                                                    <input class="form-control form-control-lg" type="text" name="password" placeholder="Password" >
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label>Image<span>*</span></label>
                                                    <input class="form-control form-control-lg" type="file" name="image"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                    <img src="../image/<?=$fetch['image']?>" height="150px" width="150px" id="blah">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <button type="submit" class="btn btn-lg btn-primary btn-submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
										<div id="msz"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
$url='php/profile?';
$link=$url.$enc->enc1('UPDATE');
require_once('footer.php'); ?>
<script type="text/javascript">
$(document).ready(function(ddds){
$("#form").on('submit',(function(ddds){
ddds.preventDefault();
$.ajax({
url:"<?=$link ?>",
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

<script>

$(".adddta").click(function(){

	$("#head").toggle();

	$("#foot").toggle();

});

</script>