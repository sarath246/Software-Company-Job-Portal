<?php

          include("../Connection/Connection.php");
		  
		  session_start();
		        
		  if(isset($_POST['btnsave']))
	{
		 $Apply=$_GET["aid"];
		 $ApplyDate=date('Y-m-d');
		 $NoOfVacancy=$_POST["txtVacancy"];
		 $comp=$_GET["company_id"];
		 
		   //Proof
		   
          $proof=$_FILES["fleResume"]["name"];
		  
		  $temp=$_FILES["fleResume"]["tmp_name"];
		  move_uploaded_file($temp,"../User/Proof/".$proof);
		   
		 
         $ins="insert into tbl_jobapply(user_id,jobapply_date,jobvacancy_id,upload_resume,company_id)
		 values('".$_SESSION['userid']."','".$ApplyDate."','".$_GET['jobvacid']."','".$proof."','".$comp."')";
		 
		
		
		 mysql_query($ins,$con);
	}
	
	       if(isset($_POST['submit']))
     {
		  
		 $user=$_SESSION['userid']; 
		 $Apply=$_GET["aid"];
		 $ApplyDate=date('Y-m-d');
		 $jobvacancy=$_GET['jobvacid'];
		 
		 $comp=$_GET["company_id"];
		 $jobcategory=$_GET["jobcategory_id"];
		 $qualification=$_GET["qualification_id"];
		 $experience=$_GET["user_exp"];
		 $vacancynum=$_GET["vacancy_no"];
		 
		 
		 
		 
         $insert="insert into tbl_save(company_id,jobvacancy_id,user_id,jobapply_date,jobcategory_id,qualification_id,user_exp,vacancy_no)
		 values('".$comp."','".$jobvacancy."','".$user."','".$ApplyDate."','". $jobcategory."','".$qualification."','".$experience."','".$vacancynum."')";
		 
		
		
		 mysql_query($insert,$con);
		 
	 }
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("../Includes/head.php");
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Job application</title>
<!--<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>-->
<link rel="stylesheet" type="text/css" href="formstyle.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://static.kent.ac.uk/nexus/ems/818.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<style>
#btnsave{width:30%; border-radius:20px;}
</style>
<style>
#submite{width:30%; border-radius:20px;}
</style>

<style>
#submit{background-color:#666; color:#FFF;}
</style>
</head>
<body>
</head>

<body style="background-color:lightgrey;">


<?php
include("../Includes/sidebar.php");
?>
<div class="main-panel">
<?php
include("../Includes/navbar.php");
?>
<center>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="w3-container">
<div class="w3-panel w3-card w3-light-green w3-animate-zoom" id="cardc">
 
 </div>
 </div>
 <br /><br />
 <!--Card-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
#cardc {width:60%; border-radius:20px;}
</style>
<!--End-->

<div class="w3-container">
<div class="w3-panel w3-card w3-white" id="cardc">
 
<!--<div id="tab" style="border-radius:8px; border:2px solid #000 ; width:55%; background-color:" align="center"> 
--><?php
      $sel="select * from tbl_jobvacancy j inner join tbl_jobcategory c on c.jobcategory_id=j.jobcategory_id  inner join 
	  tbl_qualification a on     a.qualification_id=j.qualification_id inner join tbl_companyregistration e on e.company_id=j.company_id where
	   j.jobvacancy_id='".$_GET['jobvacid']."'";
	  $rows=mysql_query($sel,$con);
	$data=mysql_fetch_array($rows);

?>

     	 <table width="700" height="350">
    <tr>
      <th width="217" scope="row" style="text-align:center;">Company</th>
      <td width="226">
      <img src="../Company/Proof/<?php echo $data['company_logo']; ?>" width="150px" height="150px"/>      </td>
     </tr>
    <tr>
      <th scope="row" style="text-align:center;">Qualification</th>
      <td><?php echo $data['qualification']; ?></td>
          </tr>
    <tr>
      <th scope="row" style="text-align:center;">Category</th>
      <td>
      <?php echo $data['jobcategory_name']; ?></td>
    </tr>
    <tr>
      <th scope="row" style="text-align:center;">No. of Vacancy</th>
      <td><?php echo $data['vacancy_no']; ?></td>
    </tr></table>
    
     <table width="700" height="350">
 
    <tr>
      <th scope="row" style="text-align:center;">Experience</th>
      <td><?php echo $data['user_exp']; ?></td>
    </tr>
    <?php /*?><tr>
      <th scope="row" style="text-align:center;">Location</th>
      <td><?php echo $data['state_name']; ?></td>
    </tr><?php */?>
    <tr>
      <th scope="row" style="text-align:center;">Last Date</th>
      <td><?php echo $data['last_datetoapply']; ?></td>
    </tr>
  
    
   </table>
    
    </br>
    </br>

 

 
</center></div></div></div>

</form>


</body>
</html>