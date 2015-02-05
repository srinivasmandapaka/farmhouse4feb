	<?php
include('database/db_connect.php');
session_start();

  $email=$_POST["email"];
  $password= MD5($_POST["password"]);
  $ip = $_SERVER["REMOTE_ADDR"];
  $logged_in = date("Y/m/d h:i:sa");

 $sql = "SELECT * from farmhouse_customer where email = '$email' and password = '$password'";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0)
 {

	while($row = mysqli_fetch_array($result))
		{
			$cid = $row["customer_id"];
			$cname = $row["lastname"];
			$ip = $_SERVER["REMOTE_ADDR"];
			$_SESSION["customer_id"]=$cid;
			$_SESSION["customer_name"]=$cname;
			$_SESSION["ip"] = $ip;

			$sql_insert_login = "INSERT INTO farmhouse_customer_login(customer_id,email,ip,logged_in_time) values
			('$cid','$email','$ip','$logged_in')";
			if(mysqli_query($conn,$sql_insert_login))
				{
					//echo "log in success";
					
					?>
					<script>
					window.location = "jucie.php";
					</script>
					<?php
				}
			else
				{
					echo "Error:".$sql_insert_login."<br>".mysqli_error($conn);
				}
		}
 }
else
{

	
echo "username/password wrong";

}	
?>


