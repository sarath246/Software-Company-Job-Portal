<?php
		 //include("..\Connection\Connection.php");
		 
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
				
				
				header("location:../New Index/index.html");
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
	<title>Login </title>
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Sign In 
					</span>

					<a href="#" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-20">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="btnLogin">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="../SIGN UP/colorlib-regform-4/Signup.php" class="txt2 bo1">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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