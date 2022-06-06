<?php require_once('header.php');

$url='php/admin?';

$id=$enc->denc1();

if($id!=''){ 

$link=$url.$enc->enc1('UPDATE');

$fetch=$ADMIN->ID($id);

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

                                                    <label>Type<span>*</span></label>

                                                   <select name="type" class="form-control">
                                                       <option value="0" <?=$fetch['type']==0?"selected":"" ?>>Select Type</option>
                                                       <option value="1" <?=$fetch['type']==1?"selected":"" ?>>Employee</option>
                                                   </select>

                                                </div>
                                                <div class="form-group mb-25">

                                                    <label>Name<span>*</span></label>

                                                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Name OF The admin"  value="<?=$fetch['name'] ?>" >

                                                </div>



                                                <div class="form-group mb-25">

                                                    <label>username<span>*</span></label>

                                                    <input class="form-control form-control-lg" type="text" name="username" placeholder="User Name OF The admin" value="<?=$fetch['username'] ?>">

                                                </div>

												 <div class="form-group mb-25">

                                                    <label>Password<span>*</span></label>

                                                    <input class="form-control form-control-lg" type="text" name="password" placeholder="Password OF The Admin">

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

<?php }else{ ?>

<div class="contents" id="head" style="display: none">

            <div class="atbd-page-content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="breadcrumb-main">

                                <h4 class="text-capitalize breadcrumb-name">admins </h4>

                                <div class="breadcrumb-action justify-content-center flex-wrap">

                                    <div class="action-btn">

                                        <a href="#" class="btn btn-sm btn-primary btn-add adddta">

                                            <i class="la la-plus"></i> Show admin</a>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-12">



                            <div class="card card-default ">



                                <div class="card-header">



                                    <h6>Add admin</h6>



                                </div>



                                <div class="card-body">



                                    <div class="">







                                        <form id="form">

											<?php $enc->token(); ?>



                                            <div class="form-basic">
                                                <div class="form-group mb-25">

                                                    <label>Type<span>*</span></label>

                                                    <select name="type" class="form-control">
                                                    <option value="0" >Select Type</option>
                                                    <option value="1" >Employee</option>
                                                    </select>

                                                </div>
                                                <div class="form-group mb-25">

                                                    <label>Name<span>*</span></label>

                                                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Name OF The admin" >

                                                </div>

											<div class="form-group mb-25">

                                                    <label>username<span>*</span></label>

                                                    <input class="form-control form-control-lg" type="text" name="username" placeholder="User Name OF The admin" >

                                                </div>

												 <div class="form-group mb-25">

                                                    <label>Password<span>*</span></label>

                                                    <input class="form-control form-control-lg" type="text" name="password" placeholder="Password OF The Admin" >

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

<div class="contents" id="foot">

            <div class="atbd-page-content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="breadcrumb-main">

                                <h4 class="text-capitalize breadcrumb-name">admins </h4>

                                <div class="breadcrumb-action justify-content-center flex-wrap">

                                    <div class="action-btn">

                                        <a href="#" class="btn btn-sm btn-primary btn-add adddta">

                                            <i class="la la-plus"></i> Add admin</a>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-12 mb-30">



                        <div class="card">



                            <div class="card-header color-dark fw-500">



                                User List



                            </div>



                            <div class="card-body">







                                <div class="userDatatable global-shadow border-0 bg-white w-100">



                                    <div class="table-responsive">



                                        <table class="table mb-0 table-borderless">



                                            <thead>



                                                <tr class="userDatatable-header">



                                                    <th>

														#

                                                    </th>

                                                    <th>

                                                        <span class="userDatatable-name">Name</span>

                                                    </th>
                                                    <th>

                                                        <span class="userDatatable-name">User name</span>

                                                    </th>

													<th>

                                                        <span class="userDatatable-name">Type</span>

                                                    </th>
                                                    <th>

                                                        <span class="userDatatable-name">Last Login</span>

                                                    </th>

													<th>

                                                        <span class="userDatatable-name">Assign Menu</span>

                                                    </th>
                                                    <th>

                                                         <span class="userDatatable-name">Assign Customer</span>

                                                    </th>

                                                    <th>

                                                        <span class="userDatatable-name float-right">action</span>

                                                    </th>

                                                </tr>

                                            </thead>

                                            <tbody>

												<?php $i=1; foreach($ADMIN->all("role=0") as $Value){ ?>

                                                <tr id="remove<?=$Value['adminID']?>">

                                                    <td>

														<?=$i++ ?>

                                                    </td>

                                                    <td>

                                                        <div class="userDatatable-content">

															<?=$Value['name'] ?>

                                                        </div>

                                                    </td>
                                                     <td>

                                                        <div class="userDatatable-content">

															<?=$Value['username'] ?>

                                                        </div>

                                                    </td>
                                                    <td>

                                                        <div class="userDatatable-content">

                                                        <?=$Value['type']==1?"Employee":""; ?>

                                                        </div>

                                                    </td>

													 <td>

                                                        <div class="userDatatable-content">

															<?=date('d-m-Y h:i A',$Value['last_login']) ?>

                                                        </div>

                                                    </td>

													 <td>

                                                        <div class="userDatatable-content">

														<a href="admin_menu?<?=$enc->enc1($Value['adminID'])?>" class="btn btn-info">Assign Menu</a>

                                                        </div>

                                                    </td>
                                                     <td>

                                                        <div class="userDatatable-content">

														<a href="assign_customer?<?=$enc->enc1($Value['adminID'])?>" class="btn btn-info">Assign Customer</a>

                                                        </div>

                                                    </td>

                                                    <td>

                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">

                                                            <li>

                                                                <a href="?<?=$enc->enc1($Value['adminID']) ?>" class="edit">

                                                                    <span data-feather="edit"></span>

																</a>

                                                            </li>

                                                            <li>

                                                                <a href="javascrit:;" class="remove" onClick="removediv(<?=$Value['adminID']?>)">

                                                                    <span data-feather="trash-2"></span></a>

                                                            </li>

                                                        </ul>

                                                    </td>

                                                </tr>

												<?php } ?>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                   </div>

                </div>

            </div>

        </div>

<?php 

$link=$url.$enc->enc1('ADD');

}

require_once('footer.php'); ?>

<SCRIPT type="text/javascript">

    function ValidateFileUpload(id) {

        var fuData = document.getElementById(id);

        var FileUploadPath = fuData.value;

        if (FileUploadPath == '') {

            swal("Please upload an image");

        } else {

            var Extension = FileUploadPath.substring(

                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

					if (Extension == "png" || Extension == "bmp"

                    || Extension == "jpeg" || Extension == "jpg") {

       		$(".imageborder").remove();	

            for (i = 0; i < fuData.files.length; i++) {

                var reader = new FileReader();



                reader.onload = function(event) {

					var a='<div class="col-sm-3 imageborder"><img src="'+event.target.result+'" height="150px"></div>';

					$("#imaesdata").append(a);

                    //$($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);

                }



                reader.readAsDataURL(fuData.files[i]);

            }

			return true;

            } 



//The file upload is NOT an image

else {

                swal("Photo only allows file types of PNG, JPG, JPEG and BMP. ");

				return false;

            }

        }

    }

</SCRIPT>

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



<script>

function removediv(id)

	{

		var deltoken='<?=$enc->deltoken()?>';

		if(confirm('Are Your Sure To Delete ??')==true)

			{

				$.post('<?=$url.$enc->enc1('DELETETICETK')?>',{id:id,deltoken:deltoken},function(data){

					if(data==1)

						{

							$("#remove"+id).remove();

						}

				});

			}

	}

</script>