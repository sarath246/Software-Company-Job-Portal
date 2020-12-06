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

<body class="" style="background-color:#FFF;">
<?php
include("../Guest/headerC.php")
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<style>

#tbl {border-radius:20px;}

</style>

<center>
<!--<div id="tab" style="border-radius:8px; border:0px solid #000; width:47%; height:40; background-color:" align="center">-->
<h2><i>----Accepted List----</i></h2>
<br/><br/><br/><center>
<div class="container">
 <table class="table table-dark table-striped table-hover" id="tbl" style="width:550px;">
 
           <tr class="bg-success text-white">
        <th  style="text-align:center;"><b>Sl.No</b></th>
       <th><b>Name</b></th>
       </tr>
<?php    
          $i=0;        
		 $sel="select * from tbl_jobapply j inner join tbl_userregistration u on u.user_id=j.user_id where jobapply_status='1' and company_id='".$_SESSION['companyid']."'";
		 $rows=mysql_query($sel,$con);
		 while($data=mysql_fetch_array($rows))
	{
      $i++;
?>
       
       <tr>
       <td  style="text-align:center;"><?php echo $i;?></td>
       <td><?php echo $data['user_name'];?></td>
        <td>
        <a href="interviewDetails.php?ivdid=<?php echo  $data['user_id'];?>" style="color:#FFF;">Send details</a></td>
   
       </tr>
<?php
	}
?>
</table>

</div>
</center>
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