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

            <title>Products Panel</title>

            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/sb-admin.css" rel="stylesheet">

            <!-- Morris Charts CSS -->
            <link href="css/plugins/morris.css" rel="stylesheet">

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
                function disp(a)
                {
                    var req = a;
                    if (req == "disp_bed")
                    {
                        document.getElementById("p_name").innerHTML = "Beds";
                        document.getElementById("t_head").innerHTML = "<tr><th>Product ID</th><th>Product Name</th><th>Product Image</th><th>Price<br>INR <i class='fa fa-rupee'></i></th><th>Stock</th><th>Color</th><th>Material</th><th>Bed Type</th></tr>";
                    }
                    else if (req == "disp_bed_side_table")
                    {
                        document.getElementById("p_name").innerHTML = "Bed Side Tables";
                        document.getElementById("t_head").innerHTML = "<tr><th>Product ID</th><th>Product Name</th><th>Product Image</th><th>Price<br>INR <i class='fa fa-rupee'></i></th><th>Stock</th><th>Color</th><th>Material</th><th>Table Type</th><th>Table Style</th></tr>";
                    }
                    else if (req == "disp_bookshlf_disp_unit")
                    {
                        document.getElementById("p_name").innerHTML = "BookShelf Display Units";
                        document.getElementById("t_head").innerHTML = "<tr><th>Product ID</th><th>Product Name</th><th>Product Image</th><th>Price<br>INR <i class='fa fa-rupee'></i></th><th>Stock</th><th>Shape</th><th>Material</th><th>Storage Type</th><th>Floor Standing</th></tr>";
                    }
                    else if (req == "disp_d_table")
                    {
                        document.getElementById("p_name").innerHTML = "Dining Tables";
                        document.getElementById("t_head").innerHTML = "<tr><th>Product ID</th><th>Product Name</th><th>Product Image</th><th>Price<br>INR <i class='fa fa-rupee'></i></th><th>Stock</th><th>Shape</th><th>Material</th><th>Storage Type</th><th>Floor Standing</th></tr>";
                    }
                    else if (req == "disp_dressors")
                    {
                        document.getElementById("p_name").innerHTML = "Dressors";
                        document.getElementById("t_head").innerHTML = "<tr><th>Product ID</th><th>Product Name</th><th>Product Image</th><th>Price<br>INR <i class='fa fa-rupee'></i></th><th>Stock</th><th>Description</th><th>Frame Material</th><th>Storage Type</th><th>Type</th></tr>";
                    }
                    else if (req == "disp_sofa")
                    {
                        document.getElementById("p_name").innerHTML = "Sofas";
                        document.getElementById("t_head").innerHTML = "<tr><th>Product ID</th><th>Product Name</th><th>Product Image</th><th>Price<br>INR <i class='fa fa-rupee'></i></th><th>Stock</th><th>Description</th><th>Primary Material</th><th>Room Type</th><th>Colour</th></tr>";
                    }
                    else if (req == "disp_table")
                    {
                        document.getElementById("p_name").innerHTML = "Tables";
                        document.getElementById("t_head").innerHTML = "<tr><th>Product ID</th><th>Product Name</th><th>Product Image</th><th>Price<br>INR <i class='fa fa-rupee'></i></th><th>Stock</th><th>Description</th><th>Material</th><th>Shape</th><th>Size</th></tr>";
                    }
                    else if (req == "disp_tv_unit")
                    {
                        document.getElementById("p_name").innerHTML = "TV Units";
                        document.getElementById("t_head").innerHTML = "<tr><th>Product ID</th><th>Product Name</th><th>Product Image</th><th>Price<br>INR <i class='fa fa-rupee'></i></th><th>Stock</th><th>Description</th><th>Wall Mount</th><th>Floor Standing</th><th>Primary Room</th></tr>";
                    }
                    else if (req == "new_order")
                    {
                        document.getElementById("p_name").innerHTML = "New Orders";
                        document.getElementById("t_head").innerHTML = "<tr><th>Order ID</th><th>Product ID</th><th>User ID</th><th>Payment Mode</th><th>Order Date</th><th>Total Amount</th><th>Order Status</th></tr>";
                    }
                    else if (req == "old_order")
                    {
                        document.getElementById("p_name").innerHTML = "Old Orders";
                        document.getElementById("t_head").innerHTML = "<tr><th>Order ID</th><th>Product ID</th><th>User ID</th><th>Payment Mode</th><th>Order Date</th><th>Total Amount</th><th>Order Status</th><th>Delivery Date</th></tr>";
                    }
                    //alert(req);
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
                            var row = $(xmlhttp.responseText);
                            $("#mt > tbody").children().remove();
                            $("#mt > tbody").append(row);
                        }
                    }
                    xmlhttp.open('POST', 'admin_func_check.php?val=' + req, true);
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
            </style>
        </head>

        <body>

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
                                <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="view_feedback.php"><i class="fa fa-envelope fa-fw"></i> Feedbacks</a>
                            </li>
                            <li>
                                <a data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-table"></i> View Database <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="demo" class="collapse">
                                    <li>
                                        <a href="admin_usertable.php"><i class="fa fa-fw fa-user"></i> Users</a>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-box"></i> Products <i class="fa fa-fw fa-caret-down"></i></a>

                                        <ul id="demo2" class="collapse">
                                            <li class="active">
                                                <nav class="navbar-collapse" role="navigation">
                                                    <a href="#" name="disp_bed" onclick="disp(this.name)">Beds</a>
                                                </nav>
                                            </li>
                                            <li>
                                                <a href="#" name="disp_bed_side_table" onclick="disp(this.name)"><i class="fa fa-fw fa-bed"></i>Bed Side Table</a>
                                            </li>
                                            <li>
                                                <a href="#" name="disp_bookshlf_disp_unit" onclick="disp(this.name)"><i class="fa fa-fw fa-bed"></i>Bookshelf Display Unit</a>
                                            </li>
                                            <li>
                                                <a href="#" name="disp_d_table" onclick="disp(this.name)"><i class="fa fa-fw fa-bed"></i>Dining Tables</a>
                                            </li>
                                            <li>
                                                <a href="#" name="disp_dressors" onclick="disp(this.name)"><i class="fa fa-fw fa-bed"></i>Dressors</a>
                                            </li>
                                            <li>
                                                <a href="#" name="disp_sofa" onclick="disp(this.name)"><i class="fa fa-fw fa-bed"></i>Sofa</a>
                                            </li>
                                            <li>
                                                <a href="#" name="disp_table" onclick="disp(this.name)"><i class="fa fa-fw fa-bed"></i>Table</a>
                                            </li>
                                            <li>
                                                <a href="#" name="disp_tv_unit" onclick="disp(this.name)"><i class="fa fa-fw fa-bed"></i>TV Units</a>
                                            </li>             
                                        </ul>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-box"></i> Orders <i class="fa fa-fw fa-caret-down"></i></a>
                                        <ul id="demo3" class="collapse">
                                            <li>
                                                <a href="#" name="new_order" onclick="disp(this.name)">New Orders</a>
                                            </li>
                                            <li>
                                                <a href="#" name="old_order" onclick="disp(this.name)">Old Orders</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
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
                                    <div id="p_name"></div> <small>Stock Overview</small>
                                </h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <i class="fa fa-dashboard"></i> Dashboard
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-th fa-fw"></i> All Units</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped" id="mt">
                                            <thead id="t_head">

                                            </thead>
                                            <tbody id="t_data">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

        </body>

    </html>
    <?php
}
?>