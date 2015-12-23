<?php
session_start();
$admin_name = $_SESSION['admin_uname'];
if (!isset($_SESSION['admin_uname'])) {
    header("location:admin_login.php");
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Add Bed Side Table Panel</title>

            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Custom CSS -->
            <link href="css/sb-admin.css" rel="stylesheet">
            <!-- Custom Fonts -->
            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <script src="../alert_master/dist/sweetalert.min.js"></script>
            <script src="https://cdn.rawgit.com/jmosbech/StickyTableHeaders/master/js/jquery.stickyt‌​ableheaders.min.js" type="text/javascript"></script>
            <link rel="stylesheet" type="text/css" href="../alert_master/dist/sweetalert.css">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
            <script type="text/javascript">

                function logout_confirm()
                {
                    swal({
                        title: "Are you sure?",
                        text: "You Want To Logout?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, Logout",
                        cancelButtonText: "No, Cancel Pls!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal({
                                title: "Logged Out",
                                text: "Sucessfully Logged Out",
                                type: "success",
                                confirmButtonColor: "#00ff00",
                                confirmButtonText: "Continue",
                                closeOnConfirm: false
                            },
                            function () {
                                window.location.href = 'admin_func_check.php?val=logout';
                            });
                        } else {
                            swal({
                                title: "Cancelled",
                                text: "Logout Request Cancelled",
                                type: "success",
                                confirmButtonColor: "#00ff00",
                                confirmButtonText: "Continue",
                                closeOnConfirm: true
                            });
                        }
                    });
                }
                function alrt() {
                    swal({
                        title: "Added To DB!",
                        text: "Sucessfully Added To Database",
                        type: "success",
                        confirmButtonColor: "#00ff00",
                        confirmButtonText: "Continue",
                        closeOnConfirm: false
                    },
                    function () {
                        window.location.href = 'bed_input_db.php';
                    });
                }
                function disp()
                {
                    var xmlhttp;
                    if (window.XMLHttpRequest)
                    {
                        xmlhttp = new XMLHttpRequest();
                    }
                    else
                    {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function ()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                            var row = xmlhttp.responseText;
                            $("#mt > tbody").append(row);
                        }
                    }
                    xmlhttp.open('POST', 'admin_func_check.php?val=disp_bed', true);
                    xmlhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                    xmlhttp.send();
                }


            </script>
            <style type="text/css">
                .table#stickyHeader thead {
                    border-top: none;
                    border-bottom: none;
                    background-color: #FFF;
                }
                input
                {
                    -webkit-border-radius: 5px; //For Safari, etc.
                    -moz-border-radius: 5px; //For Mozilla, etc.
                    border-radius: 5px; //CSS3 Feature
                }
            </style>
        </head>

        <body onload="disp()">

            <div id="wrapper">

                <!-- Navigation -->
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Admin Panel</a>
                    </div>
                    <!-- Top Menu Items -->
                    <ul class="nav navbar-right top-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="admin_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                                </li>
                                <li>
                                    <a onclick="logout_confirm();"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li>
                                <a href="admin_dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>

                <div id="page-wrapper">

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Bed Side table <small>Add In Inventory</small>
                                </h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <i class="fa fa-dashboard"></i> Dashboard
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-th fa-fw"></i> Add Bed Side Table</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form class = "form-horizontal" role = "form" action="add_update_del_logic.php?tab=bstable" method="POST" enctype="multipart/form-data">
                                <label><h3>Basic Info</h3></label>
                                <div class="row">
                                    <div class="col-md-4"><label class = "control-label">Product Id</label>
                                        <div class = "input-group">
                                            <span class="input-group-addon " id="basic-addon1">bd_st_td</span>
                                            <input type="text" name="product_id" class="form-control " placeholder="Product Id" aria-describedby="basic-addon1" required>
                                        </div></div>
                                    <div class="col-md-4">
                                        <label class = "control-label">Product Name</label>
                                        <div class = "input-group">
                                            <input type="text" name="product_name" class="form-control" placeholder="Product Name" style="width: 350px;" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <label><h3>Image Selection</h3></label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="control-label">Product Image 1</label>
                                        <input type="file" name="image1" class="form-control" style="width:250px;" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Product Image 2</label>
                                        <input type="file" name="image2" class="form-control" style="width:250px;" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Product Image 3</label>
                                        <input type="file" name="image3" class="form-control" style="width:250px;" required>
                                    </div>
                                </div>
                                <!--Image Selection 2-->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="control-label">Product Image 4</label>
                                        <input type="file" name="image4" class="form-control" style="width:250px;" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Product Image 5</label>
                                        <input type="file" name="image5" class="form-control" style="width:250px;" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Product Image 6</label>
                                        <input type="file" name="image6" class="form-control" style="width:250px;" required>
                                    </div>
                                </div>
                                <label><h3>Price,Desc And Stock</h3></label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="control-label">Product Price</label>
                                        <input type="number"  name="product_price" class="form-control" style="width:250px;" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Product Desc</label>
                                        <input type="text" name="product_desc" class="form-control" style="width:250px;" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Product Stock</label>
                                        <input type="number"  name="product_stock" maxlength="20" class="form-control" style="width:250px;" required>
                                    </div>
                                </div>
                                <label><h3>Material,Storage,Shape And Style</h3></label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="control-label">Product Material</label>
                                        <select name="product_material" class="form-control" style="width:200px;" required><option>Sheesham Wood</option><option>Engineered Wood</option><option>Acacia Wood</option><option>Mango Wood</option><option>Teak Wood</option><option>Recycled Wood</option><option>Metal</option></select>
                                    </div>
                                    <div class="col-md-3"><label class="control-label">Product Storage</label>
                                        <select name="product_storage" class="form-control" style="width:200px;" required><option>Yes</option><option>No</option></select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="control-label">Product Table Top Shape</label>
                                        <select name="product_ttshape" class="form-control" style="width:200px;" required><option>Rectangular</option><option>Square</option></select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="control-label">Product Style</label>
                                        <input type="text"  name="product_style" class="form-control" style="width:200px;" required>
                                    </div>
                                </div>
                                <label><h3>Table Shape</h3></label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Product Table Shape</label>
                                        <select name="product_tshape" class="form-control" style="width:200px;" required><option>Rectangular</option><option>Square</option></select>
                                    </div>
                                </div>
                                <label><h3>Shape</h3></label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Product Shape</label>
                                        <select name="shape" class="form-control" style="width:300px;" required><option>Rectangular</option><option>Square</option></select>
                                    </div>
                                </div>
                                <label><h3>Table Material,Color And Table Type</h3></label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="control-label">Product Table Material</label>
                                        <select name="tmaterial" class="form-control" style="width:300px;" required><option>Sheesham Wood</option><option>Engineered Wood</option><option>Acacia Wood</option><option>Mango Wood</option><option>Teak Wood</option><option>Recycled Wood</option><option>Metal</option></select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Product Color</label>
                                        <input type="text" name="color" class="form-control" style="width:300px;" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Table Type</label>
                                        <input type="text" name="table_type" class="form-control" style="width:300px;" required>
                                    </div>
                                </div>
                                <label class="clearfix"></label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <center><button type="submit" class="btn btn-primary" onclick="alrt()">Add To Database</button></center>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->
        </body>

    </html>
    <?php
}
?>