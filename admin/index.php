<?php
  error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>

<title>Farmhouse-Admin</title>

		<!-- Website Title & Description for Search Engine purposes -->
		<title></title>
		<meta name="description" content="eciomm">

		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Bootstrap CSS -->
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/bootstrap-glyphicons.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="..css/styles.css">

		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="../js/modernizr-2.6.2.min.js"></script>

</head>
<body>
      
<table width="100%"  border="0" cellspacing="0" cellpadding="0">      
      </table>      
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">      
         <tr>
         <td bgcolor="#ffffff">

<?php include("partials/header.php"); ?>
</td>
         </tr>    
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">      
         <tr>
         <td bgcolor="#324259">

<?php include("partials/menu.php"); ?>
</td>
         </tr>    
      </table>      
           <table width = 100% border="0" cellspacing="0" cellpadding="0" background="../images/bg.png">
	<tr>
	  <td bgcolor="#ffffff">
		
<?php

    		$golink = $_REQUEST['link'];
         Switch($golink)
	 {
   	      case "home": include("./partials/home.php");
          break;
		  
		  case "signup_admin": include("./partials/signup_admin.php");
          break;
		  
		  case "register": include("./partials/register.php");
          break;
          
          case "add_new_juices": include("./partials/add_new_juices.php");
          break;

		  case "add_new_lifestyle": include("./partials/add_new_lifestyle.php");
          break;
		  
          case "giftcards": include("./partials/add_new_gift_cards.php");
          break;

		  case "debitcards": include("./partials/add_new_debit_cards.php");
          break;
		  
		  case "creditcards": include("./partials/add_new_credit_cards.php");
          break;
		  
		  case "third_party_payments": include("./partials/add_third_party_payments.php");
          break;
            
		  		  
	  default: include("home.php");
          break;
	
        }	
?>

</td>
</tr>
</table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">      
         <tr>
         <td bgcolor="#67E609">

<?php include("footer.php"); ?>
</td>
         </tr>    
      </table>      


</body>
</html>