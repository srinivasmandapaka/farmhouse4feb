<?php include('database/db_connect.php'); 
error_reporting(0);
session_start();
$cid = $_SESSION["customer_id"];
?>
<header class="group">
	<div class="wrapper group">
    	<div class="logo group"><a href="index.php"><img src="images/logo-big.png" alt="Logo" /></a></div>
        <div class="top-menu">
        	<ul>
            	<li><a href="javascript:void(0)" class="card"></a></li>
                <li><a href="javascript:void(0)" class="lang"></a>
                	<ul class="sub-menu">
                    	<li><a href="" class="active">Eng</a></li>
                        <li><a href="">Chi</a></li>
                    </ul>
                </li>
            </ul>

            <div class="check-my-card group">
            	<div class="check-it group"><a href="card1.php">CHECK MY CART</a>
				<?php $sql2="SELECT sum(total_item_amount) as total FROM farmhouse_temp_cart_fh where customer_id = '$cid'";
				      $res2 = mysqli_query($conn,$sql2); 
														  
				// Fetch one and one row
				      $row2=mysqli_fetch_assoc($res2);
				
                      echo "¥".$row2['total']."RMB"; ?></div>
                <div class="title gray group">Subscriptions:</div>
                
                <div class="subscriptions white group">
                	<div class="image detox group">DETOX</div>
                    <!--<div class="details-two group">
                    	<div class="row group">
                        	<div class="f-left">A</div>
                            <div class="f-right">5</div>
                        </div>
                        <div class="clear"></div>
                        <div class="row group">
                        	<div class="f-left">C</div>
                            <div class="f-right">2</div>
                        </div>
                    </div>-->
                </div>
                
                <div class="subscriptions gray group">
                	<div class="image lifestyle group">LIFESTYLE</div>
                    <!--<div class="details-one group">
                    	<div class="row group">
                        	<div class="f-left">B</div>
                            <div class="f-right">3</div>
                        </div>
                    </div>-->
                </div>
                
                <div class="title white group">Retail:</div>
				<?php 
				$sql_ct = "select * from farmhouse_temp_cart_fh where customer_id = '$cid'";
				$res_ct = mysqli_query($conn,$sql_ct);
				while($row_ct = mysqli_fetch_array($res_ct))
				{
				?>
				<div class="reatil-box gray group">
                	<div class="image"><img src="<?php  echo $row_ct['product_image_url'];?>"  height="60"/> </div>

	                   <div class="name"><b><?php  echo $row_ct['product_name'];?></b></div>
                    <div class="number">
                    	<div class="value">
                        	<a href="#" class="remove">-</a>
                            <div class="num">8</div>
                            <a href="#" class="add">+</a>
                        </div>
                    </div>
                </div>
				
				<?php }
				
				?>
                
             
                
            </div>
        </div>
        <nav class="menu group">
        	<ul>
            	<li><a href="index.php" class="home active"></a></li>
                <li><a href="jucie.php">JUICE</a></li>
                <li><a href="lifestyle.php">FARMHOUSE LIFESTYLE</a></li>
                <li><a href="detox.php">DETOX</a></li>
                <li><a href="info.php">INFO AND F.A.Q</a></li>
                <li> <?php if ($_SESSION["customer_name"]=="")
					 {
					        echo "<a href='front.php'>"; echo "LOGIN"; echo "</a>";  echo "| <a href='signup.php'>SIGN UP</a>";
							 }
					 else
					 { echo $_SESSION["customer_name"];
				 echo "| <a href='logout.php'>Logout</a></li> </a>";
				 }						 
				 ?>
            </ul>
        </nav>
        <a href="#" class="menu-toggle"></a>
    </div>
</header>