<?php
  include('database/db_connect.php');
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
    <title>TatSat</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="./css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<?php
if(isset($_POST['add']))
{

$email=$_POST["email"];
$password=MD5($_POST["password"]);
echo $email;
echo " ";
echo $password;
echo "<br>";

	$sql = "SELECT * from register where email = '$email' and password='$password'";
	$result = mysqli_query($conn,$sql);
	if(
	
	if(mysql
	while($row=mysqli_fetch_assoc($result))
			{
			echo $row['email']; echo " ";
						echo $row['password'];	
			}
	  
}
?>


<body>
<P align="center">
<div>
    <div class="container">
        
         <div class="row  pad-top">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        
                        <strong>   <h4> Login Here </h4> </strong>  
                            </div>
                            <div class="panel-body">
                                 <form action="<?php $PHP_SELF ?>" method="POST" name='signin' onsubmit="return validate();">
<br/>
                                          <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" name="email" class="form-control" placeholder="Your Email" />
                                          </div>
                                                                      
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control" placeholder="Enter Password" />
                                        </div>
										
										
                                     
                                   <input name = "add" type = "submit" value = "login"  class="btn btn-success">

                                    <hr />
                                    Forgot password ?  <a href="index.php?link=request_password" >Request Password</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="./js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="./js/bootstrap.js"></script>
</div>   

</body>
</html>
