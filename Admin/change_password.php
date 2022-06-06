<?php require_once('header.php');
$url='php/admin?';
$id=$enc->denc1();
?>
<div class="contents">
            <div class="atbd-page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-name">admins </h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">
                                        <a href="admin" class="btn btn-sm btn-primary btn-add adddta">
                                            <i class="la la-plus"></i> Show admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">

                            <div class="card card-default ">

                                <div class="card-header">

                                    <h6>Update admin</h6>

                                </div>

                                <div class="card-body">

                                    <div class="">



                                        <form id="form">
											<?php $enc->token(); ?>
											<input type="hidden" name="id" value="<?=$id?>">

                                            <div class="form-basic">
												 <div class="form-group mb-25">
                                                    <label>Password<span>*</span></label>
                                                    <input class="form-control form-control-lg" type="text" name="password" placeholder="Password OF The Admin">
                                                </div>
												 <div class="form-group mb-25">
                                                    <label>Confirm Password<span>*</span></label>
                                                    <input class="form-control form-control-lg" type="text" name="cpassword" placeholder="Confirm Password OF The Admin">
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
$link=$url.$enc->enc1('PROFILECHANGE');
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