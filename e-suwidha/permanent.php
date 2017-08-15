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
<script type="text/javascript">

function validation(form)
{



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





}

</script>




<title>E-Suwidha | Permanent DL</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>
</head>
<body id="top">
<div class="wrapper col1">
  <div class="accordion">
    <div id="socialise">
      <ul>
        <li><a href="#"><img src="../layout/images/linkedin.gif" alt="" /><span>Linked In</span></a></li>
        <li><a href="#"><img src="../layout/images/skype.gif" alt="" /><span>Skype</span></a></li>
        <li><a href="#"><img src="../layout/images/facebook.gif" alt="" /><span>Facebook</span></a></li>
        <li><a href="#"><img src="../layout/images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
        <li class="last"><a href="#"><img src="../layout/images/twitter.gif" alt="" /><span>Twitter</span></a></li>
      </ul>
      <br class="clear" />
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="header">
    
    <div id="logo">
      <h1><a href="../index.html"></a></h1>
      <p></p>
    </div>
    <div id="topnav">
      <ul>
        
        <li class="last active"><a href="logout.php">logout</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      
      <li>Home</li>
      <li>&#187;</li>
      <li>Registration</li>
      <li>&#187;</li>
      <li>Services available</li>
	  <li>&#187;</li>
      <li>Request Permanent</li>
      
      
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
   <table style="height:100px;width:600px;border-color:black;">

<form  action="#" method="get" name="form">

<tr>
<td>
<h2 align="center" style="font-style:italic;"><font color="#003300">Upload Supporting Documents</h2>
</td>
</tr>
<tr>

<td style="padding-left:100">DOB Proof :         <input type="file"  name="dobproof" ></td>

</tr>

<tr>
<td style="padding-left:100">Photo :      <input type="file"  name="photo"></td>
</tr>

<tr>
<td style="padding-left:100">Medical certificate :<input type="file" name="medcert" ></td>
</tr>

<tr>
<td style="padding-left:100;">Address Proof:<INPUT type="file" name="addproof"></td></tr>

<tr>

<tr>
<td style="padding-left:100;">Learning DL No:<INPUT type="file" name="ldlno"></td></tr>

<tr>
<tr>
<td style="padding-left:100;">Drive Test Approval:<INPUT type="file" name="dta"></td></tr>

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
ADDRESS: Door-<input type=number  name="txtdoor" >
         Street-<input type=number  name="txtstreet">
</td></tr>
<tr><td style="padding-left:100;margin-right:100px;">
        city-<input type=text  name="txtcity">
		State-<input type=text  name="txtstste">Pin-<input type=number  name="txtpin">
</td></tr>



<tr>
<td style="padding-left:100">
<input type="submit"  value="submit" onClick="return validation(form)"  name="btnsubmit" > <input type="reset" name="btnreset" value="reset">
</td>
</tr>



</form>
</table>

    
    
   
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <div class="box1">
      
      <img src="images/suwidha logo.jpg" alt="" width="210" height="156" class="imgl" />
      
    </div>
    <div class="box contactdetails">
      <h2>Our Contact Details !</h2>
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