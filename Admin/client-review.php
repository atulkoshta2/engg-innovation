<?php require_once('header.php');

$url = 'php/client-review?';

$id = $enc->denc1();


if ($id != '') {
} else {
    echo "<script>window.location.href='project.php';</script>";
}

?>


<div class="modal inmodal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content loader-parent">
            <div class="sk-spinner sk-spinner-double-bounce">
                <div class="sk-double-bounce1"></div>
                <div class="sk-double-bounce2"></div>
            </div>
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
            </div>
            <form role="form" id="myForm" method="post" onsubmit="event.preventDefault(); create_client_review();" enctype="multipart/form-data">
                <div class="modal-body">
                <?php $enc->token(); ?>
                    <div class="form-group">
                    <input type="hidden" name="projectID" value="<?= $id ?>">
                        <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter heading" autocomplete="off" required />
                    </div>
                    <div class="form-group">
                        <label for="image_file">Upload Image</label>
                        <input type="file" class="form-control-file" id="image_file" name="image" accept="image/png, image/jpg, image/jpeg" />
                    </div>
                    <div class="form-group">
                    <textarea name="description"class="editor1" placeholder="Enter Description" id="editor1" rows="10" cols="80"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <div id="msg"></div>
                </div>
            </form>
        </div>
    </div>
</div>

    <div class="contents" id="foot">
        <div class="atbd-page-content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <h5 class="text-capitalize">
                            <a href="project-detail?<?php echo $enc->enc1($id); ?>" class="btn btn-outline-secondary btn-sm"> &#9664; back </a>
                        </h5>
                        <div class="breadcrumb-main">


                            <h4 class="text-capitalize breadcrumb-title">Review </h4>

                            <div class="breadcrumb-action justify-content-center flex-wrap">

                                <div class="action-btn">
                                <?php if(count($CLIENT_REVIEW->fetch_where(['projectID' => $id]))  <= 12) { ?> 
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-add" onclick="add_client_review();">
                                        <i class="la la-plus"></i> Add Detail</a>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-30">
                        <div class="card">
                            <div class="card-header color-dark fw-500">
                                Review List
                            </div>
                            <div class="card-body">
                                <div class="projectDatatable global-shadow border-0 bg-white w-100">
                                    <div class="table-responsive table-sm">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                                <tr class="projectDatatable-header">
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        Image
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title">Title</span>
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title">Description</span>
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;

                                                foreach ($CLIENT_REVIEW->fetch_where(['projectID' => $id]) as $Value) {

                                                ?>

                                                    <tr id="remove<?= $Value['client_reviewID'] ?>">

                                                        <td>

                                                            <?= $i++ ?>

                                                        </td>

                                                        <td style="width:15%;word-break: break-word;">

                                                            <img src="../image/<?= $Value['image'] ?>" height="100px" width="100px">

                                                        </td>

                                                        <td style="width:25%;word-break: break-word;">
                                                            <div class="projectDatatable-content">
                                                                <?= $Value['heading'] ?>
                                                            </div>
                                                        </td>
                                                        <td style="width:40%;word-break: break-word;">
                                                            <div class="projectDatatable-content">
                                                            <?= $Value['description'] ?>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                                <li>
                                                                    <a href="client-review-edit?<?= $enc->enc1($Value['client_reviewID']) ?>" class="edit">
                                                                        <span data-feather="edit"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="remove" onClick="removediv(<?= $Value['client_reviewID'] ?>)">
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

    $link = $url . $enc->enc1('ADD');
require_once('footer.php'); ?>

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
function add_client_review() {
    $("#heading, #image_file").val("");
    $(".modal-title").html("Add Detail");
    CKEDITOR.replace('editor1');
    $("#myModal").modal("show");
}

function create_client_review(e) {
    var form = new FormData(document.getElementById('myForm'));
    //append files
    var file = document.getElementById('image_file').files[0];
    if (file) {   
        form.append('image', file);
    }
    desc = CKEDITOR.instances['editor1'].getData();
    form.append('description', desc);
    
    $.ajax({
        url: "<?= $url . $enc->enc1('ADD'); ?>",
        type: "POST",
        data: form,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            $('#msg').html(data);
            window.setTimeout(function (){
                window.location.reload();
            }, 2000);
        },
        error: function(error) {
            alert(error);
        }
    });
}

    function removediv(id) {
        var deltoken = '<?= $enc->deltoken() ?>';
        if (confirm('Are Your Sure To Delete ??') == true)
        {
            $.post('<?= $url . $enc->enc1('DELETETICETK') ?>', {
                id: id,
                deltoken: deltoken
            }, function(data) {
                if (data == 1)
                {
                    $("#remove" + id).remove();
                }
            });
        }

    }
</script>

<Script>
    function changestatus(id)

    {

        if (confirm('Are You Sure Approve This project !') == true)

        {

            $.post('php/other?<?= $enc->enc1('projectSTATUS') ?>', {
                id: id
            }, function(data) {

                $("#tablebtn" + id).html(data);

            });

        }

    }


</Script>