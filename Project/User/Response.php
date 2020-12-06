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
<!--Time icon-->
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--Location icon-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<?php
include("HeaderJobApply.php")
?>
<br/><br/>
 <!--Card-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">

<center>
<style>
#cardc {width:60%; height:30%; border-radius:20px;}
</style>
<!--End-->
<body>

<div class="w3-container w3-center w3-allerta">

<p class="w3-xxlarge w3-animate-zoom">Company responses</p>

</div>

<br/><br/>

<?php

		$sel="select * from tbl_usermsg us inner join tbl_companyregistration co on co.company_id=us.company_id
		 where user_id='".$_SESSION['userid']."' order by us.usermsg_id";
		//echo $sel;
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
<tr><b style="text-align:left;">Hai,</b>&nbsp;&nbsp;<?php echo $_SESSION['username']; ?></tr>
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
<?php
include("Footer.php");
?>
</body>
</center>
</html>