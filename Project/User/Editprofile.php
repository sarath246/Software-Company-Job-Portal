<?php
        include("../Connection/Connection.php");
 
		 session_start();
		 
		 
        if(isset($_POST['btnUpdate']))
	{
		$name=$_POST["txtName"];
		$Gender=$_POST['rdbGender'];
		$Dob=$_POST['txtdob'];
		$Address=$_POST['txtAddress'];
		$Contact=$_POST['txtContact'];
		$Email=$_POST['txtEmail'];
    	$update="update tbl_userregistration set user_name='$name',user_gender='$Gender',user_dob='$Dob',  
		user_address='$Address',user_contact='$Contact',user_email='$Email' where '".$_SESSION['userid']."'";
		// echo $update;
        mysql_query($update,$con);
     }
	  

		$sel="select * from tbl_userregistration where user_id='".$_SESSION['userid']."'";
		$rows=mysql_query($sel,$con);
		$data=mysql_fetch_array($rows);
		$name=$data["user_name"];
		$gender=$data["user_gender"];
		$dob=$data["user_dob"];
		$address=$data["user_address"];
		$contact=$data["user_contact"];
		$email=$data["user_email"];
	  
	  
	 
	  	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>-->
<style>
#btnUpdate {width:170px;}
</style>

<?php
include("../User/Links.php");
?>
</head>

<body style="background-color:#fff;">
<?php
include("../User/HeaderJobApply.php")
?>
<br />
<br />	

<center>
<!--Text box-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--Card-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="w3-container">
<div class="w3-card-4" style="width:30%;">
<div id="" style="border-radius:18px; width:77%; height:420px;" align="center">
<form action="" method="post">
 <table align="center" border="0" width="100%" height="300%">
<br/><br/>

<img src="Photo/<?php echo $data["user_photo"]; ?>" width="120" height="120" /><br/><br/>
<div class="w3-card-4" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3><?php echo $data["user_name"]; ?></h3>
    </header>
</div>
<br/><br/>


<tr>

<td style="text-align:center;"><b>Name</b></td>
<td><b><input class="w3-input" type="text" name="txtName" id="txtName"  class="form-control" value="<?php echo $data["user_name"]; ?>" /></b></td>
</tr>

<tr>
<td style="text-align:center;"><b>Gender</b></td>
<td><input type="radio" name="rdbGender" id="rdbGender" value="Male" <?php if($gender=="Male"){ echo "checked"; } ?> />Male
<input type="radio" name="rdbGender" id="rdbGender" value="Female" <?php if($gender=="Female"){ echo "checked"; } ?> />Female
</td>
</tr>

<tr>
<td style="text-align:center;"><b>DOB</b></td>
<td><input type="date" name="txtdob" id="txtdob" value="<?php echo $data["user_dob"]; ?>" /></td>
</tr>


<tr>
<td style="text-align:center;"><b>Address</b></td>
<td><textarea id="txtAddress"  class="form-control" name="txtAddress"><?php echo $data["user_address"]; ?></textarea></td>
</tr>


<tr>
<td style="text-align:center;"><b>Contact</b></td>
<td><input class="w3-input" type="text" name="txtContact" id="txtContact"  class="form-control" value="<?php echo $data["user_contact"]; ?>" /></td>
</tr>


<tr>
<td style="text-align:center;"><b>Email</b></td>
<td><input class="w3-input" type="email" name="txtEmail" id="txtEmail"  class="form-control" value="<?php echo $data["user_email"]; ?>" /></td>
</tr>

<tr>

<td colspan="2" align="center"><input type="submit" name="btnUpdate" id="btnUpdate"  class="btn btn-primary" value="Update" /></td>
</tr>
</table>
</form>

</div><br/><br/><br/><br/><br/><br/>
</center>
<?php
include("../User/Footer.php");
?>

</body>
</html>