<?php

         include("../Connection/Connection.php");
		 
		 session_start();
		
		 if(isset($_POST['btnsave']))
	 {
		 $old=$_POST['txtpsw'];
		      $sel="select * from tbl_freelancer where freelancer_id='".$_SESSION['freelancerid']."' and freelancer_password='$old'";
		
		$rows=mysql_query($sel,$con);
	    if($data=mysql_fetch_array($rows))
	{
         $NewPassword=$_POST['txtpssw'];
		 $ConPassword=$_POST['txtNewPsw'];
		   if($NewPassword!=$ConPassword)
 			 {
				 echo "<script>alert('password mismatch');</script>";
  				}
				else
				{
         $upQuery="update tbl_freelancer set freelancer_password='$NewPassword' where freelancer_id='".$_SESSION['freelancerid']."'";
          mysql_query($upQuery,$con);
		   echo "<script>alert('password changed');</script>";
		
		
				}
	}
	else{
		 echo "<script>alert('please enter correct password');</script>";
	}
	 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include("../User/Links.php");
?>
<!--<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
#btnsave {width:40%;}
</style>-->
</head>

<body style="background-color:#FFF;">
<?php
include("../User/HeaderJobApply.php")
?>



<br />
<br />	
<center>
<div id="tab" style="border-radius:8px; border:2px solid #000 ; width:27%; height:400%; background-color:#6CF" align="center">
<form id="form1" name="form1" method="post" action="">

  <table width="400" height="221" border="0" cellpadding="1" cellspacing="2" align="center">
    <tr>

      <th scope="row" align="left" style="text-align:center;">Current Password</th>
      <td><input type="text" name="txtpsw" id="txtpsw" value=""  class="form-control" required/></td>

    </tr>

    <tr>
      <th scope="row" align="left" style="text-align:center;">New Password</th>
      <td><input type="text" name="txtpssw" id="txtpssw"  class="form-control" required/></td>
    </tr>
    <tr>
      <th width="191" scope="row" align="left" style="text-align:center;">Confirm Password</th>
      <td width="164"><input type="text" name="txtNewPsw" id="txtNewPsw"  class="form-control" required/></td>
    </tr>
     <tr>
      
      <td colspan="2" align="center"><input type="submit" name="btnsave" id="btnsave" value="Change" class="btn btn-primary"/></td>
    </tr>
  </table>
</form>
</div>
</center>
<?php
include("../User/Footer.php");
?>
</body>
</html>