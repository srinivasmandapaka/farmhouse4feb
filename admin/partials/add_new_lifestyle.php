<?php
include('database/db_connect.php');
//error_reporting(0);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Admin Sign up Page</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="./css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	   <link href="http://cdn-na.infragistics.com/igniteui/2014.2/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet" />
    <link href="http://cdn-na.infragistics.com/igniteui/2014.2/latest/css/structure/infragistics.css" rel="stylesheet" />

    <script src="http://modernizr.com/downloads/modernizr-latest.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>

    <!-- Ignite UI Required Combined JavaScript Files -->
    <script src="http://cdn-na.infragistics.com/igniteui/2014.2/latest/js/infragistics.core.js"></script>
    <script src="http://cdn-na.infragistics.com/igniteui/2014.2/latest/js/infragistics.lob.js"></script>

	

<script type="text/javascript">
               $(document).ready(function(){
                    $("#button").click(function(){
                          var name=$("#name").val();
						  var email=$("#email").val();
						  var mobile=$("#mobile").val();
                          var password=$("#password").val();
						  var address=$("#address").val();
                          $.ajax({
                              type:"post",
                              url:"register_process.php",
                              data:"name="+name+"&email="+email+"&mobile="+mobile+"&password="+password+"&address="+address,
                              success:function(data){
                                 $("#info").html(data);
                              }
                           });
                     });
               });
       </script>
</head>
<body>
   <style>        
        .combo-label {margin-bottom:.5em;}
    </style>
 <form method="POST">
 
    <div class="container">
		<div class="row  pad-top">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  <h4> Add New Life Style </h4></strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form">
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Life Style Name</span>
                                            <input type="text" name="name" class="form-control" id= "name" placeholder="Your Name" />
                                        </div>
<section class="slider fixed-top group">
	<div class="wrapper group">
	<?php 
	$sql_pro = "select name from farmhouse_juice_details order by product_id";
	$res_pro = mysqli_query($conn,$sql_pro);
	
	
	 
	
	
	//$img2 = $row_pro['image2'];
	//$name = $row_pro['name'];
	?>
    	
	
		 <div id="checkboxSelectCombo"></div>

    <script>
           //var colors = <?php  echo $img2;?>;
		<?php 
		 $row_pro = mysqli_fetch_array($res_pro) ;
         $rows = mysqli_num_rows($res_pro);		
		 for($i = 0; $i<$rows; $i++){
		 ?>
          var colors = [];
          colors['<?php echo $i;?>'] = <?php echo $rows['name']?>; 				
		 <?php  }
	
	//} // ends while here
	//echo "</td></tr>";
	?>

        $(function () {

                     
            $("#checkboxSelectCombo").igCombo({
                width: "270px",
                dataSource: colors,
                textKey: "Name",
                valueKey: "Name",
                multiSelection: "onWithCheckboxes"
            });

        });

    </script>
		
		
        
        
        </div>
		
        
        
    </div>
</section>
										
										
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">Price for this lifestyle</span>
                                            <input type="text" name="price" class="form-control" id="price" placeholder="Your Email" />
                                        </div>
										
										
										    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"  ></i></span>
                                            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile No" />
                                        </div>
										
										
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" name="confirm_password" class="form-control"  id="confirm_password" placeholder="Retype Password" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <textarea  name="address" id = "address" class="form-control" placeholder="Address" /></textarea>
                                        </div>
<!--                                     <a href="#" class="btn btn-success ">Register Me</a> -->
									<input type = "button" value = "Register Me" id = "button">
                                    <hr />
                                    Already Registered ?  <a href="index.php?link=login" >Login here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
<div id = "info" >  Msg </div>

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="./js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="./js/bootstrap.js"></script>
</form>   
</body>
</html>
