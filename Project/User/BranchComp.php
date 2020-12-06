<?php

   		include("../Connection/Connection.php");
		




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--Animation zoom-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include("Links.php");
?>
<?php
include("HeaderJobApply.php")
?>
</head>

<body style="background-color:LightGray;">
<br/><br/>
<center>
<form action="" method="post">

<h3 align="center" style="background-color:#006600; font-size: 50px; font-weight: 400 !important; width:70%; color:#FFF; padding: 30px 10px; background-size: cover;">
<div class="w3-center w3-animate-zoom">
BRANCHES</div></h3>

<?php
  
$sel="select * from tbl_branch b inner join tbl_companyregistration c inner join tbl_state p  inner join tbl_district d on d.district_id=b.district_id and p.state_id=b.state_id and c.company_id=b.company_id";
	 
	 //echo $sel;
	 $rows=mysql_query($sel,$con);
	 while($data=mysql_fetch_array($rows))
  {

?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div style="width:70%;">
<table border="1" height="100" width="30" class="table table-dark table-striped table-hover" id="tbl" style="text-align:center;">
<tr class="bg-black text-white">
<th style="text-align:center;">Company</th>
<th style="text-align:center;">Branch</th>
<th style="text-align:center;">State</th>
<th style="text-align:center;">District</th>
<th style="text-align:center;">Address</th>
<th style="text-align:center;">Contact</th>
</tr>

<tr class="bg-black text-white">
<td align="center">
<img src="../Company/Proof/<?php echo $data['company_logo']; ?>" width="80px" height="80px"/></td>
<td align="center"><?php echo $data['branch_name']; ?></td>
<td align="center"><?php echo $data['state_name']; ?></td>
<td align="center"><?php echo $data['district_name']; ?></td>
<td align="center"><?php echo $data['branch_address']; ?></td>
<td align="center"><?php echo $data['branch_contact']; ?></td>
</tr>
</table></div>


<?php
  }
?>
</form>
</center>


<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include("../User/Footer.php");
?>
</body>
</html>