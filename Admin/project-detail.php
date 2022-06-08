<?php require_once('header.php');

$url = 'php/project?';

$id = $enc->denc1();
if ($id != '') {

    $link = $url . $enc->enc1('UPDATE');

    $fetch = $PROJECT->ID($id);
}

?>

    <div class="contents">
        <h5 class="text-capitalize">
            <a href="project" class="btn btn-outline-secondary btn-sm"> &#9664; back </a>
        </h5>
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">projects</h4>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col">
                                <div class="card card-default ">
                                    <a href="features-detail.php?<?php echo $enc->enc1($id); ?>">
                                        <div class="card-header">
                                            <h6>Features Detail</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-default ">
                                    <a href="features-type.php?<?php echo $enc->enc1($id); ?>">
                                        <div class="card-header">
                                            <h6>Features Type</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-default ">
                                    <a href="client-review.php?<?php echo $enc->enc1($id); ?>">
                                        <div class="card-header">
                                            <h6>Review</h6>
                                        </div>
                                    </a>
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