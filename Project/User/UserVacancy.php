<?php
 
    include("../Connection/Connection.php");
   
    		session_start();
	     if(isset($_POST['submit']))
	{
		 
		 $Apply=$_GET["aid"];
		 $ApplyDate=date('Y-m-d');
		 $NoOfVacancy=$_POST["txtVacancy"];
		 $comp=$_GET["companyid"];
		 $last_datetoapply=$_GET['last_datetoapply'];
		 $qualification=$_GET['qualification_id'];
		 $vacancy_no=$_GET['vacancy_no'];
		 $district=$_GET['district_id'];
		 
        $ins="insert into tbl_save(user_id,freelancer_id,company_id,vacancy_no,qualification_id,last_datetoapply,district_id)values
		        ('".$_SESSION['userid']."','".$_SESSION['freelancerid']."','".$comp."','".$vacancy_no."','".$qualification."',
				'".$last_datetoapply."','".$district."')";
	
		 mysql_query($ins,$con); 
		 //echo $ins;
	}
   
   
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User vacancy</title>
<!--<style>
body {
background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>-->

<link rel="stylesheet" type="text/css" href="formstyle.css" />
<?php
include("Links.php");
?>


<?php
include("HeaderJobApply.php");
?>
</head>
<br/><br/>

<!--Spin-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Table-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!--Panal-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
<style>
.w3-allerta {
  font-family: "Allerta Stencil", Sans-serif;
}
</style>


<body style="background-color:lightgrey;" style="img src="https://static.kent.ac.uk/nexus/ems/818.jpg"">

<?php
//$date = time();
//$datas=date('Y-m-d');
//echo $date;
//echo $datas;
//include('Filter.php');
?>
<!--Location icon-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<div class="w3-container w3-center w3-allerta">

<p class="w3-xxlarge w3-animate-zoom">Developing Company Vacancies</p>

</div>
<center>
<div style="border-radius:10px; border:3px; width:1200px; background-image:url();" align="center">
<!--<div class="w3-container w3-center" style="margin-left:20%">-->

<?php   
         $sel="select * from tbl_jobvacancy j inner join tbl_jobcategory c on c.jobcategory_id=j.jobcategory_id inner join tbl_qualification a on a.qualification_id=j.qualification_id  inner join tbl_companyregistration e on e.company_id=j.company_id 
		       inner join tbl_district d on d.district_id=j.district_id order by j.jobvacancy_id desc";
			  // echo $sel;
		 $rows=mysql_query($sel,$con);
		 while($data=mysql_fetch_array($rows))
	{
		

?>

<form id="form1" name="form1" method="post" action="">
<table class="w3-table w3-striped w3-bordered" align="center" border="0" width="60%" height="100"><br/><br/><br/><br/><br/><br/>
       <tr>
       <td style="text-align:center;"><!--<b>Job Category</b>--></td>
       <td style="text-align:center;"><!--<b>Company</b>--></td>
       <td style="text-align:center;"><!--<b>No. Of Vacancy</b>--></td>
       <td style="text-align:center;"><!--<b>Qualification</b>--></td>
       <td style="text-align:center;"><!--<b>Last Date To Apply</b>--></td>
       </tr>
       


<tr class="w3-hover-grey">
       <td style="text-align:center; color:#063;"><?php echo $data['jobcategory_name'];?></td>
       <td style="text-align:center;">
	   <img src="../Company/Proof/<?php echo $data['company_logo'];?>" width="80px" height="80px"/></td>
       <td style="text-align:center;color:#F00;"><?php echo $data['vacancy_no'];?>&nbsp;<b style="color:#000;">Vacancy</b></td>
       <td style="text-align:center;"><b>Qualification:</b><br/><?php echo $data['qualification'];?></td>
       <td style="text-align:center;">
      <i class="material-icons">&#xe55f;</i>
       <b>Job location:</b>&nbsp;<?php echo $data['district_name'];?></td>
         <td style="text-align:center;"><b>Last Date:</b>&nbsp;<?php echo $data['last_datetoapply'];?></td>
         <td width="12%" style="text-align:center;"><a href="JobApply.php?jobvacid=<?php echo  $data['jobvacancy_id'];?>">
         <b style="color:#060;">Apply</b></a></td>
        </tr> 
         <!--<input type="submit" name="submit" id="submit" class="btn btn-success" value="Save job" />--></td>
         <!-- <td width="8%" style="text-align:center;"><a href="ViewCompany-Details.php?jobvacid=<?php echo $data['".$_SESSION["companyid"]."'];?>">Details</a></td>
       </tr>
<!--
<svg height="80" width="300">
  <g fill="none" stroke="black">
    <path stroke-width="1" d="M5 20 l215 0" width="500"/>
      </g>
  </svg>
 -->


<?php
	}
?>


</table><br/><br/><br/><br/>
</form>
</div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include("Footer.php");
?>
</body>
</html>