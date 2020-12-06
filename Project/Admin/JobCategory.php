<?php

		 include("../Connection/Connection.php");
		
		
          if(isset($_POST['btnsave']))
	{
		 
		  $jobcatogory=$_POST["txtjob"];
		 
	    if($_GET['eid']!="")
	{
		  $update="update tbl_jobcategory set jobcategory_name='".$jobcatogory."' where jobcategory_id='".$_GET['eid']."'";
		  mysql_query($update,$con);
		  header("location:jobcategory.php");
	}
	else
	{
		  $ins="insert into tbl_jobcategory (jobcategory_name) values('".$jobcatogory."')";
		  mysql_query($ins,$con);
	  }
	}
	    if($_GET['did']!="")
	{
		$delid=$_GET["did"];
		$del="delete from tbl_jobcategory where jobcategory_id='".$delid."'";
		mysql_query($del,$con);
	}
	   if($_GET['eid']!="")
	{
		$delid=$_GET["eid"];
	    
			$editid=$_GET['eid'];
			$sel="select * from tbl_jobcategory where jobcategory_id='".$editid."'";
			$data=mysql_query($sel,$con);
			$selectdata=mysql_fetch_array($data);
			$jct=$selectdata["jobcategory_name"];
			
	}


?>


<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>Job Category</title>
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

		<div class="row align-items-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Job Category Details</h4>
						<p class="card-category">Enter Job Category Details</p>
					</div>
 					<div class="card-body">
						<form id="form1" name="form1" method="post" action="JobCategory.php">
                        		<div class="row">
                      				<div class="col-md-6">
                        				<div class="form-group">
                        				<label class="bmd-label-floating">Enter Job Category</label>
                  <input type="text" name="txtjob" id="txtjob"  class="form-control" value="<?php echo $jct ?>"  required/>
                 					</div>
                 				</div>
                			<button type="submit" name="btnsave" class="btn btn-primary pull-right" style="border-radius:100px;">Save</button>
  						<div class="clearfix"></div>
    				</div>
				</div>
			</form>
</div>
</div>

				<div class="card">
       				<div class="card-header card-header-primary">
          				<h4 class="card-title ">Job Category Details</h4>
              				<p class="card-category"> Here is a subtitle for this table</p>
                	</div>
                	<div class="card-body">
                  		<div class="table-responsive">
                    		<table class="table">
                      			<thead class=" text-primary">
									<th>Sl. No.</th>
									<th>Job Category Name</th>
									<th>Delete</th>
									<th>Edit</th>
								</thead>
<?php
		$i=0;
 		$sel="select * from tbl_jobcategory";
		$rows=mysql_query($sel,$con);
		while($data=mysql_fetch_array($rows))
    {
	$i++;
 ?>
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $data['jobcategory_name']; ?></td>
     <td><a href="JobCategory.php?did=<?php echo $data["jobcategory_id"];?>">
     <i class='fas fa-trash-alt' style='font-size:24px'></i>
     
     <!--<img src="https://www.brandeps.com/icon-download/D/Delete-01.svg" style="width:35px; height:35px;"/>--></a></td>
     
     <td><a href="JobCategory.php?eid=<?php echo $data["jobcategory_id"];?>">
     
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

		</div>
	</div>
</div>
</div>
<?php
include("../Includes/script.php");
?>
</div>
</body>
</html>
	
		