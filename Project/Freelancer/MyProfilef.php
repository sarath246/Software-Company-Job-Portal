<?php
		include("../Connection/Connection.php");
		
		session_start();
	
         $sel="select * from tbl_freelancer where freelancer_id='".$_SESSION['freelancerid']."'";
			  $row=mysql_query($sel,$con);
	  		  $data=mysql_fetch_array($row);

     
	   
	  	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("../User/Links.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>-->
<style>
#edit{width:250px; background-color:#F00;}
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
include("../User/HeaderJobApply.php")
?>
<br />
<br />	

<center>
<h2>
My Profile
</h2><br/>
<div class="w3-container">
<div class="w3-panel w3-card" id="box">

<!--<div id="tab" style="border-radius:10px; border:2px solid #000 ; width:45%; height:600px; background-color:#CCC;" align="center"> -->


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-container" id="table"> 
<table align="center" border="0" width="100%" height="100" class="w3-table w3-striped  w3-bordered">
<br/>
<tr>

<td colspan="2" style="text-align:center;"><img src="Photo/<?php echo $data["freelancer_photo"]; ?>" width="120" height="120" /></td>
</tr>
<div class="w3-card-4" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3><?php echo $data["freelancer_name"]; ?></h3>
    </header>
</div><br/>
<tr>
<td style="text-align:center;"><b></b></td>
<td style="text-align:center;"></b></td>
</tr>





<tr>
<td  style="text-align:center;"><b>Address</b></td>
<td style="text-align:center;"><b><?php echo $data["freelancer_address"]; ?></b></td>
</tr>
<tr>
<td  style="text-align:center;"><b></b></td>
<td style="text-align:center;"><b></b></td>
</tr>

<tr>
<td  style="text-align:center;"><b>Email</b></td>
<td style="text-align:center;"><b><?php echo $data["freelancer_email"]; ?></b></td>
</tr>



<tr>
<td  style="text-align:center;"><b>Contact</b></td>
<td style="text-align:center;"><b><?php echo $data["freelancer_contact"]; ?></b></b></td>
</tr>



</table>
<br/>
<br/>
<a href="Editprofilef.php" class="btn btn-primary" id="edit"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;<b>Edit</b></a>
</div>
</center>
<?php
include("../User/Footer.php");
?>


</body>
</html>