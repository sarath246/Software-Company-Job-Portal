<?php

         include("../Connection/Connection.php");

        if($_GET['aid']!="")
	{
		$accepted=$_GET["aid"];
		$upQry="update tbl_freelancer set freelancer_status='1' where freelancer_id='$accepted'";
		mysql_query($upQry,$con);
	}
	   if($_GET['rid']!="")
	{
		$rejected=$_GET["rid"];
		$upquery="update tbl_freelancer set freelancer_status='2' where freelancer_id='$rejected'";
		mysql_query($upquery,$con);
	}
	
?>
   
	
<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>Freelancer List New</title>
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
			<div class="col-md-14">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Freelancer List Details</h4>
						<p class="card-category"></p>
					</div>
 					<div class="card-body">
 <div class="card">
       		<div class="card-header card-header-primary">
          			<h4 class="card-title ">Freelancer List</h4>
              			
                </div>
                	<div class="card-body">
                  		<div class="table-responsive">
         <table class="table">
        <tr>
        <th>Sl.No</th>
        <th>Name</th>
        <th>Address</th>
        <th>E-mail</th>
        <th>Contact</th>
        <th>Proof</th>
        </tr>
     <?PHP
	    $i=0;
        $sel="select * from tbl_freelancer where freelancer_status='0'";
		$rows=mysql_query($sel,$con);
		while($data=mysql_fetch_array($rows))
    {
	  $i++;
		?>
        <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $data['freelancer_name'];?></td>
        <td><?php echo $data['freelancer_address'];?></td>
        <td><?php echo $data['freelancer_email'];?></td>
        <td><?php echo $data['freelancer_contact'];?></td>
        <td><img src="../Freelancer/Proof/<?php echo $data['freelancer_proof'];?>" width="50px" height="50px" /></td>
        <td><a href="FreelanceList-New.php?aid=<?php echo $data['freelancer_id'];?>" style="color:#0F0;">Accepted</a></td>
        <td><a href="FreelanceList-New.php?rid=<?php echo $data['freelancer_id'];?>" style="color:#F00;">Rejected</a></td>
        
        </tr>
         
       <?php
	}
	?>
    <tr><td><a href="FreelancerList-Accepted.php">Accepted List</a></td>
                <td><a href="FreelanceList-Rejected.php">Rejected List</a></td></tr>
        
</table>

</body>
</html>