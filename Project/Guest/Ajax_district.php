<?php
include("../Connection/Connection.php");

$id=$_REQUEST["id"];
?>
<option>------Select-------</option>
<?php
$sel="select * from tbl_district where state_id='$id'";
$row=mysql_query($sel);
while($data=mysql_fetch_array($row))
{
?>
<option value="<?php echo $data["district_id"] ;?>"><?php echo $data["district_name"] ;?></option>
<?php
}
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>