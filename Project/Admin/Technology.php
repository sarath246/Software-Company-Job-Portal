<?php
 		include("../Connection/Connection.php");
 
 
		if(isset($_POST['btnSave']))
	{
		$technology=$_POST["txttechnology"];
		  if($_GET['eid']!="")
	{
		
		$update="update tbl_technology set technology_name='".$technology."'where technology_id='".$_GET['eid']."'";
		mysql_query($update,$con);
		 header("location:technology.php");
	}
	else
	{
		$ins="insert into tbl_technology(technology_name)values('".$technology."')";
		mysql_query($ins,$con);
	}
	}
      if($_GET['did']!="")
	{
		$delid=$_GET["did"];
		
		$del="delete from tbl_technology where technology_id='".$delid."'";
	    mysql_query($del,$con);
		
		 header("location:technology.php");
	}
	 
     if($_GET["eid"]!="")
{
	$editid=$_GET["eid"];
	$sel="select * from tbl_technology where technology_id='".$editid."'";
	
		$data=mysql_query($sel,$con);
		$selectdata=mysql_fetch_array($data);
		$tech=$selectdata["technology_name"];
	
}
	

?>



<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
<title>Technology</title>
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
						<h4 class="card-title">Technology Details</h4>
						<p class="card-category">Enter Technology Details</p>
					</div>
 					<div class="card-body">
			
                   <form id="form1" name="form1" method="post" action="Technology.php">
 
                              <div class="row">
                      				<div class="col-md-6">
                        				<div class="form-group">
                        			
                        <label class="bmd-label-floating">Enter Technology</label>
               <input type="text" name="txttechnology" id="txttechnology"  class="form-control" value="<?php echo $tech ?>"  required/>

                                                       </div>
                                                            </div>
              
    <input type="submit" name="btnSave" id="btnSave" class="btn btn-primary pull-right" value="Submit" />
                                                 </div>
  <div class="clearfix">
    			
</form>
	</div></div>
				</div>
  
<div class="card">
       				<div class="card-header card-header-primary">
          				<h4 class="card-title ">Technology Details</h4>
              				<p class="card-category"> Here is a subtitle for this table</p>
                	</div>
                	<div class="card-body">
                  		<div class="table-responsive">
                    		<table class="table">
                      			<thead class=" text-primary">
									<th>Sl. No.</th>
									<th>Technology Name</th>
									<th>Delete</th>
									<th>Edit</th>
								</thead>
<?php
        $i=0;
  		$sel="select * from tbl_technology";
		$rows=mysql_query($sel,$con);
		
		while($data=mysql_fetch_array($rows))
	 {
      $i++;
?>
  <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data['technology_name'];?></td>
        <td><a href="Technology.php?did=<?php echo $data['technology_id'];?>">
        
        <i class='fas fa-trash-alt' style='font-size:24px'></i>
        
        <!--<img src="https://www.brandeps.com/icon-download/D/Delete-01.svg" style="width:35px; height:35px;"/>--></a></td>
        
        <td><a href="Technology.php?eid=<?php  echo $data['technology_id'];?>">
        
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
<div class="col-md-4">
</body>
</html>