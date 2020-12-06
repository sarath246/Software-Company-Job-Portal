<?php

        include("../Connection/Connection.php");





?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="formstyle.css" /> 
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
<center>
<div class="main-panel">
	<div class="content">
		<div class="container-fluid">

		<div class="row">
			<div class="col-md-18">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Notification</h4>
						<p class="card-category"></p>
					</div>
 					<div class="card-body">
 <div class="card">
       		<div class="card-header card-header-primary">
          			<h4 class="card-title ">User Notifications</h4>
              			
                </div>
                	<div class="card-body">
                  		<div class="table-responsive">


<div class="row">
               <div class="col-md-12">
                       <div class="form-group">
      	
<table border="3" width="100%" height="250%">
 <div class="row">
               <div class="col-md-8">
        
<tr><td>Company Name</td></tr>

<?php

	$sel="select * from tbl_jobapply j inner join tbl_jobvacancy v inner join tbl_companyregistration u on  v .jobvacancy_id=j.jobvacancy_id and  u.company_id=v.company_id where jobapply_status='1'";
	  $rows=mysql_query($sel,$con);
	while($data=mysql_fetch_array($rows))
   {	
	
	
?>

<tr><td><?php echo $data['company_name']; ?></td>
    <td><p>Apply Accepted</p></td>
    <td><a href="UserVacancy.php">
</tr>
<?php
   }
?>


</table><br/><br/>
</div>
<br/>
<br/>

<div id="tab" style="border-radius:8px; border:2px solid ; width:32%; background-color:; text-align:left;" > 
<table border="1" width="400" height="200" align="left">
<tr><td>New Vacancies</td></tr>
<?php
      $sele="select * from  tbl_jobvacancy a inner join tbl_companyregistration r on r.company_id=a.company_id";
	 $row=mysql_query($sele,$con);
	 while($datas=mysql_fetch_array($row))
  {
?>
   <tr>
   <td><?php echo $datas['company_name']; ?></td>
    <td><a href="JobApply-view.php?jobvacid=<?php echo $datas['jobvacancy_id']; ?>">Details</a></td>
   </tr>
<?php
  }
?>


</table>
</div>
</center>


</body>
</html>