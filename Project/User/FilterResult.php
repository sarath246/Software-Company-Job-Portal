<?php


      include("../Connection/Connection.php");


     
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search result</title>
<link rel="stylesheet" type="text/css" href="formstyle.css" />
<?php
include("Links.php");
?>


<?php
include("HeaderJobApply.php");
?>

<!--Table-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--Panal-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">

</head><br/><br/><br/><br/><br/><br/><br/><br/>

<body>
<div class="w3-container w3-center w3-allerta">

<p class="w3-xxlarge w3-animate-zoom">Developing Company Vacancies</p></div>
<body style="background-color:lightgrey;" style="img src="https://static.kent.ac.uk/nexus/ems/818.jpg"">
<center>

<div id="tab" style="border-radius:10px; border:3px; width:1200px; background-image:url();" align="center">
<div class="w3-container">

<center>
<table border="0" class="w3-table w3-striped w3-bordered" border="0" width="60%" height="100"><br/><br/><br/>
<th><!--Company--></th>
<th><!--Job category--></th>
<th><!--Vacancy no.--></th>
<th><!--Qualification--></th>
<th><!--Last date--></th>
<?php
      $sel="select * from tbl_jobvacancy j inner join tbl_companyregistration c inner join tbl_jobcategory v inner join tbl_qualification q inner join tbl_district d on d.district_id=j.district_id and q.qualification_id=j.qualification_id and v.jobcategory_id=j.jobcategory_id and c.company_id=j.company_id 
	  where j.company_id='".$_GET['company_id']."' OR j.jobcategory_id='".$_GET['jobcategory_id']."' ";
		 // echo $sel;
	   $rows=mysql_query($sel);
	   while($data=mysql_fetch_array($rows))
	 
	{
?>


         


<tr class="w3-hover-grey">

<td style="color:#063;">
<?php echo $data['jobcategory_name']; ?>
</td>
<td>
       <img src="../Company/Proof/<?php echo $data['company_logo'];?>" width="80px" height="80px"/>
</td>
<td>
<td style="text-align:center;color:#F00;"><?php echo $data['vacancy_no'];?>&nbsp;<b style="color:#000;">Vacancy</b></td></td>
<td style="text-align:center;"><b>Qualification:</b><br/><?php echo $data['qualification'];?></td>
<td style="text-align:center;"><b>Job location:</b>&nbsp;<?php echo $data['district_name'];?></td>
       
    
<td style="text-align:center;"><b>Last Date:</b>&nbsp;<?php echo $data['last_datetoapply'];?></td>
<td width="12%" style="text-align:center;"><a href="JobApply.php?jobvacid=<?php echo  $data['jobvacancy_id'];?>">
         <b style="color:#060;">Apply</b></a></td>
         <!--<td><input type="submit" name="btnsave" id="btnsave" class="btn btn-success" value="Save job" /></td>
         --><!-- <td width="8%" style="text-align:center;"><a href="ViewCompany-Details.php?jobvacid=<?php echo $data['".$_SESSION["companyid"]."'];?>">Details</a></td>-->
       </tr>

<?php
 }
 ?>

</tr>
</table>
</center>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include("Footer.php");
?>
</body>

</html>