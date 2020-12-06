<?php

		include("../Connection/Connection.php");
		
		session_start();
		
		     if($_GET['aid']!="")
	{
		$accepted=$_GET["aid"];
		$upQry="update tbl_jobapply set jobapply_status='1' where jobapply_id='$accepted'";
		mysql_query($upQry,$con);
	}
	    if($_GET['rid']!="")
	{
		$rejected=$_GET["rid"];
		$upquery="update tbl_jobapply set jobapply_status='2' where jobapply_id='$rejected'";
		mysql_query($upquery,$con);
	}


		


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style> 
html { 
  background: url() no-repeat center fixed; 
  background-size: cover;
}

body { 
  color: black; 
}
</style>
<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
</head>

<body class="" style="background-color:#CCC;">
<?php
include("headerJ.php")
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>	
<div class="main-panel">
<form id="form1" name="form1" method="post" action="">
<center>
<div id="tab" style="border-radius:8px; border:0px solid #000; width:77%; background-color:" align="center">
<table class="table" border="4">
<tr><b><i>Freelancers Apply Notifications</i></b></tr>
        <tr style="background-color:#06C;">
         <th style="text-align:center;"><b style="color:#000;">Sl.No</b></th>
        <th style="text-align:center;"><b style="color:#000;">Name</b></th>
        
        <th style="text-align:center;"><b style="color:#000;">Resume</b></th>
        
        </tr>
     <?PHP
	     $i=0;
        $sel="select * from tbl_jobapply j inner join tbl_freelancer u on u.freelancer_id=j.freelancer_id where jobapply_status='0'";
		//echo $sel;
		$rows=mysql_query($sel,$con);
		while($data=mysql_fetch_array($rows))
       {    
	     $i++;
		?>
        <tr>
         <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $i;?></b></td>
        <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['freelancer_name'];?></b></td>
        
        <td style="text-align:center;"><b style="color:#000; text-align:center;">
        <a target="_blank" href="../User/Proof/<?php echo $data['upload_resume'];?>">
		<img src="../User/Proof/<?php echo $data['upload_resume'];?>" width="50px" height="50px" /></a></b></td>
         
       </td>
       
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       
   <div class="w3-section">
        <td>
        
        <button class="w3-button w3-green">
   
        <a href="ApplyNotifFree.php?aid=<?php echo $data['jobapply_id'];?>" style="color:;">Accept</a></button>
      
        <td>
        <button class="w3-button w3-red">
     
        <a href="ApplyNotifFree.php?rid=<?php echo $data['jobapply_id'];?>" style="color:#000;">Reject</a></button></td>
         
        </button>
        
   
        
       </tr>
<?php
	   }
	   ?>

         <tr>
         
        <td><a href="AcceptedFree.php">Accepted List</a></td>
        <td><a href="RejectedFree.php">Rejected List</a></td>
        </tr>
</table>
</div>
</center>
</form>

</div>
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



<!-- <?php  
	if($status=='0')
	{
	?>
    <td bgcolor="#FF9933" style="font-size:18px; color:#FFF; text-align:center;">Pending</td>
    <?php 
	}
	?>
        
    <?php  
	if($status=='1')
	{
	?>
    <td bgcolor="#00CC00" style="font-size:18px; color:#FFF; text-align:center;">
    <!--<a href="../Admin/UserList-Accepted.php?aid=<?php echo $data['company_id']; ?>">-->Accepted</a></td>
    <?php 
	}
	?>
     <?php  
	if($status=='2')
	{
	?>
    <td  bgcolor="#FF3333" style="color:#FFF; text-align:center;">Rejected</td>
    <?php 
	}
	?>
    </tr>-->