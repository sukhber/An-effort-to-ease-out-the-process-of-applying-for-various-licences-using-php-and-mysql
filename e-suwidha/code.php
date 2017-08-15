<?php
ob_start();
session_start();
mysql_connect("localhost","root","");
mysql_select_db("e_suwidha");
if(isset($_POST['btnlogin']));
{

$aadhar=$_POST['txtaadhar'];
$password=$_POST['password'];
$query="select * from e_suwidha.signup where aadhar_no='$aadhar' and password='$password'";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
$ab=$row['name'];
$aadhar=$row['aadhar_no'];
$num=mysql_num_rows($result);
if($num>0)
{
header("location:services.php");
}
else
{
header("location:login.php");

echo"invalid username or password";

}
}

?>