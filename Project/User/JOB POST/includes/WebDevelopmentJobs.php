<?php

             // include("../Connection/Connection.php");

			 $con=mysql_connect("localhost","root","");
			 mysql_select_db("db_softwarecompany",$con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table200">
			<input type="text" name="txt_search" >
					<div class="table">

						<div class="row header">
							<div class="cell">
								Job Title
							</div>
							<div class="cell">
								Experience
							</div>
							<div class="cell">
								Company 
							</div>
							<div class="cell">
								Location
							</div>
							<div class="cell">
								Apply here
							</div>
						</div>



<?php   

 		$search=$_POST["txt_search"];

         $sel="select * from tbl_jobvacancy j inner join tbl_jobcategory c on c.jobcategory_id=j.jobcategory_id inner join tbl_qualification a on a.qualification_id=j.qualification_id  inner join tbl_companyregistration e on e.company_id=j.company_id 
		       inner join tbl_district d on d.district_id=j.district_id ";
			  // echo $sel;
		 $rows=mysql_query($sel,$con);
		 while($data=mysql_fetch_array($rows))
	{
		

?>
                           
						<div class="row">

							<div class="cell" data-title="Full Name">

							<?php echo $data['jobcategory_name'];?>
							
						</div>
							
						<div class="cell" data-title="Age">
						
						<?php echo $data['user_exp'];?>
						
					</div>
					
					<div class="cell" data-title="Job Title">
					
					<?php echo $data['company_name'];?>
					
				</div>
				
				<div class="cell" data-title="Location">
				
				<?php echo $data['district_name'];?>
				
			</div>

			<div class="cell" data-title="Apply here">
				
				<a href="#">Apply job</a>
				
			</div>
			
		</div>

						
<?php
	}
?>


					</div>

			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>