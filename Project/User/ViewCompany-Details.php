<?php

           include("../Connection/Connection.php");
     
	       session_start();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Design table-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--End-->

<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="formstyle.css" />
</head>

<body style="background-color:#9c9;">

<br />
<br />	
<!--<style>
#tab { border-radius:10px;  width:90%; height:400px;
}
</style>
-->
<center>
<div id="tab">

<form id="form1" name="form1" method="post" action="">
     
     <div class="w3-container" style="width:800px;">
    <table class="w3-table-all" width="80" border="1">
    <tr class="w3-green">
    <th style="text-align:center;">Company</th>
    <th style="text-align:center;">Address</th>
    <!-- <th style="text-align:center;">Official website</th>
    <th style="text-align:center;">E-mail</th>
    <th style="text-align:center;">Place</th>
    <th style="text-align:center;">Company Type</th>
    --><th style="text-align:center;">Official website</th>
    </tr>
    
    <?php
       $sel="select * from tbl_companyregistration j inner join tbl_place p inner join  tbl_companytype c on c.company_type_id=
	   j.company_type_id and j.place_id=p.place_id";
       $rows=mysql_query($sel,$con);
	  while($data=mysql_fetch_array($rows))
	{
	
      
?> 
     
    <tr class="w3-hover-light-grey">
         <td style="text-align:center; width:180px;">
		 <img src="../Company/Proof/<?php echo $data['company_logo']; ?>" width="150px" height="40px"/>     </td>
         <td style="text-align:center; width:50px;"><?php echo $data['company_address']; ?>  </td>
         <?php /*?><td style="text-align:center;"><?php echo $data['company_contact']; ?>  </td>
         <td style="text-align:center;"><?php echo $data['company_email']; ?>    </td>
          <td style="text-align:center;"><?php echo $data['place_name'];        
         <td style="text-align:center;"><?php echo $data['company_type']; ?>  </td>
         <?php */?><td style="text-align:center; width:50px;"><a href="https://<?php echo $data['company_website']; ?>/html/"><?php echo $data['company_website']; ?></a>
        <br/>
        
        </td>
    </tr>
<?php
	}
?>
</div>
 </table>          
    
</form>
</div>
<br/><br/>
<!--Card-->

      
   

</body>
</html>
