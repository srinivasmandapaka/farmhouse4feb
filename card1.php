<?php 
include('database/db_connect.php'); 
error_reporting(0);
session_start();
$cid = $_SESSION["customer_id"];
?>
<!DOCTYPE html>
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

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<script type="text/javascript" src="slick/slick.min.js"></script>

    <link href="webstyle/sumoselect.css" rel="stylesheet" />
    <script src="js/jquery.sumoselect.min.js"></script>
    
	<link href="skins/flat/grey.css" rel="stylesheet">
	<script src="js/icheck.js"></script>
	 
	 
	 <script>
	 function fun_del(qty,id) {
					
					//var qt = qty;
					 var qt = qty; var p_id = id; //alert(id); alert(qty);
					if( (document.getElementById(p_id).value - 1  < 0))
					return;
					else 
					document.getElementById(p_id).value--; 
				   								
					}
					
	function fun_add(qty,id) {
					
					//var pric = price; var trid = tr_id; var tot_amt = tot; var gnd_tot = gd_total; //alert(gnd_tot); 
					//alert(trid);
					//var qt = qty;
					var p_id = id; var qt = qty; //alert(qt);
					document.getElementById(p_id).value++;
		
					}
		function fun_save(id,qty,tr_id) {
		  var p_id = id; var qt = qty; var trid = tr_id; //alert(trid);
		  window.location.href="add_to_cart.php?msg=update&pd="+p_id+"&qty1="+qt+"&t_id="+trid;
          //alert(qty);				
		}			
	 
	   
	       function fun_del_row(tr_id) <!--for deletion-->
				{
					var xmlhttp; 
					  			
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						 if(xmlhttp.responseText == "")
						 window.location.href="card1.php";
						 
						}
					  }
					xmlhttp.open("POST","add_to_cart.php?msg=del&tr_id="+tr_id,true);
					xmlhttp.send();
				}			
	      
		   function fun_adrs_save() { <!--for saving address-->
		     
			 
		    var xmlhttp; 
			    if(document.getElementById("def_address2").checked) {
							   
				     var text = document.getElementById("adrs").value;
					 var text1 = document.getElementById("district").value;
					 var text2 = document.getElementById("city").value;
					 var add =  text.concat(text1,text2);
									  			
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						 if(xmlhttp.responseText == "")
						 window.location.href="card1.php";
						 
						}
					  }
					xmlhttp.open("POST","add_to_cart.php?msg=save_adrs&add="+add,true);
					xmlhttp.send();
					} // ends if
		   
		      }
						
		
				
	 </script>   

</head>
<body class="shopping-card">

<?php include("includes/header.php"); ?>
  <form method="post" action="">
<section class="fixed-top gropu"><div class="wrapper"><h2>MY CART</h2></div></section>

<section class="select-all gray border-bottom group">
	<div class="wrapper group">
    	<div class="select"><input type="checkbox" name="select-all" checked /> Select All</div>
        <div class="product-info">Product Info</div>
        <div class="quantity">Quantity</div>
        <div class="price">Price</div>
        <div class="manage">Manage</div>
    </div>
</section>

<section class="subscription group">
	<div class="wrapper">
    	<input type="checkbox" name="Subscriptions" checked /> Subscriptions
        <div class="clear"></div>
        <p>*If you want to change the schedule or address of your subscription, please click <span style="font-style:italic">RESCHEDULE</span> to edit.</p>
    </div>
</section>

<!--<section class="subscription-box gray group">
	<div class="wrapper group">
    	<div class="check"><input type="checkbox" name="Subscriptions-detox" checked /></div>
        <div class="image"><img src="images/icon-basket-detox-blue.png" alt="Detox" /></div>
        <div class="type">
        	<span class="group">A</span>
            <span class="last group">B</span>
        </div>
        <div class="quantity">
        	<span class="group">5</span>
            <span class="last group">3</span>
        </div>
        <div class="price">
        	<span class="group">¥1020.00 RMB</span>
            <span class="last group">¥408.00 RMB</span>
        </div>
        <div class="manage">
        	<span class="group"><a href="#" class="reschedule">Reschedule</a><a href="#" class="delete">Delete</a></span>
        	<span class="last group"><a href="#" class="reschedule">Reschedule</a><a href="#" class="delete">Delete</a></span>
        </div>
    </div>
</section>-->

<!--<section class="subscription-box border-bottom group">
	<div class="wrapper group">
    	<div class="check"><input type="checkbox" name="Subscriptions-detox" checked /></div>
        <div class="image"><img src="images/icon-basket-lifestyle-blue.png" alt="Detox" /></div>
        <div class="type">
            <span class="last group">B</span>
        </div>
        <div class="quantity">
            <span class="last group">3</span>
        </div>
        <div class="price">
            <span class="last group">¥408.00 RMB</span>
        </div>
        <div class="manage">
        	<span class="last group"><a href="#" class="reschedule">Reschedule</a><a href="#" class="delete">Delete</a></span>
        </div>
    </div>
</section>-->

