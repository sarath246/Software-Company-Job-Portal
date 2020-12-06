<?php

         include("../Connection/Connection.php");
		
		 session_start();


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body class="" style="background-image:">
<?php
include("../Guest/headerC.php")
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<h2 style="text-align:center;"><i>----Rejected List----</i></h2>
<br/><br/>
<div class="container">
<center>
 <table class="table table-dark table-striped table-hover" id="tbl" style="width:550px;">
 
    <thead class="text-primary">
       <tr class="bg-success text-white">
       <th style="text-align:center;"><b style="color:#000;">Sl.No</b></th>
       <th><b style="color:#000;">Name</b></th>
       </tr>
       </thead>
       <?php 
	      $i=0;
	     $sel="select * from tbl_jobapply j inner join tbl_userregistration u on u.user_id=j.user_id where jobapply_status='2' and company_id='".$_SESSION['companyid']."'";
		 $rows=mysql_query($sel,$con);
		 while($data=mysql_fetch_array($rows))
	{
	  $i++;
		?>
       <tr>
        <td style="text-align:center;"><?php echo $i;?></td>
       <td><?php echo $data['user_name'];?></td>
       </tr>
<?php
	}
?>
</table></center>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php
include("../Guest/footer.php")
?>
</body>
</html>