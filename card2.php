﻿<?php include('database/db_connect.php'); 
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

    <link href="skins/flat/blue.css" rel="stylesheet">
	<script src="js/icheck.js"></script>
	
	<script>
	function fun_pay_save() {
	
	                    var xmlhttp; alert("hii");
			            if( document.getElementById("p_d").checked ) 
						  var p_typ = document.getElementById("p_d").value;
						else if(document.getElementById("p_o").checked)
						var p_typ = document.getElementById("p_o").value; 
						
						
						alert(p_typ);
						
						
						 var rows = document.getElementById("hid").value ;
						 ///document.getElementById(i).value;
						 for (var i=0; i<=rows; i++) {
						 
						 
						if( document.getElementById(i).checked ) 
						      {
						      var p_m = 1;
					          var card_name = document.getElementById("db_card").value; 
							  alert(card_name); 
							  }
						}
							  
						/*else if(document.getElementById("cr_card").checked) {
						      var p_m = '2';
						      var card_name = document.getElementById("cr_card").value; }
						else if(document.getElementById("3rd").checked){
						    var p_m = '3';
						    var card_name = document.getElementById("3rd").value;
							 }*/
						alert(p_m+"-"+card_name+"-"+p_typ);
									  			
					/*if (window.XMLHttpRequest)
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
						 window.location.href="card3.php";
						 
						}
					  }
					xmlhttp.open("POST","add_to_cart.php?msg=pay&p_typ="+p_typ+"&card_name="+card_name+"&p_m="+p_m,true);
					xmlhttp.send();*/
					
		
	}
	</script>
	

</head>


<body class="payment">

<?php include("includes/header.php"); ?>

<section class="process fixed-top group">
	<div class="wrapper group">
    	<section class="back-button group">
            <div class="wrapper group">
                <a href="card1.php">BACK</a>
            </div>
        </section>
		
        <div class="steps group">
                <div class="step-1 active"><a href="card2.php">Choose Mode of Payment<span class="right"></span></a></div>
                <div class="step-2"><a href="card3.php">Confirm Payment<span class="right"></span><span class="left"></span></a></div>
                <div class="step-3"><a href="card4.php">Done<span class="left"></span></a></div>
        </div>
        
        <div class="sum group">
        	<div class="values">
            	<div class="half">The Order:<span>
 <?php $sql2="SELECT sum(total_item_amount) as total FROM farmhouse_temp_cart_fh where customer_id = '$cid'";
				      $res2 = mysqli_query($conn,$sql2); 
														  
				// Fetch one and one row
				      $row2=mysqli_fetch_assoc($res2);
				
                      echo "¥".$row2['total']."RMB"; ?>
                </span></div>
                <div class="half">Delivery Fee:<span>¥0.00 RMB</span></div>
            </div>
            <div class="total"><a href="#"><?php echo "¥".$row2['total']."RMB"; ?> </a></div>
        </div>
        
        <div class="pay group">
        	<div class="pay-on group">
            	<p><input type="radio" name="pay-on" class="round" id= "p_d" value="Pay on delivery"/> <span>Pay on delivery</span></p>
                <p><input type="radio" name="pay-on" class="round" checked id="p_o" value="Pay online"/> <span>Pay online</span></p>
            </div>

            <div class="pay-online group display">
            	<div class="tabs group">
                	<div class="tabs-links group">
                    	<ul>
                        	<li><a href="javascript:void(0)" class="active" id="tab-1">Debit Card</a></li>
                            <li><a href="javascript:void(0)" id="tab-2">Credit Card</a></li>
                            <li><a href="javascript:void(0)" id="tab-3">Third-Party Payment</a></li>
                        </ul>
                    </div>
                    <div class="tabs-content group">
                    	<div class="debit-card-content display">
						<?php
						$sql = "select * from  farmhouse_debit_card_details";
						$result = mysqli_query($conn,$sql); $rows = mysqli_num_rows($result);
						    for($r=1; $r<=$rows; $i++)
							{
							while($row = mysqli_fetch_array($result))
							{
								$img = $row['image']; echo $card_name;
								$imgpath = "db_card_images/".$img;
							?>	
								<figure>
                            	<div class="input"><input type="hidden" value="<?php echo $rows;?>" id="hid"><input type="radio" name="pick-bank" class="round" value="<?php echo $r;?>" id="" onClick="alert('hii')" checked="checked"/></div>
                                <div class="image"><img src = '<?php echo $imgpath; ?>'/></div>
                            </figure>
							<?php
							}
							}//for
						    ?>
						
                        	
                        </div>
                        
                        <div class="credit-card-content">
                        							<?php
						$sql = "select * from  farmhouse_credit_card_details";
						$result = mysqli_query($conn,$sql);
						
							while($row = mysqli_fetch_array($result))
							{
								$img = $row['image'];
								$imgpath = "cr_card_images/".$img;
							?>	
							<figure>
                            	<div class="input"><input type="radio" name="pick-bank" class="round" id="cr_card" value="<?php echo $row['card_name'];?>" onClick="alert('hii')"/></div>
                                <div class="image"><img src = '<?php echo $imgpath; ?>'/></div>
                            </figure>
                            <?php
							}
						    ?>
                            
                            
                        </div>
                        
                        <div class="third-party-payment-content">
						<?php
						$sql = "select * from farmhouse_third_party_payment_details";
						$result = mysqli_query($conn,$sql);
						
							while($row = mysqli_fetch_array($result))
							{
								$img = $row['image'];
								$imgpath = "th_party_images/".$img;
							?>	
                        	<figure>
                            	<div class="input"><input type="radio" name="pick-bank" class="round" id="3rd" value="<?php echo $row['pp_name'];?>"/></div>
                                <div class="image"><img src = '<?php echo $imgpath; ?>'</div>
                            </figure>
							 <?php
							}
						    ?> 
                        </div>
                    </div>
                </div>
                
                <section class="next-button group">
                    <div class="wrapper group">
                        <a href="#" onClick="fun_pay_save()">NEXT</a>
                    </div>
                </section>
                
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>

<script>
		$(document).ready(function() {
			$('#tab-1').click(function() {
				$(this).addClass('active');
				$('#tab-2').removeClass('active');
				$('#tab-3').removeClass('active');
				$('.debit-card-content').addClass('display');
				$('.credit-card-content').removeClass('display');
				$('.third-party-payment-content').removeClass('display');
			});
			
			$('#tab-2').click(function() {
				$(this).addClass('active');
				$('#tab-1').removeClass('active');
				$('#tab-3').removeClass('active');
				$('.debit-card-content').removeClass('display');
				$('.credit-card-content').addClass('display');
				$('.third-party-payment-content').removeClass('display');
			});
			
			$('#tab-3').click(function() {
				$(this).addClass('active');
				$('#tab-1').removeClass('active');
				$('#tab-2').removeClass('active');
				$('.debit-card-content').removeClass('display');
				$('.credit-card-content').removeClass('display');
				$('.third-party-payment-content').addClass('display');
			});
			
				// $('input.round1').click(function(){
			// 	if($(this).attr("value")=="pod"){
			// 		$(".pay-on-delivery").addClass('display');
			// 		$(".pay-online").removeClass('display');
			// 	}
			// 	if($(this).attr("value")=="po"){
			// 		$(".pay-online").addClass('display');
			// 		$(".pay-on-delivery").removeClass('display');
			// 	}
			// });
		});
        </script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>