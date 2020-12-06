<?php
        include("../Connection/Connection.php");
   
        if($_GET['aid']!="")
	{
		$accepted=$_GET["aid"];
		$upQry="update tbl_userregistration set user_status='1' where user_id='$accepted'";
		mysql_query($upQry,$con);
	}
	   if($_GET['rid']!="")
	{
		$rejected=$_GET["rid"];
		$upquery="update tbl_userregistration set user_status='2' where user_id='$rejected'";
		mysql_query($upquery,$con);
	}


?>

<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>User List New</title>
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
						<h4 class="card-title">User List Details</h4>
						<p class="card-category"></p>
					</div>
 					<div class="card-body">
 <div class="card">
       		<div class="card-header card-header-primary">
          			<h4 class="card-title ">User List</h4>
              			
                </div>
                	<div class="card-body">
                  		<div class="table-responsive">


<table class="table">
        <tr>
         <th>Sl.No</th>
        <th>Name</th>
         <th>Gender</th>
          <th>DOB</th>
        <th>Address</th>
        <th>Contact</th>
        <th>E-mail</th>
         <th>Proof</th>
        <th>Photo</th>
        <th>Experience</th>
        </tr>
     <?PHP
	     $i=0;
        $sel="select * from tbl_userregistration where user_status='0'";
		$rows=mysql_query($sel,$con);
		while($data=mysql_fetch_array($rows))
    {
	  $i++;
		?>
        <tr>
         <td><?php echo $i;?></td>
        <td><?php echo $data['user_name'];?></td>
         <td><?php echo $data['user_gender'];?></td>
         <td><?php echo $data['user_dob'];?></td>
        <td><?php echo $data['user_address'];?></td>
        <td><?php echo $data['user_contact'];?></td>
        <td><?php echo $data['user_email'];?></td>
        
                        
        <td><img src="../User/Proof/<?php echo $data['user_proof'];?>" width="50px" height="50px" /></td>
         <td><img src="../User/Photo/<?php echo $data['user_photo'];?>" width="50px" height="50px" /></td>
          <td><?php echo $data['user_experience'];?></td>
        <td><a href="UserList-New.php?aid=<?php echo $data['user_id'];?>" style="color:#0F0;">Accepted</a></td>
        <td><a href="UserList-New.php?rid=<?php echo $data['user_id'];?>" style="color:#F00;">Rejected</a></td>
       </tr>
        
       <?php
	}
	?>
    <tr>
        <td><a href="UserList-Accepted.php">Accepted List</a></td>
        <td><a href="UserList-Rejected.php">Rejected List</a></td>
        <td><a href="Resumes.php">Resumes</a></td>
        </tr>
</table>

</body>
</html>