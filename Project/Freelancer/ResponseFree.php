<?php

  		include("../Connection/Connection.php");
		session_start();



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include("Links.php");
?>
<!--Table hover-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--end-->
<!--Card-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!--Time icon-->
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--Location icon-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<style>
#cardc {width:60%; height:30%; border-radius:20px;}
</style>
</head>

<body>
<?php
include("../User/HeaderJobApply.php")
?>
<br/><br/><br/><br/><br/><br/>
<center>
<!--<div style="height:30%; width:70%;">
<table class="w3-table-all w3-hoverable" border="1" width="70%" height="40">
<tr class="w3-light-grey">
<th style="text-align:center;">Company</th>
<th style="text-align:center;">Interview Date</th>
<th style="text-align:center;">Reporting Time</th>
<th style="text-align:center;">Location</th>
<th style="text-align:center;">Selection Process</th>
<th style="text-align:center;">Bring the venue</th>
</tr>-->
<?php

		$sel="select * from tbl_freemsg fs inner join tbl_companyregistration co on co.company_id=fs.company_id
		 where freelancer_id='".$_SESSION['freelancerid']."' order by fs.freemsg_id";
		$rows=mysql_query($sel,$con);
		
		while($data=mysql_fetch_array($rows))
	{
		
		
		
		
?>
<form id="form1" name="form1" method="post" action="">
<div class="w3-container">
<div class="w3-panel w3-card w3-white w3-card-hover" id="cardc">
<br/><br/>
<table border="0" width="100%" height="100">
<!--<tr class="w3-light-grey" style="height:60px; background-color:#0C6;">
<th style="text-align:center;">Company</th>
<th style="text-align:center;">Interview Date</th>
<th style="text-align:center;">Reporting Time</th>
<th style="text-align:center;">Location</th>
<th style="text-align:center;">Selection Process</th>
<th style="text-align:center;">Bring the following</th>
</tr>-->

<tr align="center">
<td style="text-align:center;"><img src="../Company/Proof/<?php echo $data['company_logo']; ?>" width="120px" height="120px"/></td>
</tr></table><br/>
<tr><b style="text-align:left;">Hai,</b>&nbsp;&nbsp;<?php echo $_SESSION['freelancername']; ?></tr>
<table border="1" width="100%" height="100">
<tr>
<td style="text-align:center;"><i style='font-size:24px' class='far'>&#xf073;</i>
<b>Date:</b>
&nbsp;&nbsp;<?php echo $data['msg_date']; ?></td>
<td style="text-align:center;"><i style='font-size:24px' class='fas'>&#xf017;</i>&nbsp;&nbsp;<?php echo $data['msg_time']; ?>&nbsp;&nbsp;<?php echo $data['msg_ampm']; ?></td></table><br/>
<td style="text-align:center;"><i class="material-icons">&#xe55f;</i>&nbsp;&nbsp;<?php echo $data['msg_loc']; ?></td><br/><br/><br/>
<table border="1" width="100%" height="100">
<td style="text-align:center;"><?php echo $data['msg_sel']; ?></td>
<td style="text-align:center;"><b>You should take:&nbsp;</b><?php echo $data['msg_venue']; ?></td>
</tr>
</table><br/>
<b>Thank you!</b>
<br/><br/><br/><br/></div></div>
<?php
	}
?>
<br/><br/><br/><br/></form>


<br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/>

</table>
</div>
</center>
<br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/>
<?php
include("Footer.php");
?>
</body>

</html>