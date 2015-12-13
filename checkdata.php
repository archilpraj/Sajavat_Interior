<?php
include 'dbhelp.php';
$a="";
$v=false;
if(isset($_GET['txtusername']))
{
    if($_GET['txtusername']=='')
    {
        $a="Please enter something";
        $v=false;
    }
    else
    {
        $sql="select user_id from user where user_id='".$_GET['txtusername']."'";
        $res=  mysqli_query($con, $sql);
        $row=  mysqli_fetch_array($res);
        if($row['user_id']==$_GET['txtusername'])
        {
            $a="Username already exists";
            //$a=$row['user_id'];
            $v=false;
        }
        else
        {
            $a="";
            $v=true;
        }
    }
}
elseif(isset ($_GET['txtpassword']))
{
    if(strlen($_GET['txtpassword'])<8)
    {
        $a="Password must be greater than 8 characters";
        $v=false;
    }
    else
    {
        $a="";
        $v=true;
    }
}

elseif(isset ($_GET['txtemail']))
{
    if(filter_var($_GET['txtemail'],FILTER_VALIDATE_EMAIL))
    {
        $sql="select user_email from user where user_email='".$_GET['txtemail']."'";
        $res=  mysqli_query($con, $sql);
        $row= mysqli_fetch_array($res);
        if($row['user_email']==$_GET['txtemail'])
        {
            $a="Email already exists";
            $v=false;
        }
        else
        {
            $a="";
            $v=true;
        }
    }
    else
    {
        $a="Invalid email";
        $v=false;
    }
}

elseif(isset($_GET['retrieveemail']))
{
    if(filter_var($_GET['retrieveemail'],FILTER_VALIDATE_EMAIL))
    {
        $sql="select user_email from user where user_email='".$_GET['retrieveemail']."'";
        $res=  mysqli_query($con, $sql);
        $row= mysqli_fetch_array($res);
        if($row['user_email']==$_GET['retrieveemail'])
        {
            $a="";
            $v=true;
        }
        else
        {
            $a="Invalid email";
            $v=false;
        }
    }
    else
    {
        $a="Invalid email";
        $v=false;
    }
}
echo $a."||".$v;