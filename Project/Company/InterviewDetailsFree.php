<?php
         include("../Connection/Connection.php");
  
           session_start();
	   if(isset($_POST['btnSave']))
	  {
		  $Date=$_POST['txtDate'];
		  $Loc=$_POST['txtLoc'];
		  $Time=$_POST['txtTime'];
		  $Sel=$_POST['txtSel'];
		  $Venue=$_POST['txtVenue'];
		  $Select=$_POST['sel'];
		  
		  
		  $ins="insert into tbl_freemsg(msg_date,msg_loc,msg_time,msg_sel,msg_venue,msg_ampm,company_id,freelancer_id)values('".$Date."','".$Loc."','".$Time."','".$Sel."','".$Venue."','".$Select."','".$_SESSION['companyid']."','".$_GET['ivdid']."')";
          mysql_query($ins,$con);
		  
	  }
 
 ?>    



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#btnSave {width:100px; background-color:#0F0; }
</style>
<!--Button style-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--end-->
</head>

<body style="background-color:#CCC;">
<?php
include("headerJ.php")
?>
<br/><br/><br/><br/><br/><br/>
<center>
<h2>
<i>
----Enter details here----</i></h2>
<br/><br/>


<form id="form1" name="form1" method="post" action="">
  <table width="582" height="876" border="0">
    <tr>
      <td width="230" style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;Interview Date</td>
      <td width="336"><label for="txtDate"></label>
      <input type="date" name="txtDate" id="txtDate" required="required"/></td>
    </tr>
    <tr>
      <td width="230" style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;Selection Process</td>
      <td width="336"><label for="txtSel"></label>
      <input type="text" name="txtSel" id="txtSel"  placeholder="Enter round..."  required="required"/></td>
    </tr>
    <tr>
      <td width="230" style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;Reporting Time</td>
      <td width="336"><label for="txtTime"></label>
      <input type="time" name="txtTime" id="txtTime" required="required"/>
      <select name="sel" id="sel" required>
      <option value="">---Select---</option>
      <option value="Am">AM</option>
      <option value="PM">PM</option>
      </select>
      
      </td>
    </tr>
    <tr>
      <td height="158" style="text-align:center;">Location</td>
      <td><label for="txtLoc"></label>
      <textarea name="txtLoc" id="txtLoc" cols="45" rows="5"  placeholder="Enter location.."  required="required"></textarea></td>
    </tr>
    <tr>
      <td height="158" style="text-align:center;">Bring these venue</td>
      <td><label for="txtVenue"></label>
      <textarea name="txtVenue" id="txtVenue" cols="45" rows="5"  placeholder="Enter..."  required="required"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input class="button btn btn-success" type="submit" name="btnSave" style="background-color:#063;" id="btnSave" value="Send" onclick="<script>alert('Message sended');"/></td>
    </tr>
  </table>
</form>
</center>
<br/><br/><br/><br/><br/><br/><br/><br/>
<?php
include("../Guest/footer.php");
?>
</body>
</html>