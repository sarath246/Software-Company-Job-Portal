<?php

        include("../Connection/Connection.php");
		
		if(isset($_POST['btnsave']))
	{
		
		$freelancerName=$_POST["txtname"];
		$GenderFree=$_POST["radio"];
		$freelancerAddress=$_POST["txtaddress"];
		$freelancerEmail=$_POST["txtemail"];
		$freelancerContact=$_POST["txtnum"];
		$freelancerUsername=$_POST["txtUname"];
		$freelancerPassword=$_POST["txtpsw"];
		$freelancer_experience=$_POST["selexperience"];
		$place=$_POST["selplace"];
		$qualificationid=$_POST["selqualification"];
		$state=$_POST['selstate'];
		//photo
           
           $img=$_FILES["filePhoto"]["name"];
		   //echo $img;
		   $temp=$_FILES["filePhoto"]["tmp_name"];
		   move_uploaded_file($temp,"../Freelancer/Photo/".$img);
		   
		   //Proof
		   
          $proof=$_FILES["fileProof"]["name"];
		   //echo $img;
		   $temp=$_FILES["fileProof"]["tmp_name"];
		   move_uploaded_file($temp,"../Freelancer/Proof/".$img);
		   

		$ins="insert into tbl_freelancer(freelancer_name,freelancer_gender,freelancer_address,freelancer_email,
		freelancer_contact,freelancer_username,freelancer_password,place_id,freelancer_photo,freelancer_proof,
		freelancer_experience,qualification_id,state_id
		)values('".$freelancerName."','".$GenderFree."','".$freelancerAddress."','".$freelancerEmail."','".$freelancerContact."',
		'".$freelancerUsername."','".$freelancerPassword."','".$place."','". $img."','". $proof."',
		'".$freelancer_experience."','".$qualificationid."','".$state."')";
		
		mysql_query($ins,$con);
	
	    echo "<script>alert('Registration Successfully');</script>";
	}
        
		  


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freelancer registration</title>
<link rel="stylesheet" type="text/css" href="formstyle.css" />

<script src="jQuery.js"></script>


<script>

function getdistrict(d)
{
	alert(d);
	$.ajax(
		{
			url:"Ajax_district.php?id="<!--+d,-->
			success:function(result)
			{
				$("#seldistrict").html(result);
				
			}
		}
			);
}


function getplace(b)
{
	alert(b);
	$.ajax(
		{
			url:"Ajax_place.php?id="+b,
			success:function(result)
			{
				$("#selplace").html(result);
				
			}
		}
			);
}
	</script>

<style> 
           /* table, td, td { 
               
               
            } 
            td, td { 
                padding: 20px; 
                background-color:none; 
            } 
              
            h1 { 
            color:green; 
            } */
        </style> 

<!--<style>
                  body {
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEQvhqh27T8ZTq82bTX_9SwGJjDrBPazzlBlPrdamdEzgCUMJm");
}
</style>-->

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
#cardc {width:60%; border-radius:20px;}
</style>


</head>

<body style="background-color:#FFF;">

<?php
include("headerC.php")
?><br/><br/><br/><br/><br/><br/>

<h2 align="center" style="font-size:300%">
-----REGISTRATION-----</h2>
<br/>
<br/>

<center>

<div class="w3-container">
<div class="w3-panel w3-card w3-white w3-hover-shadow w3-animate-zoom" id="cardc">
 
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

