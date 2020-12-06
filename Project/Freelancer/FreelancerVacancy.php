<?php

             include("../Connection/Connection.php");



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("../User/Links.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="formstyle.css" />

<!--Location icon-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body style="background-color:lightgrey;">
<?php
include("../User/HeaderJobApply.php")
?>
<br />
<br />
<!--Spin-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Table-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!--Panal-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
<style>
.w3-allerta {
  font-family: "Allerta Stencil", Sans-serif;
}
</style>



<div class="w3-container w3-center w3-allerta">

<p class="w3-xxlarge w3-animate-zoom">Developing Company Vacancies</p></div>
<body style="background-color:lightgrey;" style="img src="https://static.kent.ac.uk/nexus/ems/818.jpg"">
<center>

<div id="tab" style="border-radius:10px; border:3px; width:1200px; background-image:url();" align="center">
<div class="w3-container">

       <?php   
         $sel="select * from tbl_jobvacancy j inner join tbl_jobcategory c on c.jobcategory_id=j.jobcategory_id
		 inner join tbl_qualification a on a.qualification_id=j.qualification_id
		 inner join tbl_companyregistration e on e.company_id=j.company_id 
		 inner join tbl_district d on d.district_id=j.district_id order by j.jobvacancy_id desc";
		 $rows=mysql_query($sel,$con);
		 while($data=mysql_fetch_array($rows))
	{
		?>
        <form id="form1" name="form1" method="post" action=""><br/><br/><br/><br/>
   <table class="w3-table w3-striped w3-bordered" border="0" width="60%" height="100">
       <tr>
       <td style="text-align:center;"><!--Job Category--></td>
       <td style="text-align:center;"><!--Company--></td>
       <td style="text-align:center;"><!--Number Of Vacancy--></td>
       <td style="text-align:center;"><!--Qualification--></td>
       <td style="text-align:center;"><!--Last Date To Apply--></td>
       </tr>
<tr class="w3-hover-grey">
       <td style="text-align:center;color:#063;"><?php echo $data['jobcategory_name'];?></td>
       <td style="text-align:center;">
	   <img src="../Company/Proof/<?php echo $data['company_logo'];?>" width="80px" height="80px"/></td>
       <td style="text-align:center; color:#F00;"><?php echo $data['vacancy_no'];?>&nbsp;&nbsp;<b style="color:#000;">Vacancy</b></td>
       <td style="text-align:center;"><b>Qualification:</b><br/><?php echo $data['qualification'];?></td>
       <td style="text-align:center;">
      <i class="material-icons">&#xe55f;</i>
       <b>Job location:</b>&nbsp;<?php echo $data['district_name'];?></td>
         <td style="text-align:center;"><b>Last date:&nbsp;&nbsp;</b><?php echo $data['last_datetoapply'];?></td>
         
         <td width="12%" style="text-align:center;"><a href="FjobApply.php?jobvacid=<?php echo  $data['jobvacancy_id'];?>"><b style="color:#060;">Apply</b></a></td>
          <?php /*?><td width="8%" style="text-align:center;"><a href="../User/ViewCompany-Details.php?jobvacid=<?php echo $data['".$_SESSION["companyid"]."'];?>">Details</a></td><?php */?>
       </tr>

<?php
	}
?>
</table>
</form>
</div>
</center>
<?php
include("../User/Footer.php");
?>

</body>
</html>