<?php

      $con=mysql_connect("localhost","root","");
      mysql_select_db("db_softwarecompany",$con);


        if(isset($_POST['btnCheck']))
	{
		
		$Number=$_POST["txtNumber"];
		
		
		
		 for($i=2;$i<$Number;$i++)
	{
		$m++;
	}
	  $i++;
	    if($Number%2!=0)
	{
		$r="Prime";
	}
	 else
	{
		$r="Not Prime";
	}
	
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
  <table width="603" height="259" border="1">
    <tr>
      <td style="text-align:center;">Enter a Number</td>
      <td style="text-align:center;"><label for="txtNumber"></label>
      <input type="text" name="txtNumber" id="txtNumber" value="<?php echo $Number; ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnCheck" id="btnCheck" value="Submit" /></td>
    </tr>
    <tr>
      <td style="text-align:center;">is</td>
      <td style="text-align:center;"><?php echo $r; ?></td>
    </tr>
  </table>
</form>
</body>
</html>