<?php

$con=mysqli_connect("localhost","root","","sj_database");
if($con->errno)
{
    echo "Error connecting to the database";
}