<div id="" style="border-radius:8px;  ; width:67%;"  align="center">
  <table width="708" height="1050" border="0" align="center">
    <tr>
      <th width="177" scope="row">Name</th>
      <td width="175"><input type="text" name="txtname" id="txtname" placeholder="Enter name here..." required/></td>
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><input type="radio" name="radio" id="rdogender" value="Male" required/>
        Male 
        <input type="radio" name="radio" id="rdogender" value="Female" required/>
        Female</td>
    </tr>
    <tr>
      <th scope="row">Address</th>
      <td><input type="text" name="txtaddress" id="txtaddress" placeholder="Enter your address.." required/></td>
    </tr>
    <tr>
      <th scope="row">E-mail</th>
      <td><input type="text" name="txtemail" id="txtemail" placeholder="Enter your email.." required/></td>
    </tr>
    <tr>
      <th scope="row">Contact Number</th>
      <td><input type="text" name="txtnum" id="txtnum" placeholder="Phone Number.." required/></td>
    </tr>
    <tr>
      <th scope="row">Username</th>
      <td><input type="text" name="txtUname" id="txtUname" placeholder="Enter username.." required/></td>
    </tr>
    <tr>
      <th scope="row">Password</th>
      <td><input type="text" name="txtpsw" id="txtpsw" placeholder="Enter password.." required/></td>
    </tr>
    <tr>
      <th scope="row">State</th>
      <td><select name="selstate" id="selstate" onchange="getdistrict(this.value)">
        <option value="">-----Select-----</option>
      <?php
       $selst="select * from tbl_state";
	   $rowst=mysql_query($selst,$con);
	   while($datast=mysql_fetch_array($rowst))
	{
?>
        <option value="<?php echo $datast['state_id']; ?>"><?php echo $datast['state_name']; ?></option>
        <?php
	}
?>   
      </select></td>
    </tr>
    <tr>
      <th scope="row">District</th>
      <td><select name="seldistrict" id="seldistrict" onchange="getplace(this.value)" required>
        <option value="">-----Select-----</option>
        <?php
       $sel="select * from tbl_district";
	   $rows=mysql_query($sel,$con);
	   while($data=mysql_fetch_array($rows))
	 {
?>
        <option value="<?php echo $data['district_id'];?>"><?php echo $data['district_name'];?>
          <?php
	 }
?>
          </option>
      </select></td>
    </tr>
    <tr>
      <th scope="row">Place</th>
      <td><select name="selplace" id="selplace" >
        <option value="">-----Select-----</option>
      <?php
       $sel="select * from tbl_place";
	   $rows=mysql_query($sel,$con);
	   while($data=mysql_fetch_array($rows))
	{
?>
        <option value="<?php echo $data['place_id']; ?>"><?php echo $data['place_name']; ?></option>
        <?php
	}
?>   
      </select></td>
    </tr>
    <tr>
      <th scope="row">Photo</th>
      <td><input type="file" name="filePhoto" id="filePhoto" /></td>
    </tr>
    <tr>
      <th scope="row">Resume</th>
      <td><input type="file" name="fileProof" id="filePhoto2" required/></td>
    </tr>
    <tr>
      <th scope="row">Qualification</th>
      <td><select name="selqualification" id="selqualification" required>
      <option value="">----select----</option>
      <?php 
	   $sel="select * from tbl_qualification";
	   $rows=mysql_query($sel,$con);
	   while($data=mysql_fetch_array($rows))
	  {
 ?>
      
       <option value="<?php echo $data['qualification_id']; ?>"><?php echo $data['qualification']; ?> </option>
      <?php
	  }
	  ?>
	
      </select></td>
    </tr>
    <tr>
      <th height="43" scope="row">Experience</th>
      <td><select name="selexperience" id="selexperience" required>
      
          <option value="">----Select-----</option>
          <option>None</option>
          <option>1 Year</option>
          <option>1-2 Years</option>
          <option>2-3 Years</option>
          <option>3-4 Years</option>
          <option>4-5 Years</option>
          <option>5-6 Years</option>
          <option>6-7 Years</option>
          <option>7&lt;Above</option>
      </select></td>
    </tr>
    <tr> </table>
    
      <input type="submit" name="btnsave" id="btnsave" value="Register" onclick="alert('Registration Successfully Completed')"/>
    </tr>
 
  
</form></center><br/><br/><br/><br/>
<center>
<div class="container signin">
    <p><b font-color="black">Already have an account?</b> <b><a href="../Login/Login.php"><b  style="color:blue;">Sign in</b></a>.</b></p>
  </div></center>

<br/><br/>
<?php
include("footer.php")
?>
</body>
</html>
