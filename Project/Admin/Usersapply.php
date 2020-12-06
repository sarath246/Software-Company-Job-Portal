<?php


      include("../Connection/Connection.php");






?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("../Includes/head.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
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
						<h4 class="card-title" align="center">Users apply details</h4>
						<p class="card-category"></p>
					</div>
 					<div class="card-body">
 <div class="card">
       		<div class="card-header card-header-primary">
          			<h4 class="card-title ">Users apply</h4>
              			
                </div>
                	<div class="card-body">
                  		<div class="table-responsive">

<table class="table" >

<th>User name</th>
<th>Company</th>
<th>Resume</th>


<?php

      $sel="select * from tbl_jobapply j inner join tbl_userregistration c inner join tbl_companyregistration u on u.company_id=j.company_id and c.user_id
	        =j.user_id";
	  $rows=mysql_query($sel,$con);
	  while($data=mysql_fetch_array($rows))
  {
	  

?>

<tr>
<td><?php echo $data['user_name']; ?></td>
<td><?php echo $data['company_name']; ?></td>
<td>
<a target="_blank" href="../User/Proof/<?php echo $data['user_proof'];?>">
<img src="../User/Proof/<?php echo $data['user_proof']; ?>" height="50px" width="50px"/></td>
<?php
  }
?>

</tr>

</table>

</body>
</html>