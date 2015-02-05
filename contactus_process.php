<?php
include('db_connect.php');

?>
<html>
 <head><title></title></head> 

<body> 
<form name="feedback_add" method="post" action="feedback_add.PHP" ENCTYPE="multipart/form-data">
    
     <table  width="60%"  cellpadding="0" cellspacing="0" align=center >
        <tr>
          <td  width = 85% valign=top>

		<?php
	 		$i_Client=$_REQUEST['Client'];
	 		$i_company=$_REQUEST['company'];
			$i_phone=$_REQUEST['phone'];
			$i_email=$_REQUEST['email'];
			$i_designation=$_REQUEST['desgination'];
			$i_comments=$_REQUEST['comments'];
			if($_REQUEST['submit'] == "Submit")
                        	{
			 $query="insert into customer_feedback
                         (cust_name,company, phone,designation, email,date_received,message_details)
                	 values('$i_Client','$i_company','$i_phone','$i_designation','$i_email',curdate(), '$i_comments')";
	 	 mysql_query($query) or die(mysql_error());  
		 echo "<center>";
		 echo "<h3>";
echo "<br>"; echo "<br>";
	 echo "Your Feedback sent Successfully!";
	}
     ?>
<br><br><br><br>
<center> 
<a href = "index.php?link=home"><input name="button" type="button" value="Close"></a>

</td>
     </table>
     
</td>
</tr>
</table>
<center>

</body>
</html>