<section class="retail gray group">
	<div class="wrapper">
    	<input type="radio" name="retail" checked /> Retail
        <div class="address-list group">
        	<figure class="group">
                <div class="address-no"><input type="radio" name="def-address" checked  value="Default Address" id="def_address1"/> Default Address:</div>
                <div class="address-details">No.***, *** Bilding, *** Street, *** District, *** City</div>
                <div class="address-action"><a href="#" onClick="fun_edit_addres()">Edit</a></div>
            </figure>
                       
            <figure class="group add-new-address">
                <div class="address-no"><input type="radio" name="def-address" value="Address2" id="def_address2"/> Address 2:</div>
                <div class="address-details">
                	<div class="add-address">
                    	<textarea name="address" placeholder="No.***, *** Building, *** Street" rows="5" id="adrs"></textarea>
                    </div>
                    <div class="add-address-dc">
                    	<p><select class="SlectBox" name="district" id="district">
                            <option value="Huangpu">Huangpu</option>
                            <option value="Huangpu1">Huangpu1</option>
                        </select></p>
                        <p class="text">District,</p>
                        <p><select class="SlectBox" name="city" id="city">
                            <option value="ShanghaiShanghai">Shanghai</option>
                            <option value="Shanghai1">Shanghai1</option>
                        </select></p>
                        <p class="text">City</p>
                    </div>
                </div>
				
                <div class="address-action"><a href="#" onClick="fun_adrs_save()">Save</a></div>
            </figure>
            <p class="text-center"><a href="#" class="add-more-address">Add More Address</a></p>
        </div>
    </div>
</section>

<section class="retail-box group">
<?php 
//echo $cid;
$sql_ct = "select * from farmhouse_temp_cart_fh  where customer_id = '$cid'";
				$res_ct = mysqli_query($conn,$sql_ct); 
				while($row_ct = mysqli_fetch_array($res_ct))
				{ ?>
	    <div class="wrapper">
    	<div class="check"><input type="checkbox" name="retail-product" checked /></div>
		
				<?php // echo $row_ct['product_image_url'];?>
				<div class="image"><img src="<?php echo $row_ct['product_image_url'];?>" /></div>
				
        <div class="type">
        	<div class="padding">
                <!--<div class="circle">
                    <div class="central"><!--<img src="images/icon-num4-wide.png" /></div>
                </div>-->
                <span><?php echo $row_ct['product_name'];?> </span>
               </div>
        </div>
			 
        
        <div class="quantity">
            <div class="number">
			    
				    <input type='button' name='add' onclick='return fun_add(<?php echo $row_ct['no_items'];?>,<?php echo $row_ct['product_id'];?>);' value=' + '/>
                    
				    <input type='text' name='no1' class="no1" id='<?php echo $row_ct['product_id'];?>' value='<?php echo $row_ct['no_items'];?>' size = "1"/>
                   
				    <input type='button' name='subtract' onclick='return fun_del(<?php echo $row_ct['no_items'];?>,<?php echo $row_ct['product_id'];?>);' value=' - '/>
			    
				<?php /*?><a href="#" class="remove" onClick="fun_del(<?php echo $row_ct['no_items']; ?>,<?php echo $row_ct['product_id'];?>);">-</a>
				<div class="num" id="<?php echo $row_ct['product_id'];?>"><?php echo $row_ct['no_items']; ?></div>
				<?php /*?><a href="#" class="add" onClick="fun_add(<?php echo $row_ct['no_items']; ?>,<?php echo $row_ct['product_id'];?>);">+</a><?php */?>
				
			</div>
        </div>
        
		<div class="price">
            <span class="last group" id="tot">¥<?php echo $row_ct['product_price']; ?> RMB</span>
        </div>
        <div class="manage">
		
		<span class="last group"><a href="#" onClick="fun_del_row(<?php echo $row_ct['trans_id'];?>)">Delete</a></span>
        <span class="last group"><a href="#" id="keyword" onclick='fun_save(<?php echo $row_ct['product_id'];?>,document.getElementById(<?php echo $row_ct['product_id'];?>).value,<?php echo $row_ct['trans_id'];?>);'>Save</a></span>
        </div>
    </div>
	<?php	} ?>
</section>



<section class="gift-card-check-out border-top group">
	<div class="wrapper">
    	<div class="gift-card f-right"><input type="checkbox" name="gift-card" /> Use gift card <input type="text" name="gift-text" placeholder="Fill the Serial Number" /><input type="submit" name="submit" value="Enter" /></div>
        
        <div class="clear"></div>
        <div class="details">
        	<div class="select-all"><input type="checkbox" name="select-all" checked /> Select All</div>
            <div class="delete"><a href="#">Delete</a></div>
            <div class="total">In Total: <span><?php $sql2="SELECT sum(total_item_amount) as total FROM farmhouse_temp_cart_fh where customer_id = '$cid'";
				      $res2 = mysqli_query($conn,$sql2); 
														  
				// Fetch one and one row
				      $row2=mysqli_fetch_assoc($res2);
				
                      echo "¥".$row2['total']."RMB"; ?></span></div>
        </div>
        <div class="checkout"><button onClick="sendtocard2()"><a href="card2.php">Check Out</a></button></div>
        
    	
    </div>
</section>
</form>

<?php include("includes/footer.php"); ?>

<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>