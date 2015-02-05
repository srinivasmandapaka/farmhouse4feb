<?php
    include ('db_connect.php');
?>
<html>
 <head>
   <title> </title>
<style>
  table.registration div 
  {
    color: #ffffff;
    font-size : 15px;
}
a#mnu:link{
	color:#ffffff;
}
a#mnu:visited{
	color:#ffffff;
}
</style>
</head>
 <body>
<table class="registration" width="100%"  align=center bgcolor="#324259"> 
  <tr  align="center"> 

    <td height= "30" width = "12%">
       <a href="index.php?link=home" style= 'text-decoration:none'>
         <div> Home </div>
       </a>
    </td>
    <td  width = "12%">
          <a href="index.php?link=add_new_juices" style= 'text-decoration:none'>
         <div>Add New Juices</Div>
       </a>
    </td>
    
       <td  width = "12%"> 
    <li class="dropdown">
								<a href="#" style= 'text-decoration:none' data-toggle="dropdown" id="mnu">Add Cards<strong class="caret"></strong></a>

								<ul class="dropdown-menu">
							
									<li>
										<a href="index.php?link=giftcards">Add New Gift Cards</a>
									</li>

									<li>
										<a href="index.php?link=debitcards">Add New Debit Cards</a>
									</li>
									<li>
										<a href="index.php?link=creditcards">Add New Credit Cards</a>
									</li>
									<li>
										<a href="index.php?link=third_party_payments">Add Third Party Payments</a>
									</li>
									</ul><!-- end dropdown-menu -->
						
   
</td>
<td  width = "12%"> 
    <li class="dropdown">
								<a href="#" style= 'text-decoration:none' data-toggle="dropdown" id="mnu">Create Accounts<strong class="caret"></strong></a>

								<ul class="dropdown-menu">
							
									<li>
										<a href="index.php?link=production_signup">Production</a>
									</li>

									<li>
										<a href="index.php?link=dispatch_signup">Dispatch</a>
									</li>
									<li>
										<a href="index.php?link=billing_signup">Billing</a>
									</li>
									
									</ul><!-- end dropdown-menu -->
						
   
</td>

  </tr>
 </table>
 
 <script src="js/jquery-1.10.2.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="js/bootstrap.js"></script>
</body>
</html>