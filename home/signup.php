<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: OnlineFolio
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>OnlineFolio</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>


<script type="text/javascript">

function validation(form)
{

if(form.txtname.value=="")
{
alert("please enter your name");
form.txtname.focus();
return false;
}


var numbers=/^[0-9]+$/;

if(numbers.test(form.txtname.value))
{
alert("please enter only  alphabets")
return false;
}



if(form.txtaadhar.value=="")
{
alert("please enter your Aadhar No");
return false;
}

var numbers=/^[0-9]+$/;

if(!numbers.test(form.txtaadhar.value))
{
alert("please enter only numeric values in aadhar no")
return false;
}

if(form.password.value=="")
{
alert("please choose your password");
return false;
}

if(form.txtcontact.value=="")
{
alert("enter your contact number");
form.txtcontact.focus();
return false;
}

var numbers=/^[0-9]+$/;

if(!numbers.test(form.txtcontact.value))
{
alert("please enter only numeric values")
return false;
}

if(form.dobdd.selectedIndex==0)
{
alert("please select your DATE");
return false;
}

if(form.dobmm.selectedIndex==0)
{
alert("please select your MONTH");
return false;
}

if(form.dobyy.selectedIndex==0)
{
alert("please select your YEAR");
return false;
}

if((form.gender[0].checked==false)&&(form.gender[1].checked==false))
{
alert("select your gender");
return false;
}

if(form.txtdoor.value=="")
{
alert("enter your house number");
form.txtcontact.focus();
return false;
}
if(form.txtstreet.value=="")
{
alert("enter your street number");
form.txtstreet.focus();
return false;
}
if(form.txtcity.value=="")
{
alert("enter your city name");
form.txtcontact.focus();
return false;
}
if(form.txtstate.value=="")
{
alert("enter your state");
form.txtcontact.focus();
return false;
}
if(form.txtpin.value=="")
{
alert("enter your pin");
form.txtcontact.focus();
return false;
}


if(form.txtbg.value=="")
{
alert("please enter your blood group");
return false;
}


}

</script>








</head>

<?php
$dbhost="localhost";
$dbuser="sukhber";
$dbpass="8sduVtEmcjLF4jWD";
$dbname="e_suwidha";
$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(isset($_GET['btnsubmit']))
{

$name=$_GET['txtname'];
$aadhar=$_GET['txtaadhar'];
$password=$_GET['password'];
$contact=$_GET['txtcontact'];
$dd=$_GET['dobdd'];
$mm=$_GET['dobmm'];
$yy=$_GET['dobyy'];
$dob=$dd.$mm.$yy;
$gender=$_GET['gender'];
$door=$_GET['txtdoor'];
$street=$_GET['txtstreet'];

$city=$_GET['txtcity'];
$state=$_GET['txtstate'];
$pin=$_GET['txtpin'];
$address=$door.$street.$city.$state.$pin;
$bloodgroup=$_GET['txtbg'];
$result="insert into signup(name,aadhar_no,password,contact_no,dob,gender,address,blood_group) values('$name',$aadhar,'$password','$contact','$dob','$gender','$address','$bloodgroup')";
mysqli_query($connection,$result);
echo"data successfully inserted";
}
?>



<body id="top">
<div class="wrapper col1">
  <div class="accordion">
    <div id="socialise">
      <ul>
        <li><a href="#"><img src="layout/images/linkedin.gif" alt="" /><span>Linked In</span></a></li>
        <li><a href="#"><img src="layout/images/skype.gif" alt="" /><span>Skype</span></a></li>
        <li><a href="#"><img src="layout/images/facebook.gif" alt="" /><span>Facebook</span></a></li>
        <li><a href="#"><img src="layout/images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
        <li class="last"><a href="#"><img src="layout/images/twitter.gif" alt="" /><span>Twitter</span></a></li>
      </ul>
      <br class="clear" />
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2" style="background-image:url(images/262785_1437564388_E-Suwidha Kendra.png);">
  <div id="header">
    <p class="toggler"><a id="closeit" style="display:none;" href="#socialise">Close Panel</a></p> 
    <div id="logo">
      <h1>&nbsp;</h1>
    </div>
    <div id="topnav">
      <ul><li class="active"><a href="index.php">Home</a></li>
         <li><a href="signup.php">signup</a></li>
        <li class="last"><a href="login.php">login</a><br class="clear" />
  </li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="intro">
    <div class="box1">
       <table style="height:100px;width:600px;border-color:black;">

