
<?php
  
       
		 include("../Connection/Connection.php");

        if($_GET['aid']!="")
	{
		$accepted=$_GET["aid"];
		$upQry="update tbl_companyregistration set  company_status='1' where company_id='$accepted'";
		mysql_query($upQry,$con);
	}
	   if($_GET['rid']!="")
	{
		$rejected=$_GET["rid"];
		$upquery="update tbl_companyregistration set company_status='2' where company_id='$rejected'";
		mysql_query($upquery,$con);
	}


?>
<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>CompanyList-New</title>
</head>
<body class="">
<?php
include("../Includes/sidebar.php");
?>
<div class="main-panel">
<?php
include("../Includes/navbar.php");
?>
<div align="left">
<div class="main-panel" align="center">
	<div class="content">
		<div class="container-fluid">
<center>
		<div class="row" align="center">
			<div class="col-md-12">
			
					<div class="card-header card-header-primary">
						<h4 class="card-title">Company List New</h4>
						
					</div>
 		
<div class="card-body" align="center"  style="width:140%;">

</center>

   <div class="card">
       		<div class="card-header card-header-primary">
          			<h4 class="card-title ">Company List</h4>
              			
                </div>
                	<div class="card-body">
                  		<div class="table-responsive">
         <table class="table">
     
        <tr>
        <th>Sl.No</th>
       <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>E-mail</th>
         <th>Proof</th>
        <th>Register Number</th>
        <th>Website</th>
         <th>Photo</th>
        </tr>
       
       
     <?PHP
	     $i=0;
        $sel="select * from tbl_companyregistration where company_status='0'";
		$rows=mysql_query($sel,$con);
		while($data=mysql_fetch_array($rows))
    {
		$i++; 
		?>
        <tr>
         <td><?php echo $i;?></td>
        <td><?php echo $data['company_name'];?></td>
        <td><?php echo $data['company_address'];?></td>
        <td><?php echo $data['company_contact'];?></td>
        <td><?php echo $data['company_email'];?></td>
         <td>
		 <img src="../Company/Proof/<?php echo $data['company_proof'];?>" width="50px" height="50px"/></td>
        <td><?php echo $data['company_regno'];?></td>
        <td><?php echo $data['company_website'];?></td>
        
        <td><img src="../Company/Proof/<?php echo $data['company_proof'];?>" width="50px" height="50px" /></td>
        <td><a href="CompanyList-New.php?aid=<?php echo $data['company_id'];?>" style="color:#0F0;">Accept</a></td>
        <td><a href="CompanyList-New.php?rid=<?php echo $data['company_id'];?>" style="color:#F00;">Reject</a></td>
       </tr>
        
       <?php
	}
	?>
  <tr> 
        <a href="CompanyList-Accepted.php">Accepted List</a></tr><br/>
        
       <tr> <a href="CompanyList-Rejected.php">Rejected List</a></tr>
        
   
</table>
</div>
</div>
</div>
</div>
</div>
</body>
</html>