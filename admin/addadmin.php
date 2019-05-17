<?php include("layout/header.php") ?>
<?php


if (isset($_POST['submit'])){
    $name = $_POST["name"];
    $add_rider = isset($_POST["add_rider"])? $_POST["add_rider"] : 0 ;
    $reports = isset($_POST["reports"])? $_POST["add_rider"] : 0 ;
    $mail = isset($_POST["mail"])? $_POST["add_rider"] : 0 ;
    $m_admin = isset($_POST["m_admins"])? $_POST["add_rider"] : 0 ;
    $price_set = isset($_POST["price_set"])? $_POST["add_rider"] : 0 ;
    $image = file_get_contents($_FILES["image"]["tmp_name"]);
    $username = $_POST["username"];
    $password = $_POST["password"];

    $image = mysqli_real_escape_string($db, $image);

    $query = "insert into admins ( ";
    $query .= " name, add_riders, reports, mail, m_admins, price_set, img, username, password ";
    $query .= " ) VALUES (";
    $query .= " '{$name}', '{$add_rider}','{$reports}','{$mail}','{$m_admin}','{$price_set}', '{$image}', '{$username}', '{$password}' ";
    $query .= ")";
    $result_set = mysqli_query($db,$query);



    if ($result_set ){
        $err = 0;
        $msg = "" ;
    }
    else {
        $err = 1;
        $msg =  mysqli_error($db);


    }
}

?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small>Add New Admin</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">add admin</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">


        <?php if (isset($_POST['submit'])){
            if($err == 1) {
                echo '  <div class="alert alert-danger alert-dismissible col-md-8">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                There was an error adding rider  <b>'.$msg.'</b>


                <h6>This alert is dismissable.<h6>
              </div> ';
            }
            if( $err == 0){
                echo ' <div class="alert alert-success alert-dismissible col-md-8">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Success Alert!</h4>
                 New rider added  Successfully! <br>

                <h6>This alert is dismissable.<h6>
              </div>';
            }

        } ?>

<div class="col-md-8" >
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">New Rider Registration</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="addadmin.php" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Full  Name">
                </div>


                <div class="form-group">
                    <p>Select Admin Level</p>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="add_rider"  value="1" checked>
                            Add New Rider  <i class="fa fa-plus"> </i> <i class="fa fa-motorcycle"></i>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="mail"  value="1">
                            Mailbox  <i class="fa fa-envelope"></i>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="reports"  value="1">
                            Reports  <i class="fa  fa-line-chart"></i>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="price_set"  value="1">
                            Price Settings  <i class="fa fa-car"></i>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="m_admins"  value="1">
                            Manage Admins  <i class="fa fa-users"></i>
                        </label>
                    </div>


                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Create New Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Create New Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Upload an image</label>
                    <input type="file" name="image" accept="image/*" onchange="preview_image(event)">
                    <img class="img-circle" alt="User Image" style="width: 80px; height: 80px;"  id="output_image"/>

                    <p class="help-block">Image must be less than 100MB</p>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit"  name="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
    </div>
    <!-- /.box -->
</div>


<?php include("layout/footer.php") ?>
