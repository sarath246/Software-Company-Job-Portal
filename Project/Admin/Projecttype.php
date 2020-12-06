<?php

       include("../Connection/Connection.php");
	   
          if(isset($_POST['btnsave']))
	{
		
         $projecttype=$_POST["txtprojecttype"];
		 
	 if($_GET['eid']!="")
	   {
		   $update="update tbl_projecttype set projecttype_name='".$projecttype."'where projecttype_id='".$_GET['eid']."'";
		   mysql_query($update,$con);
		   header("location:projecttype.php");
	   }
	   else
	   
	{  	  
         $ins="insert into tbl_projecttype(projecttype_name)values('".$projecttype."')";
		 mysql_query($ins,$con);
		 
	}
	}
	//Deletequery
		if($_GET["did"]!="")
{
	$delid=$_GET["did"];
	$del="delete from tbl_projecttype where projecttype_id='".$delid."'";
	
		mysql_query($del,$con);
		 header("location:projecttype.php");
 

}
     if($_GET["eid"]!="")
{
	$editid=$_GET["eid"];
	$sel="select * from tbl_projecttype where projecttype_id='".$editid."'";
	
		$data=mysql_query($sel,$con);
		$selectdata=mysql_fetch_array($data);
		$dbt=$selectdata["projecttype_name"];
	
}

?>


<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>Project Type</title>
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
						<h4 class="card-title">Job Category Details</h4>
						<p class="card-category">Enter Job Category Details</p>
					</div>
 					<div class="card-body">					
                   <form id="form1" name="form1" method="post" action="">
                               <div class="row">
                      				<div class="col-md-6">
                        				<div class="form-group">
                        				<label class="bmd-label-floating">Enter Job Category</label>

     
      <input type="text" name="txtprojecttype" id="txtprojecttype" class="form-control" value="<?php echo $dbt ?>" required/>
     </div>
  </div>
 
 
     
      <input type="submit" name="btnsave" id="btnsave" class="btn btn-primary pull-right" value="Save" /></th>
<div class="clearfix"></div>
    				</div>
				</div>
  
</form>
</div>
</div>
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
									<th>Project Type</th>
									<th>Delete</th>
									<th>Edit</th>
								</thead>
		 
<?php
       $i=0;
      $sel="select * from tbl_projecttype";
	  $rows=mysql_query($sel,$con);
	  while($data=mysql_fetch_array($rows))
	{
	 $i++;	
?>      
     <tr>
      <td><?php echo $i; ?></td>
     <td><?php echo $data['projecttype_name'];?></td>
           <td><a href="ProjectType.php?did=<?php echo $data['projecttype_id'];?>">
           <i class='fas fa-trash-alt' style='font-size:24px'></i>
           
           <!--<img src="https://www.brandeps.com/icon-download/D/Delete-01.svg" style="width:35px; height:35px;"/>--></a></td>
     <td><a href="ProjectType.php?eid=<?php echo $data['projecttype_id'];?>">
     
     <i class='fas fa-pencil-alt' style='font-size:24px'></i>
                                    
     <!--<img src="https://www.brandeps.com/icon-download/P/Pencil-01.svg" style="width:35px; height:35px;"/>--></a></td>
  <?php
	}
	?>
	</tr>

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
<div class="col-md-4">
</div>
</div>
 </body>
</html>
