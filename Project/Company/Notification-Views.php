<?php

		include("../Connection/Connection.php");



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style> 
html { 
  background: url() no-repeat center fixed; 
  background-size: cover;
}

body { 
  color: black; 
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>
</head>

<body class="" style="background-color:#CCC;">
<?php
include("headerJ.php")
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>	
<div class="main-panel">
<form id="form1" name="form1" method="post" action="">
<center>
<div id="tab" style="border-radius:8px; border:0px solid #000; width:77%; background-color:" align="center">
<table class="table" border="4">
<tr><b><i>Registration Notifications</i></b></tr>
        <tr style="background-color:#060;">
         <th style="text-align:center;"><b style="color:#000;">Sl.No</b></th>
        <th style="text-align:center;"><b style="color:#000;">Name</b></th>
         <th style="text-align:center;"><b style="color:#000;">Gender</b></th>
          <th style="text-align:center;"><b style="color:#000;">DOB</b></th>
        <th style="text-align:center;"><b style="color:#000;">Address</b></th>
        <th style="text-align:center;"><b style="color:#000;">Contact</b></th>
        <th style="text-align:center;"><b style="color:#000;">E-mail</b></th>
        <th style="text-align:center;"><b style="color:#000;">Experience</b></th>
        </tr>
     <?PHP
	     $i=0;
        $sel="select * from tbl_userregistration";
		$rows=mysql_query($sel,$con);
		while($data=mysql_fetch_array($rows))
    {
	  $i++;
		?>
        <tr>
         <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $i;?></b></td>
        <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['user_name'];?></b></td>
         <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['user_gender'];?></b></td>
         <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['user_dob'];?></b></td>
        <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['user_address'];?></b></td>
        <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['user_contact'];?></b></td>
        <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['user_email'];?></b></td>
         
        <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['user_experience'];?><b style="color:#000;"></td>
       
       </tr>
      
<?php
	}
?>
</table>
</div>
</center>
</form>

</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php
include("../Guest/footer.php")
?>
</body>

</html>