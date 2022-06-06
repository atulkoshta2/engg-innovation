<?php require_once('header.php');?>
<div class="contents" id="foot">

            <div class="atbd-page-content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="breadcrumb-main">

                                <h4 class="text-capitalize breadcrumb-title">Contact </h4>

                                <div class="breadcrumb-action justify-content-center flex-wrap">

                                    <div class="action-btn">



                                        <a href="#" class="btn btn-sm btn-primary btn-add adddta">

                                            <i class="la la-plus"></i> Add Contact</a>



                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-12 mb-30">



                        <div class="card">



                            <div class="card-header color-dark fw-500">



                                Contact List



                            </div>



                            <div class="card-body">







                                <div class="ContactDatatable global-shadow border-0 bg-white w-100">



                                    <div class="table-responsive">



                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                                <tr class="ContactDatatable-header">
                                                    <th>
														#
                                                    </th>
                                                    <th>
                                                       <span class="ContactDatatable-title">First Name</span>
                                                    </th>
                                                    <th>
                                                         <span class="ContactDatatable-title">Last Name</span>
                                                    </th>
                                                    <th>
                                                        <span class="ContactDatatable-title">Mobile</span>
                                                    </th>
                                                    <th>
                                                        <span class="ContactDatatable-title">Email</span>
                                                    </th>
                                                    <th>
                                                        <span class="ContactDatatable-title">Subject</span>
                                                    </th>
                                                    <th>
                                                         <span class="ContactDatatable-title">Message</span>
                                                    </th>
                                                    <th>
                                                         <span class="ContactDatatable-title">Date / Time</span>
                                                    </th>
                                                    <th>
                                                        <span class="ContactDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>

                                            </thead>

                                            <tbody>

												<?php $i=1; 
                                                 
                                                foreach($CONTACT->fetch() as $Value){ 

												?>

                                                <tr id="remove<?=$Value['contactID']?>">

                                                    <td>

														<?=$i++ ?>

                                                    </td>

													<td>

														<?=$Value['fname'] ?>

                                                    </td>

													 <td>

                                                        <div class="ContactDatatable-content">

															<?=$Value['lname'] ?>

                                                        </div>

                                                    </td>
                                                    <td>
                                                  
                                                        <div class="ContactDatatable-content">
                                                        <?=$Value['phone'] ?>
                                                        </div>
                                                       
                                                    </td>
                                                     <td>
                                                  
                                                        <div class="ContactDatatable-content">
                                                        <?=$Value['email'] ?>
                                                        </div>
                                                       
                                                    </td>
                                                     <td>
                                                  
                                                        <div class="ContactDatatable-content">
                                                        <?=$Value['subject'] ?>
                                                        </div>
                                                       
                                                    </td>
                                                     <td>
                                                  
                                                        <div class="ContactDatatable-content">
                                                        <?=$Value['message'] ?>
                                                        </div>
                                                       
                                                    </td>
                                                    <td>
                                                  
                                                        <div class="ContactDatatable-content">
                                                        <?=date("d-m-Y h:i A",$Value['strtotime']) ?>
                                                        </div>
                                                       
                                                    </td>
                                                   
                                                   
                                                    <!-- <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="?<?=$enc->enc1($Value['ContactID']) ?>" class="edit">
                                                                    <span data-feather="edit"></span>
																</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascrit:;" class="remove" onClick="removediv(<?=$Value['ContactID']?>)">
                                                                    <span data-feather="trash-2"></span></a>
                                                            </li>
                                                        </ul>
                                                    </td> -->
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

<Script>

function changestatus(id)

	{

		if(confirm('Are You Sure Approve This Contact !')==true)

			{

				$.post('php/other?<?=$enc->enc1('ContactTATUS')?>',{id:id},function(data){

					$("#tablebtn"+id).html(data);

				});

			}

	}

</Script>