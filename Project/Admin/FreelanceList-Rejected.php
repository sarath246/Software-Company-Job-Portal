<?php
		 include("../Connection/Connection.php");
         
		 
?>         

<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>Freelancer List Rejected</title>
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
			<div class="col-md-6">
				
					<div class="card-header card-header-primary">
						<h4 class="card-title">Rejected Details</h4>
						<p class="card-category"></p>
					</div>
 					<div class="card-body">
			
 <div class="card">
       		<div class="card-header card-header-primary">
          			<h4 class="card-title ">Rejected List</h4>
              			<p class="card-category">Here is a subtitle for this table</p>
                </div>
                	<div class="card-body">
                  		<div class="table-responsive">
       
 <table class="table">
    <thead class="text-primary">
       <tr>
       <th>Sl.No</th>
       <th>Name</th>
       </tr>
       </thead>
       <?php 
	      $i=0;
	     $sel="select * from tbl_freelancer where freelancer_status='2'";
		 $rows=mysql_query($sel,$con);
		 while($data=mysql_fetch_array($rows))
	{
	 $i++;
		?>
       <tr>
        <td><?php echo $i;?></td>
       <td><?php echo $data['freelancer_name'];?></td>
       </tr>
<?php
	}
?>
</table>

</body>
</html>