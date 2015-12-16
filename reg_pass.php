<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="5; url=index.php"> 
        <title>Sajavat Interiors | Wellcome</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/simpleCart.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--webfont-->
        <link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!--//webfont-->
        <script src="js/jquery.easydropdown.js"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="main">
            <div class="content_box">
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <center>  <div><font color="df4782"><h2><b>Welcome <font color="red"> <?php echo $_SESSION['user']; ?></font> To Sajavat Interiors </b></h2></font></div><br>
                    <h3>Redirecting To Home Page In 5 Seconds</h3>
                </center>
            </div>  
        </div>

    </body>
</html>
