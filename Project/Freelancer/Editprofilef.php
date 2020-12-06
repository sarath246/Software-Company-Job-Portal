<?php
        include("../Connection/Connection.php");
 
		 session_start();
		 
		 
if(isset($_POST['btnUpdate']))
	{
		$name=$_POST["txtName"];
		$Gender=$_POST['rdbGender'];
		
		$Address=$_POST['txtAddress'];
		$Contact=$_POST['txtContact'];
		$Email=$_POST['txtEmail'];
    	$update="update tbl_freelancer set freelancer_name='$name',freelancer_gender='$Gender',  
		freelancer_address='$Address',freelancer_contact='$Contact',freelancer_email='$Email' where '".$_SESSION['freelancerid']."'";
        mysql_query($update,$con);
     }
	  

		$sel="select * from tbl_freelancer where freelancer_id='".$_SESSION['freelancerid']."'";
		$rows=mysql_query($sel,$con);
		$data=mysql_fetch_array($rows);
		$name=$data["freelancer_name"];
		$gender=$data["freelancer_gender"];
		
		$address=$data["freelancer_address"];
		$contact=$data["freelancer_contact"];
		$email=$data["freelancer_email"];
	  
	 
	  
	 
	  	
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
</style>-->
<style>
#btnUpdate {width:170px;}
</style>
</head>

<body style="background-color:#FFF;">
<?php
include("../User/HeaderJobApply.php")
?>
<br />
<br />	
<form method="post">
<!--Text box-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--Card-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<center>

 <div class="w3-container">
<div class="w3-card-4" style="width:27%">
<div id="" style="border-radius:18px; border:0px solid #000;  height:820px; background-color:#FFF;" align="center">
 <table align="center" border="0" width="100%" height="100%">

<br /><br />
<!--<input type="file" name="filePhoto" />-->
<img src="Photo/<?php echo $data["freelancer_photo"]; ?>" width="120" height="120" style="border-radius:80%;"/>
<br/><br/><br/>

  <div class="w3-card-4" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3><?php echo $data["freelancer_name"]; ?></h3>
    </header>
</div>


<br/><br/>
<tr>
<td style="text-align:center; width:150px;"><b>Name</b></td>
<td colspan="">
<input class="w3-input" type="text" name="txtName" id="txtName"  class="form-control" value="<?php echo $data["freelancer_name"]; ?>" /></td>
</tr>

<tr>
<td style="text-align:center;"><b>Gender</b></td>
<td><input type="radio" name="rdbGender" id="rdbGender"   value="Male" <?php if($gender=="Male"){ echo "checked"; } ?> />Male
<input type="radio" name="rdbGender" id="rdbGender" value="Female" <?php if($gender=="Female"){ echo "checked"; } ?> />Female
</td>
</tr>


<tr>
<td style="text-align:center;"><b>Address</b></td>
<td><textarea id="txtAddress"  class="form-control" name="txtAddress"><?php echo $data["freelancer_address"]; ?></textarea></td>
</tr>


<tr>
<td style="text-align:center;"><b>Contact</b></td>
<td><input class="w3-input" type="text" name="txtContact" id="txtContact"  class="form-control" value="<?php echo $data["freelancer_contact"]; ?>" /></td>
</tr>


<tr>
<td style="text-align:center;"><b>Email</b></td>
<td><input class="w3-input" type="email" name="txtEmail" id="txtEmail"  class="form-control" value="<?php echo $data["freelancer_email"]; ?>" /></td>
</tr>

<tr>

<td colspan="2" align="center"><input type="submit" name="btnUpdate" id="btnUpdate"  class="btn btn-primary" value="Update"/>

</td>
</tr>
</table>

<br/><br/>
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</center>
</form>
<?php
include("../User/Footer.php");
?>

</body>
</html>