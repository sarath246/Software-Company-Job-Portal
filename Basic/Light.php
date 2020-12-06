<?php
         include("../Connection/Connection.php");
  
          	     if($_GET['aid']!="")
	{
		$accepted=$_GET["aid"];
		$upQry="update tbl_jobapply set jobapply_status='1' where user_id='$accepted'";
		mysql_query($upQry,$con);
	}
	    if($_GET['rid']!="")
	{
		$rejected=$_GET["rid"];
		$upquery="update tbl_jobapply set jobapply_status='2' where user_id='$rejected'";
		mysql_query($upquery,$con);
	}


 ?>    








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<center>
<table class="table" border="4">
<tr><b><i>Users Apply Notifications</i></b></tr>
        <tr style="background-color:#06C;">
         <th style="text-align:center;"><b style="color:#000;">Sl.No</b></th>
        <th style="text-align:center;"><b style="color:#000;">Name</b></th>
        
        <th style="text-align:center;"><b style="color:#000;">Resume</b></th>
        
        </tr>
     <?PHP
	     $i=0;
        $sel="select * from tbl_jobapply j inner join tbl_userregistration u on u.user_id=j.user_id where jobapply_status='0'";
		$rows=mysql_query($sel,$con);
		while($data=mysql_fetch_array($rows))
       {    
	     $i++;
		?>
        <tr>
         <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $i;?></b></td>
        <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['user_name'];?></b></td>
        
        <td style="text-align:center;"><b style="color:#000; text-align:center;">
        <a target="_blank" href="../User/Proof/<?php echo $data['upload_resume'];?>">
		<img src="../User/Proof/<?php echo $data['upload_resume'];?>" width="50px" height="50px" /></a></b></td>
         
       </td>
       
      
        <td>
        
   
        <a href="ApplyNotif.php?aid=<?php echo $data['company_id'];?>" style="color:;">Accept</a></button></td></div>
      
        <td>
     
        <a href="ApplyNotif.php?rid=<?php echo $data['company_id'];?>" style="color:#000;">Reject</a>
        </button>
        </td>
   
        
       </tr>
<?php
	   }
	   ?>

         <tr>
         
        <td><a href="UserAccepted-View.php">Accepted List</a></td>
        <td><a href="UserRejectedView.php">Rejected List</a></td>
        </tr>
</table>
</center>
</form>
</body>
</html>