<form  action="#" method="get" name="form">

<tr>
<td>
<h2 align="center" style="font-style:italic;"><font color="#003300">SIGN UP</h2>
</td>
</tr
><tr>

<td style="padding-left:100">NAME :         <input type=text  name="txtname" ></td>

</tr>

<tr>
<td style="padding-left:100">AADHAR-NO :      <input type=text  name="txtaadhar" maxlength="15"></td>
</tr>

<tr>
<td style="padding-left:100">PASSWORD :<input type=password name="password" ></td>
</tr>

<tr>
<td style="padding-left:100;">CONTACTNO:<INPUT type=text name="txtcontact" maxlength="10"></td></tr>

<tr>
<td style="padding-left:100">DOB :<select name="dobdd" >  
<option value="0">SELECT DATE</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</OPTION>
                   <option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
                   <option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option>
                   <option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
                   <option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
                   <option>31</option></select><select name="dobmm" > 
<option>SELECT MONTH</option><option>january</option><option>february</option><option>march</option><option>april</option><option>may</option><option>june</OPTION>
                   <option>july</option><option>august</option><option>september</option><option>october</option><option>november</option><option>december</option></select><select name="dobyy" > 
<option>SELECT YEAR</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</OPTION>
                   <option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option>
                   <option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option>
                   <option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option></select>
                   
</td>
</tr>



<tr>
<td style="padding-left:100;">
GENDER:   MALE<input type="radio" name="gender"> FEMALE<input type="radio" name="gender">
</td>
</tr>


<tr>
<td style="padding-left:100">
ADDRESS: Door-<input type=text  name="txtdoor" >
         Street-<input type=text  name="txtstreet">
</td></tr>
<tr><td style="padding-left:100;margin-right:100px;">
        city-<input type=text  name="txtcity">
		State-<input type=text  name="txtstate">Pin-<input type=text  name="txtpin">
</td></tr>

<tr>
<td style="padding-left:100">
 BLOOD GROUP:<input type="text" name="txtbg" width="500px">
</td>
</tr>


<tr>
<td style="padding-left:100">
<input type="submit"  value="submit" onClick="return validation(form)" style="background-color:#CC9900;" name="btnsubmit" > <input type="reset" name="btnreset" value="reset" style="background-color:#CC9900;">
</td>
</tr>



</form>
</table>


    </div>
    <div class="box">
      <h2></h2>
      <ul>
        <li></li>
        
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div class="overview">
    <h1 id="title">&nbsp;</h1>
    <ul><li><div class="imgholder"><img src="images/drivinglicence.jpg" alt="" width="284" height="144" /></div>
        <h2>Driving Licences</h2>
        
        </li>
      <li>
        <div class="imgholder"><img src="images/arms.jpg" alt="" width="284" height="144" /></div>
        <h2>Arms Licences</h2>
        
      </li>
      <li class="last">
        <div class="imgholder"><img src="images/birth certificate.jpg" alt="" width="284" height="144" /></div>
        <h2>Birth Certificates</h2>
        
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <div class="box1">
      <h2></h2>
      <img src="images/suwidha logo.jpg" alt="" width="210" height="156" class="imgl" />
      
    </div>
    <div class="box contactdetails">
      <h2>My Contact Details !</h2>
      <ul>
        <li>E-Suwidha</li>
        <li>Street Name &amp; Number</li>
        <li>Town</li>
        <li>Postcode/Zip</li>
        <li>Tel: xxxxx xxxxxxxxxx</li>
        <li>Fax: xxxxx xxxxxxxxxx</li>
        
       
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">E-Suwidha</a></p>
    
    <br class="clear" />
  </div>
</div>
</body>
</html>