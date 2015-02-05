<?php
include('database/db_connect.php');
session_start();

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"]; //echo $mobile; exit;
$password = MD5($_POST["password"]);
$address = $_POST["address"];
   
$ip = $_SERVER["REMOTE_ADDR"];
$status = 1;
$date_added = date("Y/m/d h:i:sa");
echo $fname; //exit;
 $sql = "SELECT * from farmhouse_customer where email = '$email'";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0)
     {
		 echo "more";
		printf ("The email already signuped with us");
     }
 else
     {
		 
		 echo "imsert";
		   $sql = "INSERT INTO farmhouse_customer(firstname,lastname,email,telephone,password,address,ip,status,date_added) 
		   values('$fname','$lname','$email',$mobile,'$password','$address','$ip','$status','$date_added')";
		   if(mysqli_query($conn,$sql))
			{
				  echo "successfully added";
			}
			else
			{
				 echo "not added";
				echo "Error:".$sql."<br>".mysqli_error($conn);
			}
	 }
 
?>


