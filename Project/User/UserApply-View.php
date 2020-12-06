<?php
         include("../Connection/Connection.php");
  
           session_start();
 ?>    




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!--<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>-->
<?php
include("../User/Links.php");
?>
</head>

<body style="background-color:lightgrey;">
 <?php
include("../User/HeaderJobApply.php")
?>
<br />
<br />

	<center>
<p style="font-size:30px;">Your Application Status</p>
<br />
<br />

<form id="form1" name="form1" method="post" action="">

<table border="4" width="50%" style="background-color:#FFF;">

    <tr height="60px" style="background:green;">
    
    <th style="text-align:center;">Company</th>
   
    <th style="text-align:center;">Category</th>
   
    <th style="text-align:center;">Applied Date</th>
      <th style="text-align:center;">Status</th>
  </tr>
    <?php
           $sel="select * from tbl_jobapply j inner join tbl_jobvacancy v on v.jobvacancy_id=j.jobvacancy_id inner join 
		   tbl_companyregistration c on v.company_id=c.company_id  
		   inner join tbl_qualification q on v.qualification_id=q.qualification_id inner join tbl_jobcategory
		   b on v.jobcategory_id=b.jobcategory_id where user_id='".$_SESSION['userid']."' ";
		  
		 
		   $rows=mysql_query($sel,$con);
		   while($data=mysql_fetch_array($rows))
	{
		$status=$data["jobapply_status"];
		   
?>
    <tr height="60px">
         <td style="text-align:center;">
		 <img src="../Company/Proof/<?php echo $data['company_logo']; ?>" width="50px" height="50px" /></td>
        
         <td style="text-align:center;"><?php echo $data['jobcategory_name']; ?></td>
        
         <td style="text-align:center;"><?php echo $data['last_datetoapply']; ?></td>
   <?php  
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
    <!--<a href="../Admin/UserList-Accepted.php?aid=<?php echo $data['company_id']; ?>">-->Apply Accepted<i class="fa fa-check"></a></td>
    <?php 
	}
	?>
     <?php  
	if($status=='2')
	{
	?>
    <td  bgcolor="#FF3333" style="color:#FFF; text-align:center;">Apply Rejected</td>
    <?php 
	}
	?>
    </tr>
<?php
	}
?>
</table>
</form>
</center>
<br />
<br />	<br />
<br />	<br />
<br />	
<?php
include("../User/Footer.php");
?>
</body>
</html>
