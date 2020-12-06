<?php
		 include("../Connection/Connection.php");
	
			if(isset($_POST['btnsave']))
	{
		$qualification=$_POST["txtquali"];
		
		if($_GET['eid']!="")
	   {
		   $update="update tbl_qualification set qualification='".$qualification."'where qualification_id='".$_GET['eid']."'";
		   mysql_query($update,$con);
		   header("location:Qualification.php");
	   }
	   else
	   {
	    $ins="insert into tbl_qualification(qualification)values('".$qualification."')";
		mysql_query($ins,$con);
	   }
	}
	if($_GET["did"]!="")
		{
			$delid=$_GET["did"];
			$del="delete from tbl_qualification where qualification_id='".$delid."'";
	
		 mysql_query($del,$con);
		 header("location:Qualification.php");
 
		}
		
		 if($_GET["eid"]!="")
			{
		$editid=$_GET["eid"];
		$sel="select * from  tbl_qualification where qualification_id='".$editid."'";
	
		$data=mysql_query($sel,$con);
		$selectdata=mysql_fetch_array($data);
		$dbt=$selectdata["qualification"];
	 
		 
			}



?>


<!DOCTYPE html>
<html>
<head>
<?php
include("../Includes/head.php");
?>
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
include('../Includes/navbar.php');
?>
<div class="main-panel">
	<div class="content">
		<div class="container-fluid">

		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Qualification Details</h4>
						<p class="card-category">Enter qualification Details</p>
					</div>
 					<div class="card-body">
						<form id="form1" name="form1" method="post" action="">
  							<div class="row">
                      			<div class="col-md-6">
                        			<div class="form-group">
                        				<label class="bmd-label-floating">Enter qualification</label>
                                    <input type="text" name="txtquali" id="txtquali" value="<?php echo $dbt ?>"  class="form-control" required/>
                        			</div>
                       			</div>
                       			<button type="submit" name="btnsave" class="btn btn-primary pull-right">Save</button>
                    			<div class="clearfix"></div>
                    		</div>
						</form>

					</div>
				</div>

				<div class="card">
       				<div class="card-header card-header-primary">
          				<h4 class="card-title ">Qualification Details</h4>
              				<p class="card-category"> Here is a subtitle for this table</p>
                	</div>
                	<div class="card-body">
                  		<div class="table-responsive">
                    		<table class="table">
                      			<thead class="text-primary">
									<th>Sl. No.</th>
									<th>Qualification</th>
									<th>Delete</th>
									<th>Edit</th>
								</thead>
								<?php
									$i=0;
      								$sel="select * from tbl_qualification";
	  								$rows=mysql_query($sel,$con);
	  								while($data=mysql_fetch_array($rows))
									{
									$i++;	
								?>      
     							<tr>			
            						<td><?php echo $i; ?></td>
     								<td><?php echo $data['qualification'];?></td>
		
                   					<td><a href="Qualification.php?did=<?php echo $data['qualification_id'];?>">
                                
                                <i class='fas fa-trash-alt' style='font-size:24px'></i>
                                
                                <!--<img src="https://www.brandeps.com/icon-download/D/Delete-01.svg" style="width:35px; height:35px;"/>--></a></td>
                   					<td><a href="Qualification.php?eid=<?php echo $data['qualification_id'];?>">
                                    
                                    <i class='fas fa-pencil-alt' style='font-size:24px'></i>
                                    

                               <!--<img src="https://www.brandeps.com/icon-download/P/Pencil-01.svg" style="width:35px; height:35px;"/>--></a></td> </tr> 
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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>