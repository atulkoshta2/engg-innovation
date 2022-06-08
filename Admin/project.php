<?php require_once('header.php');

$url = 'php/project?';

$id = $enc->denc1();

if ($id != '') {

    $link = $url . $enc->enc1('UPDATE');

    $fetch = $PROJECT->ID($id);

?>

    <div class="contents">

        <div class="atbd-page-content">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="breadcrumb-main">

                            <h4 class="text-capitalize breadcrumb-title">projects </h4>

                            <div class="breadcrumb-action justify-content-center flex-wrap">

                                <div class="action-btn">



                                    <a href="project" class="btn btn-sm btn-primary btn-add adddta">

                                        <i class="la la-plus"></i> Show projects</a>



                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-12">



                        <div class="card card-default ">



                            <div class="card-header">



                                <h6>Update project</h6>



                            </div>



                            <div class="card-body">



                                <div class="">
                                    <form id="form">
                                        <input type="hidden" name="id" value="<?= $id ?>">

                                        <?php $enc->token(); ?>

                                        <div class="form-basic">

                                            <div class="form-group mb-25">

                                                <label>Title<span>*</span></label>

                                                <input class="form-control form-control-lg" type="text" name="title" placeholder="Title OF The project" value="<?= $fetch['title'] ?>">

                                            </div>
                                            <div class="form-group mb-25">

                                                <label>Playstore Link<span></span></label>

                                                <input class="form-control form-control-lg" type="text" name="playstore_link" placeholder="Playstore Link" value="<?= $fetch['playstore_link'] ?>">

                                            </div>
                                            <div class="form-group mb-25">

                                                <label>Appstore Link<span></span></label>

                                                <input class="form-control form-control-lg" type="text" name="appstore_link" placeholder="appstore_link" value="<?= $fetch['appstore_link'] ?>">

                                            </div>
                                            <div class="form-group mb-25">

                                                <label>Adove xd Link<span></span></label>

                                                <input class="form-control form-control-lg" type="text" name="adove_xd_link" placeholder="adove_xd_link" value="<?= $fetch['adove_xd_link'] ?>">

                                            </div>
                                            <div class="form-group mb-25">
                                                <label>Image<span>*</span></label>
                                                <input class="form-control form-control-lg" type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                <img src="../image/<?= $fetch['image'] ?>" height="150px" width="150px" id="blah">
                                            </div>
                                            <div class="form-group mb-25">
                                                <label>pdf<span>*</span></label>
                                                <input class="form-control form-control-lg" type="file" name="pdf">

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

<?php } else { ?>

    <div class="contents" id="head" style="display: none">

        <div class="atbd-page-content">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="breadcrumb-main">

                            <h4 class="text-capitalize breadcrumb-title">projects </h4>

                            <div class="breadcrumb-action justify-content-center flex-wrap">

                                <div class="action-btn">

                                    <a href="#" class="btn btn-sm btn-primary btn-add adddta">

                                        <i class="la la-plus"></i> Show project</a>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-12">



                        <div class="card card-default ">



                            <div class="card-header">



                                <h6>Add project</h6>



                            </div>



                            <div class="card-body">



                                <div class="">

                                    <form id="form">

                                        <?php $enc->token(); ?>

                                        <div class="form-basic">

                                            <div class="form-group mb-25">

                                                <label>Title<span>*</span></label>

                                                <input class="form-control form-control-lg" type="text" name="title" placeholder="Title of the project">

                                            </div>
                                            <div class="form-group mb-25">

                                                <label>Description<span>*</span></label>

                                                <input class="form-control form-control-lg" type="text" name="description" placeholder="Description of the project">

                                            </div>
                                            <div class="form-group mb-25">

                                                <label>Playstore Link<span></span></label>

                                                <input class="form-control form-control-lg" type="text" name="playstore_link" placeholder="Playstore Link">

                                            </div>
                                            <div class="form-group mb-25">

                                                <label>Appstore Link<span></span></label>

                                                <input class="form-control form-control-lg" type="text" name="appstore_link" placeholder="appstore_link">

                                            </div>
                                            <div class="form-group mb-25">

                                                <label>Adove xd Link<span></span></label>

                                                <input class="form-control form-control-lg" type="text" name="adove_xd_link" placeholder="adove_xd_link">

                                            </div>
                                            <div class="form-group mb-25">
                                                <label>Image<span>*</span></label>
                                                <input class="form-control form-control-lg" type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                <img src="../image/<?= $fetch['image'] ?>" height="150px" width="150px" id="blah">
                                            </div>
                                            <div class="form-group mb-25">
                                                <label>Pdf<span>*</span></label>
                                                <input class="form-control form-control-lg" type="file" name="pdf">

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

                            <h4 class="text-capitalize breadcrumb-title">projects </h4>

                            <div class="breadcrumb-action justify-content-center flex-wrap">

                                <div class="action-btn">



                                    <a href="#" class="btn btn-sm btn-primary btn-add adddta">

                                        <i class="la la-plus"></i> Add project</a>



                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-lg-12 mb-30">



                        <div class="card">



                            <div class="card-header color-dark fw-500">



                                project List



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
                                                        <span class="projectDatatable-title">Play store</span>

                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title">App Store</span>
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title">Adove XD</span>
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title">PDF File</span>
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>

                                            </thead>

                                            <tbody>

                                                <?php $i = 1;

                                                foreach ($PROJECT->fetch() as $Value) {

                                                ?>

                                                    <tr id="remove<?= $Value['projectID'] ?>">

                                                        <td>

                                                            <?= $i++ ?>

                                                        </td>

                                                        <td>

                                                            <img src="../image/<?= $Value['image'] ?>" height="150p" width="150px">

                                                        </td>

                                                        <td>

                                                            <div class="projectDatatable-content">

                                                                <?= $Value['title'] ?>

                                                            </div>

                                                        </td>
                                                        <td>
                                                            <?php if ($Value['playstore_link']) { ?>
                                                                <div class="projectDatatable-content">
                                                                    <a href="<?= $Value['playstore_link'] ?>" target="_blank"><img src="img/android-logo-png-transparent.png" height="100px" width="100px"></a>
                                                                </div>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($Value['appstore_link']) { ?>
                                                                <div class="projectDatatable-content">
                                                                    <a href="<?= $Value['appstore_link'] ?>" target="_blank"><img src="img/343-3436965_google-play-icon-app-store-icon-ios-11.png" height="100px" width="100px"></a>
                                                                </div>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($Value['adove_xd_link']) { ?>
                                                                <div class="projectDatatable-content">
                                                                    <a href="<?= $Value['adove_xd_link'] ?>" target="_blank"><img src="img/Adobe_XD_CC_icon.svg.png" height="100px" width="100px"></a>
                                                                </div>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($Value['pdf']) { ?>
                                                                <div class="projectDatatable-content">
                                                                    <a href="../image/<?= $Value['pdf'] ?>" target="_blank"><img src="img/pdf.png" height="100px" width="100px"></a>
                                                                </div>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                                <li>
                                                                    <a href="project-detail?<?= $enc->enc1($Value['projectID']) ?>" class="action">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2c99ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="?<?= $enc->enc1($Value['projectID']) ?>" class="edit">
                                                                        <span data-feather="edit"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascrit:;" class="remove" onClick="removediv(<?= $Value['projectID'] ?>)">
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
}

require_once('footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function(ddds) {

        $("#form").on('submit', (function(ddds) {

            ddds.preventDefault();



            $.ajax({

                url: "<?= $link ?>",

                type: "POST",

                data: new FormData(this),

                contentType: false,

                cache: false,

                processData: false,

                success: function(data) {



                    $("#msz").html(data)

                },

                error: function() {}



            });

        }));

    });
</script>

<script>
    $(".adddta").click(function() {

        $("#head").toggle();

        $("#foot").toggle();

    });
</script>

<script>
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