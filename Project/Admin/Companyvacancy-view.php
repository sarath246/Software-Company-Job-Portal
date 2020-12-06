<?php

		include("../Connection/Connection.php");
		
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include("../Includes/head.php");
?>
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
			<div class="col-md-11">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title" align="center">Company Vacancy Details</h4>
						
					</div>
 					<div class="card-body">
					
<form id="form1" name="form1" method="post" action="">
		<div class="row">
                      				<div class="col-md-12">
                        				<div class="form-group">
                        				
 
<center>
 
  				 <div class="card-body">
                  		          <div class="table-responsive">
       
       		
 

<?php
          
         $sel="select * from tbl_jobvacancy v inner join tbl_jobcategory c on c.jobcategory_id=v.jobcategory_id  inner join 
	  		tbl_qualification a on  a.qualification_id=v.qualification_id inner join tbl_companyregistration e on e.company_id=v.company_id";
	 		$rows=mysql_query($sel,$con);
			while($data=mysql_fetch_array($rows))
	{
	 
?>
          
 		<table width="725" height="350" border="1" style="border-radius:13px;">
  		 
        
    	<tr>
      		<td colspan="3" align="center" style="border-radius:13px;" class="text-primary">
            <img src="../Company/Proof/<?php echo $data['company_logo'];?>" width="300px" height="90px" /></td>
       </tr>
       <tr>
      		<td width="325" style="text-align:center;">Job category</td>
      		<td style="text-align:center;"><?php echo $data['jobcategory_name']; ?></td>
      
      </tr>
      <tr>
      		<td style="text-align:center;">Qualification</td>
      		<td style="text-align:center;"><?php echo $data['qualification']; ?></td>
     
      </tr>
      <tr>
      		<td style="text-align:center;">No Of Vacancy</td>
      		<td style="text-align:center;"><?php echo $data['vacancy_no']; ?></td>
      
     </tr>
     <tr>
      		<td style="text-align:center;">Last Date To Apply</td>
      		<td style="text-align:center;"><?php echo $data['last_datetoapply']; ?></td>
      
    </tr>
    </div>
<br/><br/>
 <?php
 
	}
	
?> 
</table>

 </center>
</div>
</div>
 </form>  
</body>
</html>
