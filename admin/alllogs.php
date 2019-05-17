
<?php include("layout/header.php") ?>

<?php


    $table = "logs";
    $result_set = query($table);


    ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small>Activity Logs</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Logs</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">


<div class="row">
    <div class="col-md-12">

        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Latest Orders</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>Pick-Up ID</th>
                            <th>Item</th>
                            <th>User</th>
                            <th>Pick-Up Location</th>
                            <th>Delivery Location </th>
                            <th>Request Time</th>
                            <th>Status</th>
                            <th>Rider</th>
                            <th>Delivered Time </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($rider = mysqli_fetch_assoc($result_set)) { ?>

                            <tr>
                                <td><?php echo $rider["id"];?></td>
                                <td><?php echo $rider["item"];?></td>
                                <?php $user = mysqli_fetch_assoc(get_by_id("users",$rider["user_id"] ));
                                     if($rider["rider_id"]){ $riders = mysqli_fetch_assoc(get_by_id("riders",$rider["rider_id"]));}
                                ?>
                                <td><?php if($rider["user_id"]==0){echo "Anonymos";}else{ echo $user["name"];}?></td>

                                <td></td>
                                <td></td>
                                <td><?php echo $rider["req_time"];?></td>
                                <?php $div_time = $rider["div_time"] ; ?>
                                <?php if($rider["status"] == "delivered"){
                                    echo " <td><span class=\"label label-success\">Delivered</span></td>"; ?>
                                <td><?php echo ' <img src=" data:image/jpeg;base64,'.base64_encode($riders["img"]).' " class="img-circle" alt="User Image" style="width: 30px; height: 30px;">' ;  echo $riders["fname"]." ".$riders["lname"];?> </td>
                                    <td><?php echo $div_time;?></td>
                                <?php
                                }elseif($rider["status"] == "delivering"){
                                    echo " <td><span class=\"label label-info\">Delivering</span></td>"; ?>
                                    <td><?php echo ' <img src=" data:image/jpeg;base64,'.base64_encode($riders["img"]).' " class="img-circle" alt="User Image" style="width: 30px; height: 30px;">' ;  echo $riders["fname"]." ".$riders["lname"];?> </td>
                                    <td></td>
                                    <?php
                                }elseif($rider["status"] == "pending"){
                                    echo " <td><span class=\"label label-danger\">Pending</span></td>
                                <td></td>";
                                }elseif($rider["status"] == "cancelled"){
                                    echo " <td><span class=\"label label-warning\">Cancelled</span></td>
                                <td></td>";
                                } ?>

                            </tr>


                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">


            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->


        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>


<?php include("layout/footer.php") ?>
