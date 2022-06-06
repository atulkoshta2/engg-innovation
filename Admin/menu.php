<?php require_once('header.php');

 $web->permission('menu');

$url='php/menu?';

$id=$enc->denc1();

if($id!=''){ 

$link=$url.$enc->enc1('UPDATE');

$fetch=$MENU->ID($id);

?>

<div class="contents">

            <div class="atbd-page-content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="breadcrumb-main">

                                <h4 class="text-capitalize breadcrumb-name">menus </h4>

                                <div class="breadcrumb-action justify-content-center flex-wrap">

                                    <div class="action-btn">

                                        <a href="menu" class="btn btn-sm btn-primary btn-add adddta">

                                            <i class="la la-plus"></i> Show menu</a>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-12">



                            <div class="card card-default ">



                                <div class="card-header">



                                    <h6>Update menu</h6>



                                </div>



                                <div class="card-body">



                                    <div class="">







                                        <form id="form">

											<?php $enc->token(); ?>

											<input type="hidden" name="id" value="<?=$id?>">



                                            <div class="form-basic">



                                                <div class="form-group mb-25">

                                                    <label>name<span>*</span></label>

                                                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Name OF The menu" value="<?=$fetch['name'] ?>">

                                                </div>

												 <div class="form-group mb-25">

                                                    <label>Link<span>*</span></label>

                                                    <input class="form-control form-control-lg" type="text" name="link" placeholder="Link OF The menu" value="<?=$fetch['link'] ?>">

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

                                <h4 class="text-capitalize breadcrumb-name">menus </h4>

                                <div class="breadcrumb-action justify-content-center flex-wrap">

                                    <div class="action-btn">

                                        <a href="#" class="btn btn-sm btn-primary btn-add adddta">

                                            <i class="la la-plus"></i> Show menu</a>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-12">



                            <div class="card card-default ">



                                <div class="card-header">



                                    <h6>Add menu</h6>



                                </div>



                                <div class="card-body">



                                    <div class="">







                                        <form id="form">

											<?php $enc->token(); ?>



                                            <div class="form-basic">



                                                <div class="form-group mb-25">

                                                    <label>name<span>*</span></label>

                                                    <input class="form-control form-control-lg" type="text" name="name" placeholder="name OF The menu">

                                                </div>

												<div class="form-group mb-25">

                                                    <label>Link<span>*</span></label>

                                                    <input class="form-control form-control-lg" type="text" name="link" placeholder="Link OF The menu">

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

                                <h4 class="text-capitalize breadcrumb-name">menus </h4>

                                <div class="breadcrumb-action justify-content-center flex-wrap">

                                    <div class="action-btn">

                                        <a href="#" class="btn btn-sm btn-primary btn-add adddta">

                                            <i class="la la-plus"></i> Add menu</a>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-12 mb-30">



                        <div class="card">



                            <div class="card-header color-dark fw-500">



                                Menu List



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

                                                        <span class="userDatatable-name">name</span>

                                                    </th>

													 <th>

                                                        <span class="userDatatable-name">link</span>

                                                    </th>

                                                    <th>

                                                        <span class="userDatatable-name float-right">action</span>

                                                    </th>

                                                </tr>

                                            </thead>

                                            <tbody>

												<?php $i=1; foreach($MENU->fetch() as $Value){ ?>

                                                <tr id="remove<?=$Value['menuID']?>">

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

															<?=$Value['link'] ?>

                                                        </div>

                                                    </td>

                                                    <td>

                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">

                                                            <li>

                                                                <a href="?<?=$enc->enc1($Value['menuID']) ?>" class="edit">

                                                                    <span data-feather="edit"></span>

																</a>

                                                            </li>

                                                            <li>

                                                                <a href="javascrit:;" class="remove" onClick="removediv(<?=$Value['menuID']?>)">

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