<?php
$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$temp=$_FILES["myfile"]["tmp_name"];
$error=$_FILES["myfile"]["error"];
if($error>0)
die("Error Uploading File. Code $error");
else
{
	move_uploaded_file($temp,"uploaded/".$name);
}
?>

