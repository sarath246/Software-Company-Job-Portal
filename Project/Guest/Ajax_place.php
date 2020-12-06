<?php
include("../Connection/Connection.php");

$id=$_REQUEST["id"];
?>
<option>------Select-------</option>
<?php
$sel="select * from tbl_place where district_id='$id'";
$row=mysql_query($sel);
while($data=mysql_fetch_array($row))
{
?>
<option value="<?php echo $data["place_id"] ;?>"><?php echo $data["place_name"] ;?></option>
<?php
}
?>


