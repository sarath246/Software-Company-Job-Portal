<?php	
		include("../Connection/Connection.php");
		
		if(isset($_POST['btnsave']))
		{
			$Name=$_POST["txtname"];
			$Address=$_POST["txtaddress"];
			$Contact=$_POST["txtcontact"];
			$Email=$_POST["txtemail"];
			$Proof=$_POST["fleproof"];
			$Regno=$_POST["txtregno"];
			$UserName=$_POST["txtuname"];
			$Password=$_POST["txtpassword"];
			$Website=$_POST["txtwebsite"];
			$Place=$_POST["selPlace"];
			$companytype=$_POST["selType"];
			//echo $Place;
			$proof=$_FILES["fleproof"]["name"];
			
			$temp=$_FILES["fleproof"]["tmp_name"];
			move_uploaded_file($temp,"../Company/Proof/".$proof);
			
			//photo
			
			$photo=$_FILES["flephoto"]["name"];
			
			$temps=$_FILES["flephoto"]["tmp_name"];
			move_uploaded_file($temps,"../Company/Proof/".$photo);
			
			
			
			$ins="insert into tbl_companyregistration(company_name,company_address,company_contact,company_email,
			 company_proof, company_regno,place_id,company_username,company_password,
			company_type_id,company_website,company_logo)values('".$Name."','".$Address."','".$Contact."','".$Email."',
			'".$proof."','".$Regno."','".$Place."','".$UserName."','".$Password."','".$companytype."','".$Website."','".$photo."')";
			
			mysql_query($ins,$con);
			
			
		}

   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<title>Company registration</title>
<link rel="stylesheet" type="text/css" href="formstyle.css" />
<!DOCTYPE html>
<html>
<head>
<style> 
html { 
  background: url() no-repeat center fixed; 
  background-size: cover;
}

body { 
  color: white; 
}
</style>

     <style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
  
}

.input100 .input100text {
  visibility: hidden;
  width: 200px;
  background-color: black;
  color: #fff;
  text-align: center;
  
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.input100:hover .input100text {
  visibility: visible;
}
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

<body img src="download.png" style="background-color:#FFF;">


<?php
include("headerC.php")
?><br/><br/><br/><br/><br/>
<h2 align="center" style="font-size:300%; font-style: oblique;" >
-----REGISTRATION-----</h2>
<br />
<br />

<center>

<div class="w3-container">
<div class="w3-panel w3-card w3-white w3-hover-shadow w3-animate-zoom" id="cardc">
 
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

<div id="" style="border-radius:13px;  width:67%; " align="center">
  <table width="708" height="1050" border="0" align="center">
    <tr>
      <th width="238" scope="row" style=" color:#000;">Company name</th>
      <td width="287">
          
      <input type="text" name="txtname" id="txtname" placeholder="Enter name here.." class="form-control" required/></td>
     
    </tr>
    <tr>
      <th scope="row" style=" color:#000;">Address</th>
      <td><textarea name="txtaddress" id="txtaddress" placeholder="Address.." cols="45" rows="5" class="form-control" required></textarea></td>
    </tr>
    <tr>
      <th scope="row" style=" color:#000;">Contact</th>
      <td><input type="text" name="txtcontact" placeholder="Telephone.." id="txtcontact" class="form-control" required/></td>
    </tr>
    <tr>
      <th scope="row" style=" color:#000;">E-mail</th>
      <td><input type="text" name="txtemail" placeholder="Enter email.." id="txtemail" class="form-control" required/></td>
    </tr>
    <tr>
      <th scope="row" style=" color:#000;">Proof</th>
      <td><input type="file" name="fleproof" id="fleproof" required/></td>
    </tr>
    <tr>
      <th scope="row" style=" color:#000;">Register no</th>
      <td><input type="text" name="txtregno" placeholder="Enter register number.." id="txtregno" class="form-control" required/></td>
    </tr>
    <tr>
      <th scope="row" style=" color:#000;">Place</th>
      <td><select name="selPlace" id="selPlace" >
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
      <th scope="row" style=" color:#000;">Logo / photo</th>
      <td><input type="file" name="flephoto" id="flephoto" required/></td>
    </tr>
    <tr>
      <th scope="row" style=" color:#000;">Username</th>
      <td><input type="text" name="txtuname" placeholder="Username.." id="txtuname" class="form-control" required/></td>
    </tr>
    <tr>
      <th scope="row" style=" color:#000;">Password</th>
      <td>
      <a href="#" data-toggle="tooltip" title="Password field that must contain 6 or more characters!">
       <span class="focus-input100"></span><span class="input100text">
      <input type="text" name="txtpassword" placeholder="Password.." id="txtpassword" class="form-control" pattern=".{6,}" required/></span></a></td>
     
    </tr>
    <tr>
      <th scope="row" style="color:#000;">Type</th>
      <td><select name="selType" id="selType" required>
       <option value="">-----Select-----</option>
<?php
      $sel="select * from tbl_companytype";
	  $rows=mysql_query($sel,$con);
	  while($data=mysql_fetch_array($rows))
{
?>
     <option value="<?php echo $data['company_type_id']; ?>"><?php echo $data['company_type']; ?></option>
<?php
}
?>
      </select></td>
    </tr>
    <tr>
      <th scope="row" style=" color:#000;">website</th>
      <td><input type="text" name="txtwebsite" placeholder="Website.." id="txtwebsite" class="form-control" required/></td>
    </tr> </table><br/><br/>
    <tr>
     
      <input type="submit" name="btnsave" id="btnsave"  value="Register" />
    </tr>
 
  </center>
</form></div></div><br/><br/><br/>
<center>
<div class="container signin">
    <p><b font-color="black">Already have an account?</b> <b><a href="../Login/Login.php"><b  style="color:blue;">Sign in</b></a>.</b></p>
  </div></center>

<br/><br/><br/><br/>
<?php
include("footer.php")
?>
</body>
</html>