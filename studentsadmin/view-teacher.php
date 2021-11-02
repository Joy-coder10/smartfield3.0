<?php
session_start();
error_reporting(1);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {

    $tid = intval($_GET['tid']);
    

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin| View Teacher  </title>
                <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
                <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
                <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
                <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
                <link rel="stylesheet" href="css/prism/prism.css" media="screen">
                <link rel="stylesheet" href="css/select2/select2.min.css">
                <link rel="stylesheet" href="css/main.css" media="screen">
                <script src="js/modernizr/modernizr.min.js"></script>
    </head>

    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('includes/topbar.php'); ?>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    <?php include('includes/leftbar.php'); ?>
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">View Teacher</h2>

                                </div>

                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>

                                        <li class="active">View Teacher </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">

                            <div class="row">
                                
                                <div class="col-md-5">
                                    <?php  
                                        $teacherid = $_GET['tid'];
                                        $sql ="SELECT image FROM tblteachers WHERE id = $teacherid";
                                        $query= $dbh -> query($sql);
                                        $res=$query->fetch(PDO::FETCH_ASSOC);

                                        // $query-> execute();
                                        // $results = $query -> fetch();
                                        if($res ):
                                            // echo "<script>alert('$res[image]')</script>";

                                    ?>
                                    <img src="upload/<?php echo $res['image']; ?>" alt="" class="img-responsive" style="width: 100%; height: 400px;">

                                    <?php endif; ?>
                                </div>
                                <div class="col-md-7">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <!-- <h5>Fill the Student info</h5> -->
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <?php if ($msg) { ?>
                                                <div class="alert alert-success left-icon-alert" role="alert">
                                                    <strong>Well done!</strong><?php echo htmlentities($msg); ?>
                                                </div><?php } else if ($error) { ?>
                                                <div class="alert alert-danger left-icon-alert" role="alert">
                                                    <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                                </div>
                                            <?php } ?>
                                            <form class="form-horizontal" method="post">
                                                <?php

                                                $sql = "SELECT tblteachers.name,tblteachers.email,tblteachers.class,tblteachers.gender,tblteachers.date_created,tblclasses.ClassName,tblclasses.Section from tblteachers join tblclasses on tblclasses.id=tblteachers.class where tblteachers.id=:tid";
                                                $query = $dbh->prepare($sql);
                                                $query->bindParam(':tid', $tid, PDO::PARAM_STR);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                $cnt = 1;
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $result) {  ?>


                                                            <label for="default" class="col-sm-3 control-label">Full Name</label>
                                                            <div class="col-sm-9">
                                                                <p class="form-control"> <?php echo htmlentities($result->name) ?>
                                                                </p>
                                                            </div>
                                                            <!-- <label for="default" class="col-sm-2 control-label">Rool Id</label>
                                                            <div class="col-sm-10">
                                                                <p class="form-control"><?php echo htmlentities($result->RollId) ?></p>
                                                            </div> -->

                                                        <div class="form-group">
                                                            <label for="default" class="col-sm-3 control-label">Email </label>
                                                            <div class="col-sm-9">
                                                                <p class="form-control"><?php echo htmlentities($result->email) ?>
                                                            </div>
                                                        </div>



                                                        <div class="form-group">
                                                            <label for="default" class="col-sm-3 control-label">Gender</label>
                                                            <div class="col-sm-9">
                                                                <?php echo $gndr = $result->gender;?>
                                                                


                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="default" class="col-sm-3 control-label">Class</label>
                                                            <div class="col-sm-9">
                                                            <p class="form-control"><?php echo htmlentities($result->ClassName); ?>(<?php echo htmlentities($result->Section);?>)
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date" class="col-sm-3 control-label">Date Registered</label>
                                                            <div class="col-sm-9">
                                                                <p class="form-control"> <?php echo htmlentities($result->date_created) ?> </p>
                                                            </div>
                                                        </div>




                                                <?php }
                                                } ?>


                                               
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                        </div>
                    </div>
                    <!-- /.content-container -->
                </div>
                <!-- /.content-wrapper -->
            </div>
            <!-- /.main-wrapper -->
            <script src="js/jquery/jquery-2.2.4.min.js"></script>
            <script src="js/bootstrap/bootstrap.min.js"></script>
            <script src="js/pace/pace.min.js"></script>
            <script src="js/lobipanel/lobipanel.min.js"></script>
            <script src="js/iscroll/iscroll.js"></script>
            <script src="js/prism/prism.js"></script>
            <script src="js/select2/select2.min.js"></script>
            <script src="js/main.js"></script>
            <script>
                $(function($) {
                    $(".js-states").select2();
                    $(".js-states-limit").select2({
                        maximumSelectionLength: 2
                    });
                    $(".js-states-hide").select2({
                        minimumResultsForSearch: Infinity
                    });
                });
            </script>
    </body>

    </html>
<?PHP } ?>