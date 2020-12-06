<?php

         include("../Connection/Connection.php");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product based companies</title>
</head>

<body>
<table class="table">
                      			<thead class="text-primary">
									<th>Sl.No.</th>
									<th>Company </th>
                                 
<?php

   $i=0;

   $sel="select * from tbl_companytype j inner join tbl_companyregistration c on c.company_id=j.company_id";
        $rows=mysql_query($sel,$con);
	  while($data=mysql_fetch_array($rows))
		{
		$i++;

?>
      <tr>
      <td>     	 
      <?php echo $i; ?>
      </td>
      <td>     	 
      <?php echo $data['company_name']; ?>
      </td>
     </tr>
<?php
		}
?>
</body>
</html>