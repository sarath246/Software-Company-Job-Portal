<?php
      
	    include("../Connection/Connection.php");
		
	    session_start();
        
        if(isset($_POST['btnsave']))
	{
	   $Branch=$_POST["txtBranch"];
	   $State=$_POST["selState"];
	   $District=$_POST["selDistrict"];
	   $Address=$_POST["txtAddress"];
	   $Contact=$_POST["txtContact"];
	  
      
  $ins="insert into tbl_branch(branch_name,state_id,district_id,branch_address,branch_contact,company_id)values('".$Branch."',
	   '".$State."','".$District."','".$Address."','".$Contact."','". $_SESSION['companyid']."')";
	  
	   mysql_query($ins,$con);

	}


?>

<!DOCTYPE html>
<html>
<head>

<!--Animation right-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!--End-->

<style> 
html { 
  background: url() no-repeat center fixed; 
  background-size: cover;
}

body { 
  color: white; 
}
</style>
<!--<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>-->
<body img src="../Images/download.png" style="background-color:#878f99;">
<?php
include("headerJ.php")
?>



<br />
<br />	
<h1 style="text-align:center; font-style:italic; font-size:24px;">Add  here  the  branches  details</h1>
<br/><br/><br/><br/>
<form id="form1" name="form1" method="post" action="">
<center>
<div class="w3-animate-zoom">
<div id="tab" style="border-radius:8px; border:0px solid #000 ; width:32%; background-color:#" align="center">
  <table width="479" height="715" border="0" cellpadding="1" cellspacing="2">
    <tr>
      <th width="180" scope="row" style="text-align:center; color:#FFF;"><b>Branch</b></th>
      <td width="283"><input type="text" name="txtBranch" placeholder="Type here.." id="txtBranch" class="form-control" required/></td>
    </tr>
    <tr>
      <th scope="row" style="text-align:center; color:#FFF;"><b>State</b></th>
      <td><select name="selState" id="selState" class="form-control" required>
      <option value="">-----Select-----</option>
<?php
      $sels="select * from tbl_state";
	  $rows=mysql_query($sels,$con);
	  while($datas=mysql_fetch_array($rows))
   {
?>
      <option value="<?php echo $datas['state_id']; ?>"><?php echo $datas['state_name']; ?></option>
<?php
   }
?>
      </select></td>
    </tr>
    <tr>
      <th scope="row" style="text-align:center; color:#FFF;"><b>District</b></th>
      <td><select name="selDistrict" id="selDistrict" class="form-control" required>
      <option value="">-----Select-----</option>
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
      <th scope="row" style="text-align:center; color:#FFF;"><b>Address</b></th>
      <td><textarea name="txtAddress" id="txtAddress" cols="45" rows="5" placeholder="Enter address here.." class="form-control" required></textarea></td>
    </tr>
    <tr>
      <th scope="row" style="text-align:center; color:#FFF;"><b>Contact</b></th>
      <td><input type="text" name="txtContact" id="txtContact" placeholder="Type Contact number.." class="form-control" required/></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="btnsave" id="btnsave" value="Submit" class="btn btn-primary" style="width:100px;"/></td>
    </tr>
  </table>
  </div></div>
  
  </center>
</form>
<?php
include("../Guest/footer.php")
?>

</body>
</html>