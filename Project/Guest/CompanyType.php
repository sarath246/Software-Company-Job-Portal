<?php


        include("../Connection/Connection.php");

        session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Company Type</title>
<!--Animation text-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--End-->

<?php
include("headerC.php");
?>
<style>
table { border:#000;   
background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEQvhqh27T8ZTq82bTX_9SwGJjDrBPazzlBlPrdamdEzgCUMJm");
          width:20%;

}
</style>
<style>
 body {   background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
 }
</style>
<style>
tr {border-radius:10px;
}

</style>
</head>
<br/><br/><br/><br/>
<body style="">

<div class="w3-container w3-center w3-animate-zoom">
<h2 style="text-align:center;"><b><i>Most Popular Companies</i></b></h2></div>
<br/><br/><br/><br/>

<table class="table" border="4">
        <tr style="border-radius:10px;">
         <th style="text-align:center; border-radius:10px;"><b style="color:#000;">Sl.No</b></th>
        <th style="text-align:center;"><b style="color:#000;">Company Name</b></th>
         <th style="text-align:center;"><b style="color:#000;">Company Type</b></th>
          <th style="text-align:center;"><b style="color:#000;">Place</b></th>
        <th style="text-align:center;"><b style="color:#000;">Official Site</b></th>
        </tr>
     <?PHP
	     $i=0;
        $sel="select * from tbl_companyregistration c inner join tbl_place p inner join tbl_companytype t on t.company_type_id=c.company_type_id and p.place_id=c.place_id";
		$rows=mysql_query($sel,$con);
		while($data=mysql_fetch_array($rows))
    
	
	{
	  $i++;
		?>
        <tr>
         <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $i;?></b></td>
        <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['company_name'];?></b></td>
         <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['company_type'];?></b></td>
         <td style="text-align:center;"><b style="color:#000; text-align:center;"><?php echo $data['place_name'];?></b></td>
        <td style="text-align:center;"><b style="color:#000; text-align:center;">
		<a href="https://<?php echo $data['company_website'];?>/html/"><b style="size:30px;"><?php echo $data['company_website'];?></b></a></b></td>
         
       </tr>
      
<?php
	}
?>
</table>
</body>
<?php
include("footer.php")
?>

</html>