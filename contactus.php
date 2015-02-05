<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>FARMHOUSE JUICE</title>
    <meta name="keywords" content="FARMHOUSE JUICE"/>
    <meta name="description" content="FARMHOUSE JUICE"/>
    <meta name="robots" content="index, follow" />
    <link href='webstyle/style.css' rel='stylesheet' type='text/css'>
    <link href='webstyle/reset.css' rel='stylesheet' type='text/css'>
    <link href='webstyle/fonts.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="webstyle/ie8-fixs.css" />
    <![endif]-->
    <!--[if gt IE 8]>
    <link rel="stylesheet" type="text/css" href="webstyle/ie-fixs.css" />
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
   

	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    
    <link href="webstyle/sumoselect.css" rel="stylesheet" />
	<script src="js/jquery.sumoselect.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<script type="text/javascript" src="slick/slick.min.js"></script>
    
    <link href="skins/flat/grey.css" rel="stylesheet">
	<script src="js/icheck.js"></script>
    
</head>
<script language="JavaScript" type="text/javascript">
function validate()
     {


	if (document.contactus.Client.value == '')
          {
		alert('Name : Please Give name');
		return false;
          }	
	
	if (document.contactus.phone.value== '')
          {
		alert('Phone : Give Phone No');
		return false;
          }
	if (document.contactus.email.value== '')
          {
		alert('email : Please provide email');
		return false;
          }

	if (document.contactus.comments.value== '')
          {
		alert('contactus: Please give your contactus');
		return false;
          }



      return true;
     }

</script> 
<body>
<?php include("includes/header.php"); ?>
<form method="POST" >
<div id=outer  style='overflow-y: scroll; overflow-x:hidden; height: 600px;' align=left>


<table border = "0" cellpading = "0" cellspacing = "0" width = "90%" align= "center" valign="top">

<tr>
<td width=50%>
    <img src = "images/contactus.jpg" width="150"><P>
</td>
<td width="95%">
<center>
<h3>Enter the Details</h3>

<P>
  <table width = 105% border=0 cellpadding = 3 cellspacing=3>
    <tr>
		<td align="left" width="90%" valign="center">
		   Name <font color="red"><b> *
		</td>
		<td>
		   :
		</td>
		<td align=left>
		   <input type="text" name="Client" size = 35/>
		</td>
    </tr>
<tr>
		<td align="left" width="90%" valign="center">
		   Company <font color="red"><b>
		</td>
		<td>
		   :
		</td>
		<td align=left>
		   <input type="text" name="company" size = 35/>
		</td>
    </tr>
    <tr>
		<td align=left>
		   Phone/Mobile <font color="red"><b> *
		</td>
		<td>
		   :
		</td>
		<td align=left>
		   <input type="text" name="phone"  size = 35/>
		</td>
    </tr>
    <tr>
		<td align=left>
		   Email Id <font color="red"><b> *
		</td>
		<td>
		   :
		</td>
		<td align=left>
		   <input type="text" name="email"  size = 35/>
		</td>
    </tr>
    <tr>
		<td align=left>
		   Designation <font color="red"><b> 
		</td>
		<td>
		   :
		</td>
		<td align=left>
		   <input type="text" name="desgination"  size = 35/>
		</td>
   </tr>
    <tr>
		<td align=left>
		   Comments / contactus <font color="red"><b> *
		</td>
		<td>
		   :
		</td>
		<td align=left>
		   <textarea name="comments" rows="7" cols="28"></textarea>
		</td>
    </tr>
</table>
</tr>
</td>
<tr>
<td width="50%">
		</td>
		<td align="center">
		   <input type="submit" name="submit" value="Submit">
		</td>
   </tr>
</table>
<P>
</form>
</div>
</body>
</html>
