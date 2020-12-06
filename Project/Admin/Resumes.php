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
						<h4 class="card-title" align="center">Users resume</h4>
						<p class="card-category"></p>
					</div>
 					<div class="card-body">
 <div class="card">
       		<div class="card-header card-header-primary">
          			<h4 class="card-title ">Users resumes</h4>
              			
                </div>
                	<div class="card-body">
                  		<div class="table-responsive">


<table class="table" >

<th>Name</th>
<th>Resume</th>

<?php

      $sel="select * from tbl_userregistration";
	  $rows=mysql_query($sel,$con);
	  while($data=mysql_fetch_array($rows))
  {
	  

?>

<tr>
<td><?php echo $data['user_name']; ?></td>
<td><img src="../User/Proof/<?php echo $data['user_proof']; ?>" height="50px" width="50px"/></td>
</tr>

<?php
  }
?>

</table>
</body>
</html>