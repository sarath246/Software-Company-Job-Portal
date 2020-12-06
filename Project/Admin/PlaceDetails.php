<?php


           include("../Connection/Connection.php");
		   
		   if(isset($_POST['btnsave']))
	 {
		 $district=$_POST['selDistrict'];
		 
		 $place=$_POST["txtplace"];
		 $ins="insert into tbl_place(place_name,state_id)values('".$place."','".$district."')";
		 mysql_query($ins,$con);
		 
		 
	 }




?>


<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>Place Details</title>
</head>
<body class="">
<?php
include("../Includes/sidebar.php");
?>
<div class="main-panel">
<?php
include("../Includes/navbar.php");
?>
<div class="main-panel">
	<div class="content">
		<div class="container-fluid">

		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Place Details</h4>
						<p class="card-category">Enter place Details</p>
					</div>
 					<div class="card-body">
					
                               <form id="form1" name="form1" method="post" action="">
                               <div class="row">
                      				<div class="col-md-6">
                        				<div class="form-group">
                        				<label class="bmd-label-floating">Enter Place</label>
 
  
      
          <input type="text" name="txtplace" id="txtplace"   class="form-control" required/></td>
    </tr>
    <tr>
    
      <td><select name="selDistrict" id="selDistrict"  class="form-control" required>
      <option value="">--- Select ----</option>
<?php
	         $sel="select * from tbl_district ";
			 
			 $rows=mysql_query($sel,$con);
			 while($data=mysql_fetch_array($rows))
		{
?>
      <option value="<?php echo $data['district_id'] ?>"><?php echo $data['district_name']; ?></option>
      
      <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="btnsave" id="btnsave" class="btn btn-primary pull-right" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>

<table>
