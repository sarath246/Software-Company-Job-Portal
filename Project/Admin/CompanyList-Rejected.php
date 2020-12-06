<?php

        
		include("../Connection/Connection.php");




?>
<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>Company Rejected List</title>
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
						<h4 class="card-title">Company Rejected Details</h4>
						<p class="card-category">Job request accepted details</p>
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
       <th>Company</th>
       </tr>
       </thead>
<?php
	     $i=0;
	     $sel="select * from tbl_companyregistration where company_status='2'";
		 $rows=mysql_query($sel,$con);
		 while($data=mysql_fetch_array($rows))
	{
	 $i++;
?>
       <tr>
        <td><?php echo $i;?></td>
       <td><?php echo $data['company_name'];?></td>
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

</body>
</html>
