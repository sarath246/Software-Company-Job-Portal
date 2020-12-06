<?php
		include("../Connection/Connection.php");
		session_start();
	

      $sel="select * from tbl_userregistration where user_id='".$_SESSION['userid']."'";
	  $rows=mysql_query($sel,$con);
	  $data=mysql_fetch_array($rows);
	  
	  
 
	   
	  	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("Links.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>-->
<style>
#edit{width:30%; background-color:#F00;}
</style>
<style>
#table{width:50%; height:20%;}
#box{width:60%;}
</style>

<!--Pencil-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--Pencil end-->

</head>

<body style="background-color:#FFF;">
<?php
include("HeaderJobApply.php")
?>
<br />
<br />	

<center>
<h2>
Profile
</h2><br/>
<div class="w3-container">
<div class="w3-panel w3-card" id="box">
<!--<div id="tab" style="border-radius:10px; border:2px solid #000 ; width:45%; height:600px; background-color:#CCC;" align="center">-->


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-container" id="table"> 
<table align="center" border="0" width="100%" height="300%" class="w3-table w3-striped  w3-bordered">

<tr>


<td colspan="2" align="center">
<center>
<img src="Photo/<?php echo $data["user_photo"]; ?>" width="120" height="120"/></center></td>
</tr><br/><br/>
<div class="w3-card-4" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3><?php echo $data["user_name"]; ?></h3>
    </header>
</div>
<center>
<tr>
<td align="center"><b></b></td>
<td align="center"><b></b></td>
</tr><br/>

<tr>
<td align="center"><b>Gender</b></td>
<td align="center"><b><?php echo $data["user_gender"]; ?></b></td>
</tr>

<tr>
<td align="center"><b>DOB</b></td>
<td align="center"><b><?php echo $data["user_dob"]; ?></b></td>
</tr>


<tr>
<td align="center"><b>Address</b></td>
<td align="center"><b><?php echo htmlspecialchars($data["user_address"]); ?></b></td>
</tr>


<tr>
<td align="center"><b>Contact</b></td>
<td align="center"><b><?php echo $data["user_contact"]; ?></b></td>
</tr>


<tr>
<td align="center"><b>E-mail</b></td>
<td align="center"><b><?php echo $data["user_email"]; ?></b></td>
</tr>


</center>
</table></div>
<br/>
<br/>
<a href="Editprofile.php"  class="btn btn-primary" id="edit"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;<b>Edit</b></a>
</div>
</center></div></div>
<?php
include("../User/Footer.php");
?>


</body>
</html>