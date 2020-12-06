<?php

          include("../Connection/Connection.php");
		   
		   if(isset($_POST['btnsave']))
	 {
		   $Name=$_POST["txtname"];
		   $gender=$_POST["radio"];
		   $dob=$_POST["txtdob"];
		   $address=$_POST["txtaddress"];
		   $contact=$_POST["txtcnum"];
		   $email=$_POST["txtemail"];
		   $photo=$_POST["img"];
		   $username=$_POST["txtuname"];
		   $password=$_POST["txtpassword"];
		   $status=$_POST["txtstatus"];
		   $place=$_POST["selplace2"];
		   $proof=$_POST["imgProof"];
		   $userexperience=$_POST["selexp"];
		   $userqualif=$_POST["Qualif2"];
		   $state=$_POST['selstate2'];
		   $district=$_POST['seldistrict2'];
		   
           //photo
		   $img=$_FILES["img"]["name"];
		   
		   $temp=$_FILES["img"]["tmp_name"];
		   move_uploaded_file($temp,"../User/photo/".$img);
		   //proof
		    $proof=$_FILES["imgProof"]["name"];
		  
		   $temp=$_FILES["imgProof"]["tmp_name"];
		   move_uploaded_file($temp,"../User/proof/".$proof);
		   
		  $ins="insert into tbl_userregistration(user_name,user_gender,user_dob,user_address,place_id,
				   user_contact,user_email,user_photo,user_username,user_password,user_experience,user_proof,qualification_id,state_id,district_id)
				   values('".$Name."','".$gender."','".$dob."','".$address."','".$place."',
		   '".$contact."','". $email."','". $img."','". $username."','". $password."',
		   '".$userexperience."','". $proof."','". $userqualif."','".$state."','".$state."')";  
		  
		  
		   mysql_query($ins,$con);
		  
           echo "<script>alert('Registration Successfully');</script>";
 
	 }



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jQuery.js"></script>


<script>

function getdistrict(d)
{
	//alert(d);
	$.ajax(
		{
			url:"Ajax_district.php?id="+d,
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User registration</title>
<link rel="stylesheet" type="text/css" href="formstyle.css" />

 <!--<style>
                  body {
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEQvhqh27T8ZTq82bTX_9SwGJjDrBPazzlBlPrdamdEzgCUMJm");
}
</style>-->




</head>

<body style="background-color:#FFF;">

<?php

include("headerC.php")
?><br/><br/><br/><br/><br/><br/><br/>

<!--Animation zoom-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--End-->

<style>
#cardc {width:60%; border-radius:20px;}
</style>

<center>

<h2 align="center" style="font-size:300%;">
-----REGISTRATION-----</h2>
<br />
<br />

<div class="w3-container">
<div class="w3-panel w3-card w3-white w3-hover-shadow w3-animate-zoom" id="cardc">
 
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">


<div id="" style="border-radius:18px;  width:67%; background-color:#fff" align="center">
 
 
  <table width="708" height="1500"   align="center" >
    <tr>
      <th width="169" scope="row">Name</th>
      <td width="223"><input type="text" name="txtname" id="txtname" placeholder="Enter Name Here.." required/></td>
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><input type="radio" name="radio" id="rdogender" value="Male" required/>
        Male 
        <input type="radio" name="radio" id="rdogender" value="Female" required/>
        Female</td>
    </tr>
    <tr>
      <th scope="row">Date Of Birth</th>
      <td><input type="date" name="txtdob" id="txtdob" required/></td>
    </tr>
    <tr>
      <th scope="row">Address</th>
      <td><input type="text" name="txtaddress" id="txtaddress" placeholder="Enter address.." required/></td>
    </tr>
    <tr>
      <th scope="row">State</th>
      <td><select name="selstate2" id="selstate2" onchange="getdistrict(this.value)" required>
        <option value="">-------Select--------</option>
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
        <option value="">-------Select--------</option>
        <?php
       $seld="select * from tbl_district";
	   $rowd=mysql_query($seld,$con);
	   while($datad=mysql_fetch_array($rowd))
	{
?>
        <option value="<?php echo $datad['district_id']; ?>"><?php echo $datad['district_name']; ?></option>
        <?php
	}
?>
      </select></td>
    </tr>
    <tr>
      <th scope="row">Place</th>
      <td><select name="selplace" id="selplace" required>
        <option value="">-------Select--------</option>
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
      <th scope="row">Contact No</th>
      <td><input type="text" name="txtcnum" id="txtcnum" placeholder="Phone Number.." required title="This field contains 10 digits"/></td>
    </tr>
    <tr>
      <th scope="row">E-mail</th>
      <td><input type="text" name="txtemail" id="txtemail" placeholder="Enter E-mail.." required/></td>
    </tr>
   <tr>
      <th scope="row">Qualification</th>
      <td><select name="Qualif2" id="Qualif2" >
        <option value="">-------Select--------</option>
        <?php
       $selq="select * from tbl_qualification";
	   $rowq=mysql_query($selq,$con);
	   while($dataq=mysql_fetch_array($rowq))
	{
?>
        <option value="<?php echo $dataq['qualification_id']; ?>"><?php echo $dataq['qualification']; ?></option>
        <?php
	}
?>
      </select></td>
    </tr>
    <tr>
      <th scope="row">Username</th>
      <td><input type="text" name="txtuname" id="txtuname" placeholder="Enter username.." required /></td>
    </tr>
    
    
    
    <tr>
    
    <a href="#" data-toggle="tooltip" title="Password field that must contain 6 or more characters!">
      
     <th scope="row">Password</th>
      <td>
      <input type="text" name="txtpassword" id="txtpassword"  placeholder="Enter password.." placeholder="Enter password" pattern=".{6,}" required/></td></a>
<script>
		$(document).ready(function(){
  		$('[data-toggle="tooltip"]').tooltip();   
});
</script>
    </tr>
     
     <tr>
      <th scope="row">Photo</th>
      <td><input type="file" name="img" id="img" /></td>
    </tr>
    <tr>
       <th scope="row">Resume</th>
       <td><input type="file" name="imgProof" id="imgProof" required/></td>
    </tr>
    <tr>
      <th scope="row">Exprirence</th>
      <td><select name="selexp" id="selexp" required>
      
          <option value="">----Select-----</option>
          <option>None</option>
          <option>Fresher</option>
          <option value="1 Year">1 Year</option>
          <option value="1-2 Years">1-2 Years</option>
          <option value="2-3 Years">2-3 Years</option>
          <option value="3-4 Years">3-4 Years</option>
          <option value="4-5 Years">4-5 Years</option>
          <option value="5-6 Years">5-6 Years</option>
          <option value="6-7 Years">6-7 Years</option>
          <option value="7&lt;Above">7&lt;Above</option>
      </select></td>
    </tr>
    <tr> </table>
    
      <td><input type="submit" name="btnsave" id="btnsave" value="Register" style="size="27%"
       style="background-color:green" onclick="alert('Registration Successfully Completed')"/></td>
    </tr>
    
 
  </center>
  </div></div></center>
</form><br/><br/><center>
<div class="container signin">
    <p><b font-color="black">Already have an account?</b> <b><a href="../Login/Login.php"><b  style="color:blue;">Sign in</b></a>.</b></p>
  </div></center>
<br/><br/><br/>
<?php
include("footer.php")
?>

</body>
</html>