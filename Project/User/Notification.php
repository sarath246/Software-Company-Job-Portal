<?php

        include("../Connection/Connection.php");


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notification</title>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body style="background-color:LightGray;">
<br/><br/><br/>
<center>


<?php

	$sel="select * from tbl_jobapply j inner join tbl_jobvacancy v inner join tbl_companyregistration u on v .jobvacancy_id=j.jobvacancy_id and  u.company_id=v.company_id where jobapply_status='1'";
	  $rows=mysql_query($sel,$con);
	while($data=mysql_fetch_array($rows))
   {	
	
	
?>
<!--
<tr><td style="text-align:center;"><?php echo $data['company_name']; ?></td>
    <td><p style="text-align:center;">Apply Accepted</p></td>-->
    <td style="text-align:center;"><a href="UserVacancy.php">
</tr>
<?php
   }
?>


</table><br/>
</div>
<!--Spin-->

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--end-->
<div class="w3-center w3-animate-top">
<p style="font-size:30px;"><i class="fa fa-spinner w3-spin" style="font-size:64px"></i>
You have New Vacancies</p></div><br/><br/> 
<!--<div id="tab" style="border-radius:8px; border:2px solid #000; height:400%; width:27%; align="center">
-->


<!--Animation box-->
 <!--   
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-container w3-center w3-animate-zoom">
-->
<!--Panal-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!--Panal end-->

<!--Animation box end--> 
<div class="w3-container">
<div class="w3-panel w3-white">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="table" style="width:650px; height:2000px;">
<table border="0" width="40" height="400" class="w3-table w3-striped  w3-bordered">
<tr class="w3-green"><td style="text-align:center; font-size:18px;">
<b>Company</b></td><br/><br/></tr>
<?php
      $sele="select * from  tbl_jobvacancy a inner join tbl_companyregistration r on r.company_id=a.company_id  order by a.jobvacancy_id desc";
	 $row=mysql_query($sele,$con);
	 while($datas=mysql_fetch_array($row))
  {
?>
   <tr class="w3-hover-light-grey">
   <td style="text-align:center;">
   <img src="../Company/Proof/<?php echo $datas['company_logo']; ?> " width="120px" height="120px"/></td>
    <td style="text-align:center; font-size:15px;"><a href="JobApply.php?jobvacid=<?php echo $datas['jobvacancy_id']; ?>">Details & apply</a></td>
   </tr>
<?php
  }
?>


</table></div></div></div></div>
</div>
</center>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include("Footer.php");
?>

</body>
</html>