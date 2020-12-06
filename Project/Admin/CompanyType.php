<?php

		include("../Connection/Connection.php");
		
		if(isset($_POST['btnsave']))
	{
		
		
		 $company=$_POST["txttype"];
		 
	     	if($_GET['eid']!="")
		{
		 $update="update tbl_companytype set company_type='".$company."' where company_type_id='".$_GET['eid']."'";
			
			mysql_query($update,$con); 
			header("location:companytype.php");
		}
		else
		{
		
		echo $ins="insert into tbl_companytype(company_type)values('".$company."')";
		 mysql_query($ins,$con);
		}
	}
	   if($_GET['did']!="")
	{
		$delid=$_GET["did"];
		$del="delete from tbl_companytype where company_type_id='".$delid."'";
		mysql_query($del,$con);
	}
	 if($_GET['eid']!="")
		{
			
			$editid=$_GET['eid'];
			$sel="select * from tbl_companytype where company_type_id='".$editid."'";
			$data=mysql_query($sel,$con);
			$selectdata=mysql_fetch_array($data);
			$cmp=$selectdata["company_type"];
			
		}


?>

<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>Company Type</title>
<!--Pencil-->
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
						<h4 class="card-title">Company Type Details</h4>
						<p class="card-category">Enter Company Type Details</p>
					</div>
 					<div class="card-body">
			
<form id="form1" name="form1" method="post" >
                               <div class="row">
                      				<div class="col-md-6">
                        				<div class="form-group">
                        			
  <table width="281" height="123"  cellpadding="1" cellspacing="2" align="center">
    <tr>
     
      <td><input type="text" name="txttype" id="txttype" class="form-control" value="<?php echo $cmp ?>"
       placeholder="Enter Company type" required/>
       <input type="hidden" name="edit" value="<?php echo $_GET['eid'];?>"></td>
  
      <td><input type="submit" name="btnsave" id="btnsave" class="btn btn-primary pull-right"  value="Save" /></td>
    </tr>
  </table>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="card">
       				<div class="card-header card-header-primary">
          				<h4 class="card-title ">Company Type Details</h4>
              				<p class="card-category"> Here is a subtitle for this table</p>
                	</div>
                	<div class="card-body">
                  		<div class="table-responsive">
<table class="table" width="281" height="123"  >
<thead class=" text-primary">
          
          <th>Sl.No</th>
          <th>Company Type</th>
          <th>Delete</th>
          <th>Edit</th>
          </thead>
<?php
        $i=0;
		$sel="select * from tbl_companytype";
		$rows=mysql_query($sel,$con);
		while($data=mysql_fetch_array($rows))
	{
	$i++;			
?>
     <tr>
       <td><?php echo $i; ?></td>
     <td><?php echo $data['company_type'];?></td>
    
      <td><a href="CompanyType.php?did=<?php echo $data['company_type_id'];?>">
       <i class='fas fa-trash-alt' style='font-size:24px'></i>
      
      <!--<img src="https://www.brandeps.com/icon-download/D/Delete-01.svg" style="width:35px; height:35px;"/>--></a></td>
     
     <td><a href="CompanyType.php?eid=<?php echo $data['company_type_id'];?>">
     <i class='fas fa-pencil-alt' style='font-size:24px'></i>
     
     <!--<img src="https://www.brandeps.com/icon-download/P/Pencil-01.svg" style="width:35px; height:35px;"/>--></a></td>
     
     </tr>
     
<?php
	}

?>
	</table>	</div>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
<?php
include("../Includes/script.php");
?>
<div class="col-md-4">
</div>
</div>

</div>
</div>
</div>

</body>
</html>