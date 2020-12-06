<?php

        include("../Connection/Connection.php");
		
		session_start();
		
		$uid = $_SESSION['userid'];
		
		
		if(isset($_POST['btnsave']))
		{
		
	    $course=$_POST["selcourse"];
		$ins="insert into tbl_userqualification(user_id,qualification_id)values('".$uid."','".$course."')"; 
		
		mysql_query($ins,$con);		
		
	}
		
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>
<?php
include("Links.php");
?>
<?php
include("HeaderJobApply.php");
?><br/><br/><br/><br/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="formstyle.css" />
</head>

<?php
include("Marquee.php");
?>
<br/><br/><br/>

<body style="background-color:#9c9;">
<center>

<div id="tab" style="border-radius:8px; border:2px solid #000; width:32%; background-color:#999;" align="center"> 

<form id="form1" name="form1" method="post" action="">

  <table width="400" height="133" >
    <tr>
      <th width="157" scope="row">Select Course</th>
      <td width="170"><select name="selcourse" id="selcourse"  class="form-control" required>
      <option value="">-----Select-----</option>
<?php
    
	   $sel="select * from tbl_qualification";
	   $rows=mysql_query($sel,$con);
	   while($data=mysql_fetch_array($rows))
	 {
		 
?>
      <option value="<?php echo $data['qualification_id'];?>"><?php echo $data['qualification'];?></option>
<?php
	 }
?>
      </select></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="btnsave" id="btnsave" class="btn btn-primary" style="color:#000" value="Submit"/></td>
    </tr>
  </table>
</form>
</div>
</center><br/><br/><br/><br/><br/><br/>
<?php
include("Footer.php");
?>

</body>
</html>