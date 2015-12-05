<?php
session_start();
if (isset($_SESSION['admin_uname'])) {
    header('location:admin_dashboard.php');
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="icon" href="../../favicon.ico">

            <title>Admin Login</title>

            <!-- Bootstrap core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
            <style>
                body {
                    padding-top: 40px;
                    padding-bottom: 40px;
                    background-color: #eee;
                }

                .form-signin {
                    max-width: 330px;
                    padding: 15px;
                    margin: 0 auto;
                }
                .form-signin .form-signin-heading,
                .form-signin .checkbox {
                    margin-bottom: 10px;
                }
                .form-signin-heading{
                    font-color:white;
                }
                .form-signin .checkbox {
                    font-weight: normal;
                }
                .form-signin .form-control {
                    position: relative;
                    height: auto;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    padding: 10px;
                    font-size: 16px;
                }
                .form-signin .form-control:focus {
                    z-index: 2;
                }
                .form-signin input[type="email"] {
                    margin-bottom: -1px;
                    border-bottom-right-radius: 0;
                    border-bottom-left-radius: 0;
                }
                .form-signin input[type="password"] {
                    margin-bottom: 10px;
                    border-top-left-radius: 0;
                    border-top-right-radius: 0;
                }
            </style>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="../alert_master/dist/sweetalert.min.js"></script>
            <link rel="stylesheet" type="text/css" href="../alert_master/dist/sweetalert.css">
            <script type="text/javascript">
                function inpl(status)
                {
                    if (status == 'Login Sucessfull')
                    {
                        swal({
                            title: "Login Status",
                            text: status,
                            type: "success",
                            confirmButtonColor: "#  00ff00",
                            confirmButtonText: "Continue",
                            closeOnConfirm: false
                        },
                        function () {
                            window.location.href = 'admin_dashboard.php';
                        });
                    }
                    else if (status == 'Invalid Credentials!')
                    {
                        swal({
                            title: "Login Status",
                            text: status,
                            type: "error",
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Try Login Again?",
                            closeOnConfirm: true
                        });
                    }
                    else
                    {
                        swal({
                            title: "Login Status",
                            text: 'Invalid Response!',
                            type: "error",
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Try Login Again?",
                            closeOnConfirm: true
                        });
                    }
                }
                function val()
                {
                    var xmlhttp;
                    var uid = document.getElementById('admin_uname').value;
                    var pwd = document.getElementById('admin_pwd').value;
                    if (window.XMLHttpRequest)
                    {
                        xmlhttp = new XMLHttpRequest();
                    }
                    //                    else
                    //                    {
                    //                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    //                    }
                    xmlhttp.onreadystatechange = function ()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                            var status = xmlhttp.responseText;
                            inpl(status);
                        }
                        else
                        {
                            console.log(xmlhttp.readyState);
                        }
                    }
                    xmlhttp.open('POST', 'admin_login_func.php', true);
                    var uid = document.getElementById('admin_uname').value;
                    var pwd = document.getElementById('admin_pwd').value;
                    xmlhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                    xmlhttp.send("user=" + uid + "& password=" + pwd);
                }
                ;
            </script>

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
                        <a class="navbar-brand" href="admin_login.php">Admin Panel</a>
                    </div>
                </nav>
                <div class="container">

                    <form class="form-signin" method="POST">
                        <h2 class="form-signin-heading">Admin Login</h2>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="admin_uname" name="admin_uname" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="admin_pwd" name="admin_pwd" class="form-control" placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="val();">Login</button>
                    </form>
                    <div id="res"></div>
                </div>
            </div>
        </body>
    </html>
    <?php
}
?>