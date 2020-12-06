<?php
		 include("../Connection/Connection.php");
		 
		 session_start();

		if(isset($_POST['btnLogin']))
		{
			$uname=$_POST["username"];
			$psw=$_POST["pass"];
			
			
			
			
			$sel="select * from tbl_userregistration where user_username='".mysql_real_escape_string($uname)."' and  user_password='".		   mysql_real_escape_string($psw)."'";
			$rows=mysql_query($sel,$con);
			$count=mysql_num_rows($rows);
			$fetch=mysql_fetch_array($rows);
			$_SESSION['userid'] = $fetch["user_id"];
			$_SESSION['userpass'] = $fetch["user_password"];
			$selq="select * from tbl_userregistration where user_username='".$uname."' and  user_password='".$psw."' and user_status='0'";
			//echo $sel;
			$rowsq=mysql_query($selq,$con);
		    $countq=mysql_num_rows($rowsq);
			
			//freelancer Login
			
			$self="select * from tbl_freelancer where freelancer_username='".$uname."' and  freelancer_password='".$psw."'";
			
			$rowsf=mysql_query($self,$con);
		    $countf=mysql_num_rows($rowsf);
			$fetchf=mysql_fetch_array($rowsf);
			$_SESSION['freelancerid'] = $fetchf["freelancer_id"];
			
			$selfr="select * from tbl_freelancer where freelancer_username='".$uname."' and  freelancer_password='".$psw."' and freelancer_status='0'";
			
			$rowsfr=mysql_query($selfr,$con);
		    $countfr=mysql_num_rows($rowsfr);	
			
			
			 //company Login
			  
            $selc="select * from tbl_companyregistration where company_username='".$uname."' and  
			company_password='".$psw."'";
			$rowsc=mysql_query($selc,$con);
		    $countc=mysql_num_rows($rowsc);
			$fetchc=mysql_fetch_array($rowsc);
			$_SESSION['companyid'] = $fetchc["company_id"];
			
			 $selcomp="select * from tbl_companyregistration where company_username='".$uname."' and  
			company_password='".$psw."' and company_status='0'";
			$rowcomp=mysql_query($selcomp,$con);
		    $countcomp=mysql_num_rows($rowcomp);
			
			
			
			//Admin Login
			
			
			$sela="select * from tbl_admin where admin_username='".mysql_real_escape_string($uname)."' and  admin_password='".mysql_real_escape_string($psw)."'";
			//echo $sel;
			$rowsa=mysql_query($sela,$con);
		    $counta=mysql_num_rows($rowsa);
			$fetcha=mysql_fetch_array($rowsa);
			
	  			 
	    if($countc>0&&$countcomp==0)
			 {
				
				
				 header("location:../Company/HomePage.php");
				 $_SESSION['name']=$fetchc['company_name'];
				 $_SESSION['companyid'] = $fetchc["company_id"];
				
				 }
			 
			  
			 else if($count>0&&$countq==0)
			 {
				
				$_SESSION['userid'] = $fetch["user_id"];
				$_SESSION['username'] = $fetch["user_name"];
				
				
				header("location:../User/Homepage.php");
			 }
			 
						
			  else if($countf>0&&$countfr==0)
			 {
				$_SESSION['freelancerid'] = $fetchf["freelancer_id"];
				$_SESSION['freelancername'] = $fetchf["freelancer_name"];
				
				header("location:../Freelancer/Homepage.php");
				  
			 }
			 
			 			 
			  else if($counta>0)
			 {
				
				header("location:../Admin/DashBoard.php");
				  
			 }
			 else if($countq>0)
		   {
			   echo "<script>alert('admin not accepted')</script>";
		   }
			 else if($countcomp>0)
		   {
			   echo "<script>alert('admin not accepted')</script>";
		   }
		    else if($countfr>0)
		   {
			   echo "<script>alert('admin not accepted')</script>";
		   }
			  		  
	else
{
    echo "<script>alert('Invalid Login')</script>";

}
           
		   

			 //status
			 
		 
			 			 
			  /* if($fetchc==1)
			 {
				
				
				 header("location:../Company/HomePage.php");
				 $_SESSION['statuscomp'] = $fetch["company_status"];
				 } 
			  
			 else if($fetch==1)
			 {
				$_SESSION['status'] = $fetch["user_status"];
				
				header("location:../User/Homepage.php");
			 }
			 
						
			  else if($fetchf==1)
			 {
				$_SESSION['statusfree'] = $fetch["freelancer_status"];
				header("location:../Freelancer/Homepage.php");
				  
			 }
			 else
			 {
				 echo "<script>alert('admin not accepted')</script>";
			 }
		*/
			 
		}
	
		
		?>
	


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<!--Symbols-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>

</head>


<body style="text-align:center;">
<!--Animation zoom-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   

	<div class="limiter">
		<div class="container-login100"><div class="w3-center w3-animate-zoom">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/giphy.gif);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <div class="input-container">
    <i class="fa fa-user icon w3-color-white"></i>
    
                   
                         
						<span class="label-input100">Username</span>
						<input class="input100" type="text" id="username" name="username" placeholder="Enter username" >
						<span class="focus-input100"></span></div>
					</div>
                    
                    <html lang="en">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
                    
<div class="container">
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                     <div class="input-container">
    <i class="fa fa-key icon"></i>
						<span class="label-input100">Password</span>
                        
  



						<a href="#" data-toggle="tooltip" title="Password field that must contain 6 or more characters!">
              <input class="input100" type="password" value="FakePSW" id="myInput" name="pass" placeholder="Enter password" ></a>
                        
                        <input type="checkbox" onclick="myFunction()">Show Password

                        </div>
                        
                        <!--Show password-->
                        <script>
                         function myFunction() {
                         var x = document.getElementById("myInput");
                                  if (x.type === "password") {
                                   x.type = "text";
                              } else {
                                              x.type = "password";
                           }
                   }
                                  </script>             

                        <!--End-->
                        <br/>
                        
						
					</div>
                    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<!--function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}-->


<!--
<input type="checkbox" onclick="myFunction()">Show Password
-->

</div>
					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
<input type="submit" class="login100-form-btn" id="btnLogin" name="btnLogin" value="Login"   style="size:10%">
							
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>