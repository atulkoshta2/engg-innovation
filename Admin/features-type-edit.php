<?php require_once('header.php');

$url = 'php/project-type?';

$id = $enc->denc1();
if ($id != '') {
    $link = $url . $enc->enc1('UPDATE');
    $fetch = $PROJECT_TYPE->ID($id);
} else {
    echo "<script>window.location.href='project.php';</script>";
}

?>

?>
    <div class="contents" id="foot">
        <div class="atbd-page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="modal-content loader-parent">
                        <div class="sk-spinner sk-spinner-double-bounce">
                                <div class="sk-double-bounce1"></div>
                                <div class="sk-double-bounce2"></div>
                            </div>
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Features Type</h4>
                                <h5 class="text-capitalize float-right">
                                    <a href="features-type?<?php echo $enc->enc1($fetch['projectID']); ?>" class="btn btn-outline-secondary btn-sm"> &#9664; back </a>
                                </h5>
                            </div>
                            <form role="form" id="editForm" method="post" onsubmit="event.preventDefault(); edit_project_type('<?= $enc->enc1($fetch['projectID']) ?>');" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="image_file">Upload Icon Html</label>
                                        <input type="text" class="form-control" id="icon" value='<?php echo $fetch['icon'] ?>' name="icon" placeholder="Enter Icon" autocomplete="off" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <?php $enc->token(); ?>
                                        <label for="heading">Heading</label>
                                        <input type="text" class="form-control" id="heading" value="<?php echo $fetch['heading'] ?>" name="heading" placeholder="Enter Heading" autocomplete="off" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <br>
                                        <textarea name="description" class="description" id="description" rows="10" cols="80"><?php echo $fetch['description'] ?></textarea>
                                    </div>
                                </div>
                                <div class="container">
                                    <a class="float-right mb-5 btn btn-secondary" type="button" href="features-type?<?= $enc->enc1($fetch['projectID']) ?>" >
                                        Close
                                    </a>
                                    <button type="submit" class="btn btn-primary float-right mx-5">Save</button>
                                    <div id="msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-30">
                        <div class="card">
                            <div class="card-header color-dark fw-500">
                                Features Type List
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

                                                foreach ($PROJECT_TYPE->fetch() as $Value) {

                                                ?>

                                                    <tr id="remove<?= $Value['project_typeID'] ?>">

                                                        <td>

                                                            <?= $i++ ?>

                                                        </td>

                                                        <td style="width:15%;word-break: break-word;">

                                                        <?php echo  $Value['icon'] ?>

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
                                                                    <a href="features-type-edit?<?= $enc->enc1($Value['project_typeID']) ?>" class="edit">
                                                                        <span data-feather="edit"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascrit:;" class="remove" onClick="removediv(<?= $Value['project_typeID'] ?>)">
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
require_once('footer.php'); ?>

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
function edit_project_type(id) {
    var form = new FormData(document.getElementById('editForm'));
    $.ajax({
        url: "<?= $url . $enc->enc1('UPDATE'); ?>",
        type: "POST",
        data: form,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            $('#msg').html(data);
            window.setTimeout(function (){
                window.location.href="features-type?"+id;
            }, 2000);
        },
        error: function(error) {
            alert(error);
        }
    });
}

    function removediv(id)

    {

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