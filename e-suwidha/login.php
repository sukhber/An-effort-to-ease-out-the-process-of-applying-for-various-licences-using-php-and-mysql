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
if(form.txtaadhar.value=="")
{
alert("please enter your aadhar no");
return false
}


if(form.password.value=="")
{
alert("please enter your password");
return false
}

}

</script>
</head>





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
      <ul>
        
        <li class="active"><a href="index.php">Home</a></li>
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
      <h2>Login to access services !</h2>
	  <table  style="height:300px;width:1000;border-color:black;font-family:'Lucida Handwriting';">
<form  name="form" action="code.php" method="post">


<tr>
<td>
<h2 align="center" style="font-style:italic;"><font color="#003300">LOGIN</h2>
</td>
</tr>
<tr>
<td style="padding-left:300">AADHAR NO:      <input type=text name="txtaadhar"></td>
</tr>

<tr>
<td style="padding-left:300">PASSWORD :<input type=password name="password" ></td>
</tr>


<td style="padding-left:300">
<input type="submit"  name="btnlogin" value="LOGIN" onClick="return validation(form)" style="background-color:#CC9900;"><input type="reset" name="btnreset" value="RESET" style="background-color:#CC9900;">
</td>
</tr>



</form>

</table>

     
    </div>
    <div class="box">
      <h2></h2>
      <ul>
        
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
        <h2>Driving licences</h2>
        
        </li>
      <li>
        <div class="imgholder"><img src="images/arms.jpg" alt="" width="284" height="144" /></div>
        <h2>Arms licences</h2>
       
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