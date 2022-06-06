<?php require_once('header.php') ?>

        <div class="contents">

<h3> Engineering Innovation</h3>
            <div class="container-fluid" style="display:block ">
                <div class="social-dash-wrap">
                    <div class="row">
                        <div class="col-lg-12 mt-25">
                            <div class="social-overview-wrap">
                                <div class="card border-0">
                                    <div class="card-header">
                                        <h6>Portal Overview</h6>
                                    </div>
                                  <!-- <?php if($admindata['type']==0){ ?>
                                    <div class="card-body">
                                        <ul class="social-overview" style="justify-content: unset !important;">
                                            <li>
                                                <div class="">
                                                    <span class="">Total User</span>
                                                </div>
                                                <h3><?php echo  $USER->count();  ?></h3>
                                            </li>
                                            <li>
                                                <div class="">
                                                    <span class="">Total Report</span>
                                                </div>
                                                <h3><?php echo  $INVOICE->count();  ?></h3>
                                            </li>
                                            <li>
                                                <div class="">
                                                    <span class="">Total Purchase</span>
                                                </div>
                                                <h3><?php echo  $INVOICE->count(['type'=>1]);  ?></h3>
                                            </li>
                                            <li>
                                                <div class="">
                                                    <span class="">Total Sell</span>
                                                </div>
                                                <h3><?php echo  $INVOICE->count(['type'=>2]);  ?></h3>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php }else{ ?>
                                        <div class="card-body">
                                        <ul class="social-overview" style="justify-content: unset !important;">
                                            <li>
                                                <div class="">
                                                    <span class="">Total User</span>
                                                </div>
                                                <h3><?php 
                                                  $idd=$web->session_get('adminID');
                                                  $Valuess=$ASSIGN_CUSTOMER->fa_q("SELECT * FROM `user` WHERE userID IN(SELECT userID FROM `assign_customer` WHERE adminID='$idd')");
                                                echo count($Valuess);  ?></h3>
                                            </li>
                                            <li>
                                                <div class="">
                                                    <span class="">Total Report</span>
                                                </div>
                                                <h3><?php 
                                                  $Valuess=$INVOICE->fa_q("SELECT * FROM `invoice` WHERE userID IN(SELECT userID FROM `assign_customer` WHERE adminID='$idd')");
                                                echo  count($Valuess);  ?></h3>
                                            </li>
                                            <li>
                                                <div class="">
                                                    <span class="">Total Purchase</span>
                                                </div>
                                                <h3><?php 
                                                $Valuess=$INVOICE->fa_q("SELECT * FROM `invoice` WHERE userID IN(SELECT userID FROM `assign_customer` WHERE adminID='$idd') AND `type`=1 ");
                                                echo count($Valuess);  ?></h3> 
                                            </li>
                                            <li>
                                                <div class="">
                                                    <span class="">Total Sell</span>
                                                </div>
                                                <h3><?php 
                                                 $Valuess=$INVOICE->fa_q("SELECT * FROM `invoice` WHERE userID IN(SELECT userID FROM `assign_customer` WHERE adminID='$idd') AND `type`=2 ");
                                                echo  count($Valuess);  ?></h3>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php } ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require_once('footer.php') ?>