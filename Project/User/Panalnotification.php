<?php
   
     include("../Connection/Connection.php");
	 
   
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


     <!--Panel-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--end-->
<center>
<div class="w3-container">
<div class="w3-panel w3-pale-green" style="width:1050px;">

<marquee direction="left" style="animation-timing-function:ease;">

<?php

	$sel="select * from tbl_jobapply j inner join tbl_jobvacancy v inner join tbl_companyregistration u on v .jobvacancy_id=j.jobvacancy_id and  u.company_id=v.company_id where jobapply_status='1'";
	  $rows=mysql_query($sel,$con);
	$data=mysql_fetch_array($rows);
   	
	
	

 ?> 
</marquee>
</div>
</div></div></div>
</center>

</body>
</html>
