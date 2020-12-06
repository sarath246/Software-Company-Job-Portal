<?php


      include("../Connection/Connection.php");

      session_start();
     
	

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

</head><br/><br/>

<body>
<div class="w3-container w3-center w3-allerta">

<p class="w3-xxlarge w3-animate-zoom">Saved jobs</p></div>
<body style="background-color:lightgrey;" style="img src="https://static.kent.ac.uk/nexus/ems/818.jpg"">
<center>

<div id="tab" style="border-radius:10px; border:3px; width:1200px; background-image:url();" align="center">
<div class="w3-container">

<center>
<?php
      $sel="select * from tbl_save s inner join  tbl_companyregistration c on c.company_id=s.company_id inner join tbl_qualification q on q.qualification_id=s.qualification_id inner join tbl_jobcategory j on
	   j.jobcategory_id=s.jobcategory_id inner join tbl_jobvacancy v on v.jobvacancy_id=s.jobvacancy_id  where user_id='".$_SESSION['userid']."'";
	  // echo $sel;
	   $rows=mysql_query($sel);
	   while($data=mysql_fetch_array($rows))
	 
	{
?>

<table border="0" class="w3-table w3-striped w3-bordered" border="0" width="60%" height="100"><br/><br/><br/>
<th><!--Company--></th>
<th><!--Job category--></th>
<th><!--Vacancy no.--></th>
<th><!--Qualification--></th>
<th><!--Last date--></th>

        
<tr class="w3-hover-grey">


<td style="text-align:center; color:#093;"><b></b>&nbsp;<?php echo $data['jobcategory_name'];?></td>


<td>

       <img src="../Company/Proof/<?php echo $data['company_logo'];?>" width="80px" height="80px"/>
</td>

<td style="text-align:center; color:#F00;"><?php echo $data['vacancy_no'];?>&nbsp;<b style="color:#000;">Vacancy</b></td>

<td style="text-align:center;"><b>Qualification:</b>&nbsp;<?php echo $data['qualification'];?></td>

<td style="text-align:center;"><b>Last date:</b>&nbsp;<?php echo $data['jobapply_date'];?></td>


<td width="12%" style="text-align:center;"><a href="JobApply.php?jobvacid=<?php echo  $data['jobvacancy_id'];?>">
         <b style="color:#060;">Apply</b></a></td>
         




</tr>
</table><br/><br/>
<?php
 }
 ?>
</center>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include("Footer.php");
?>
</body>

</html>