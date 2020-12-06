<?php
		include("../Connection/Connection.php");
		
		if(isset($_POST['txtsave']))
		{
			$district=$_POST['txtdname'];
			$state=$_POST['slctstate'];
			echo $state;
			
			if($_GET['eid']!="")
			{
				$eid = $_GET['eid'];
	$update="update tbl_district set district_name='$district', state_id='$state' where district_id =$eid";
				echo $update;
				mysql_query($update,$con);
			}
			else
			{
			
			$ins="insert into tbl_district(district_name,state_id)values('".$district."','".$state."')";
			echo  $ins;
			
		    mysql_query($ins,$con);
			}
			header("location:district.php");
		}
		if($_GET['did']!="")
		{
			$delid=$_GET["did"];
			$del="delete from tbl_district where district_id='".$delid."'";
			mysql_query($del,$con);
			header("location:district.php");
		}
		
          
			if($_GET['eid']!="")
			{
				$editid=$_GET["eid"];
				$sel="select * from tbl_district where district_id='".$editid."'";
				$data=mysql_query($sel,$con);
				$selectdata=mysql_fetch_array($data);
				$dst=$selectdata["district_name"];
				$state_id=$selectdata['state_id'];
				echo $state;
			}


?>

<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>District</title>
<!--Pencil and delete-->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<!--End-->
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
						<h4 class="card-title">District</h4>
						<p class="card-category">Enter District</p>
					</div>
 					<div class="card-body">
			
<form id="form1" name="form1" method="post" action="">
 	<div class="row">
               <div class="col-md-6">
                       <div class="form-group">
                       		<label class="bmd-label-floating">District</label>
                       		<input type="text" name="txtdname" id="txtdname"  class="form-control" value="<?php echo $dst ?>"  required/>
       					</div>
               </div>
    </div>
    <div class="row">
               <div class="col-md-6">
                       <div class="form-group">
      						<select name="slctstate" id="slctstate" class="form-control" required>
      							<option value="">select state</option>
      							<?php 
	 							 	$selQ="select * from tbl_state";
	  								$row=mysql_query($selQ,$con);
	  								while($data=mysql_fetch_array($row)){
	  
	  							?>
      							<option value="<?php echo $data['state_id'];?>"> 
								<?php if($state_id==$data['state_id']) echo "selected" ?><?php echo $data['state_name'];?></option>
  
      							<?php
	  								echo $data['state_id'];
	  								}
	 							?>
      					</select>
                        </div>
                 </div>
            </div>
                        <input type="submit" name="txtsave" id="txtsave" class="btn btn-primary pull-right" value="Save" />
                       </div>
    
  </form>
  </div>
  </div>

   <div class="card">
       				<div class="card-header card-header-primary">
          				<h4 class="card-title ">District Details</h4>
              				<p class="card-category"> Here is a subtitle for this table</p>
                	</div>
                	<div class="card-body">
                  		<div class="table-responsive">
                    		<table class="table">
                      			<thead class="text-primary">
									<th>Sl. No.</th>
									<th>District Name</th>
                                    <th>Place Name</th>
									<th>Delete</th>
									<th>Edit</th>
								</thead>


  <?php
        $i=0;
  		$sel="select * from tbl_district d inner join tbl_state s on s.state_id=d.state_id";
		$rows=mysql_query($sel,$con);
		while($data=mysql_fetch_array($rows))
		{
	    $i++;
?>
		<tr>
          <td><?php echo $i;?></td>
        <td><?php echo $data['district_name'];?></td>
         <td> <?php echo $data['state_name'];?></td>
         <td><a href="District.php?did=<?php echo $data['district_id'];?>">
         <i class='fas fa-trash-alt' style='font-size:24px'></i>
         <!--<img src="https://www.brandeps.com/icon-download/D/Delete-01.svg" style="width:35px; height:35px;"/>--></a></td>
         <td><a href="District.php?eid=<?php echo $data['district_id'];?>">
         <i class='fas fa-pencil-alt' style='font-size:24px'></i>
                                    
         <!--<img src="https://www.brandeps.com/icon-download/P/Pencil-01.svg" style="width:35px; height:35px;"/>--></a></td>
         </tr>
         
		<?php
		}
		?>
	</table>
</div>
</div>
</div>



<?php
include("../Includes/script.php");
?>
<div class="col-md-4">
</div>
</div>
</body>
</html>



   
