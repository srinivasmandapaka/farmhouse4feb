<?php 
session_start();
include('database/db_connect.php'); 
error_reporting(0);
?>



<?php
 //echo "hellllo"; //exit;
 
  /*?>if(isset($_GET['msg']) )
 {
 $product_id = $_GET['pd_id']; echo $product_id; //exit;
 $cu_id = $_SESSION['customer_id'];
 $no_items = $_GET['qty1'];
 }<?php */?> <?php 

$product_id = $_GET['pd']; //echo $product_id; //exit;
$cu_id = $_SESSION['customer_id']; //echo $cu_id;

$sql_vals_from_db = "select * from farmhouse_juice_details where product_id = '$product_id'";
$res_vals_from_db = mysqli_query($conn,$sql_vals_from_db);
$row_vals_from_db = mysqli_fetch_array($res_vals_from_db);

$product_price = $row_vals_from_db['price']; //echo $product_price; 
$no_items = $_GET['qty1']; 
//echo $no_items; exit;//echo "<br>".$product_price; 
$total_item_amount = $product_price * $no_items; //echo $total_item_amount;
$image_url = "product_images/".$row_vals_from_db['image']; //echo $image_url;
$ip = $_SERVER["REMOTE_ADDR"]; //echo $ip;//exit;
$product_name = $row_vals_from_db['name']; //echo $product_name; //exit;
$order_name = "Juice";
//echo "Item Added to the cart ".$no_items.$product_price;


//$total_item_amount = 10000;

if($_GET['msg']=='addtocart') {
$sql_add = "INSERT INTO farmhouse_temp_cart_fh(product_image_url, product_price, no_items, total_item_amount, ip, product_name, customer_id, product_id, order_name) values('$image_url','$product_price','$no_items','$total_item_amount','$ip','$product_name','$cu_id', '$product_id', '$order_name')";
$res_added = mysqli_query($conn,$sql_add);
if($res_added){
      
      //echo "Your product added Successfully";
	    ?>
					<script>
					window.location = "jucie.php";
					</script>
					<?php
}
else 
{

echo "not added to cart"; 
}
}// addtocart

if($_GET['msg']=='update') {

	$product_id = $_GET['pd']; echo $product_id; //echo "<br>"; //exit;
	$cu_id = $_SESSION['customer_id']; //echo $cu_id; echo "<br>";
	$tr_id = $_GET['t_id']; //echo $tr_id; echo "<br>";
	
	$sql_vals_from_db = "select * from farmhouse_temp_cart_fh where trans_id = '$tr_id'";
	$res_vals_from_db = mysqli_query($conn,$sql_vals_from_db);
	$row_vals_from_db = mysqli_fetch_array($res_vals_from_db);
	
	$product_price = $row_vals_from_db['product_price']; //echo $product_price; echo "<br>";
	$no_items = $_GET['qty1'];  //echo $no_items; echo "<br>";
	//echo $no_items; exit;//echo "<br>".$product_price; 
	$total_item_amount = $product_price * $no_items; echo $total_item_amount; echo "<br>";
	$image_url = "product_images/".$row_vals_from_db['image']; //echo $image_url;
	$ip = $_SERVER["REMOTE_ADDR"]; //echo $ip;//exit;
	$product_name = $row_vals_from_db['name']; //echo $product_name; //exit;
   
    //echo $cu_id; echo "<br>";
   $sql_up = "update farmhouse_temp_cart_fh set total_item_amount = '$total_item_amount' , no_items='$no_items' where trans_id='$tr_id' ";
   $res_up = mysqli_query($conn,$sql_up);
   if($res_up) {
   //header("Location:card1.php"); exit; 
   ?>
       				<script>
					window.location = "card1.php";
					</script>
					<?php
   }
   else
    echo "error";
  
}

?>



