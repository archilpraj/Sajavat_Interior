<?php
$target_dir="Pr_images/";
$target_file=$target_dir. basename($_FILES["testfile"]["name"]);
$uploadok =1;
echo $target_file;
if(move_uploaded_file($_FILES["testfile"]["tmp_name"], $target_file))
{
    echo "Success";
}
else
{
    echo "Fail";
}