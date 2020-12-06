<?php
            
			include("../Connection/Connection.php");
			
			session_start();
	     if(isset($_POST['btnsave']))
	{
		 
		 $JobCategory=$_POST["selCategory"];		
		 $NoOfVacancy=$_POST["txtVacancy"];
		 $Qualification=$_POST["selQualif"];
		 $LastDate=$_POST["txtDate"];
		 $Experience=$_POST["selExp"];
		 $Location=$_POST["selLoc"];
		 $Salary=$_POST['txtSalary'];
		 $Job=$_POST['selJob'];

         $ins="insert into tbl_save(company_id,vacancy_no,qualification_id,last_datetoapply,district_id)values('".$_SESSION['companyid']."','".$NoOfVacancy."','".$Qualification."','".$LastDate."','".$Location."')";
	
		 mysql_query($ins,$con);
	}

?>
<!DOCTYPE html>
<html>
<head>
<!--Animation right-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!--End-->

<style> 
html { 
  background: url() no-repeat center fixed; 
  background-size: cover;
}

body { 
  color: white; 
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Job Vacancy</title>
<!--<style>
                body {
  background-image: url("http://www.yossman.net/canweb/himages/newlib/backgrds/paper.gif");
}
</style>-->
</head>
<?php /*?><body class="" img src="../Images/download.png" style="background-color:#878f99;">
<?php
include("headerJ.php")
?>
<br/><br/>
<h1 style="text-align:center; font-style:italic; font-size:24px;">Add  here  the  branches  details</h1>

<br />
<br />	
<div class="main-panel">
<form id="form1" name="form1" method="post" action="">
<center>
<div class="w3-animate-zoom">
<div id="tab" style="border-radius:8px; border:0px solid #000 ; width:32%; background-color:" align="center">
  <table width="479" height="1015" border="0" cellpadding="1" cellspacing="2">
    <tr>
      <th width="213" scope="row" style="text-align:center; color:#FFF;"><b>Job Category</b></th>
      <td width="198"><select name="selCategory" id="selCategory" class="form-control" required>
      <option value="">-----Select-----</option>
<?php
       $sel="select * from tbl_jobcategory";
	   $rows=mysql_query($sel);
	   while($data=mysql_fetch_array($rows))
	{

?>
    <option value="<?php echo $data['jobcategory_id']; ?>"><?php echo $data['jobcategory_name']; ?></option>
<?php
	}
?>
      </select></td>
    </tr>
    <tr>
      <th scope="row" style="text-align:center; color:#FFF;"><b>Qualification</b></th>
      <td><select name="selQualif" id="selQualif" class="form-control" required>
       <option value="">-----Select-----</option>
<?php
       $sel="select * from tbl_qualification";
	   $rows=mysql_query($sel);
	   while($data=mysql_fetch_array($rows))
	{

?>
    <option value="<?php echo $data['qualification_id']; ?>"><?php echo $data['qualification']; ?></option>
<?php
	}
?>
      </select></td>
    </tr>
    <tr>
      <th scope="row" style="text-align:center; color:#FFF;"><b>Number Of Vacancy</b></th>
      <td><input type="text" name="txtVacancy" id="txtVacancy" placeholder="Enter vacancy Number.." class="form-control" required/></td>
    </tr>
    <tr>
      <th scope="row" style="text-align:center; color:#FFF;"><b>Salary</b></th>
      <td><input type="text" name="txtSalary" id="txtSalary" placeholder="Enter salary.." class="form-control" required/></td>
    </tr>
    <tr>
    <th scope="row" style="text-align:center; color:#FFF;"><b>Job</b></th>
    <td><select name="selJob" id="selJob"class="form-control" required>
        <option value="">-----Select-----</option>
        <option value="None">None</option>
        <option value="Fultime">Full Time</option>
        <option value="Parttime">Part Time</option>
        </select>
     </td>
    <tr>
      <th scope="row" style="text-align:center; color:#FFF;"><b>Experience</b></th>
      <td><select name="selExp" id="selExp" class="form-control" required>
       <option value="">-----Select-----</option>
       <option value="None">None</option>
       <option value="Fresher">Fresher</option>
       <option value="Experienced">Experienced</option>
       <option value="1 year">1 year</option>
       <option value="1-2 year">1-2 years</option>
       <option value="1-2 year">3-4 years</option>
       <option value="1-2 year">5-6 years</option>
       <option value="1-2 year">7-8 years</option>
       <option value="1-2 year">8-9 years</option>
       <option value="1-2 year">9-above years</option>

      </select></td>
    </tr>
    <tr>
      <th scope="row" style="text-align:center; color:#FFF;"><b>Location</b></th>
      <td><select name="selLoc" id="selLoc" class="form-control" required>
       <option value="">-----Select-----</option>
       <?php
       $selp="select * from tbl_district";
	   $rowp=mysql_query($selp);
	   while($datap=mysql_fetch_array($rowp))
	{

?>
    <option value="<?php echo $datap['district_id']; ?>"><?php echo $datap['district_name']; ?></option>
<?php
	}
?>
      </select>
      </tr>
 
    <tr>
      <th scope="row" style="text-align:center; color:#FFF;"><b>Last Date To Apply</b></th>
      <td><input type="date" name="txtDate" id="txtDate" class="form-control" required/></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="btnsave" id="btnsave" class="btn btn-primary" value="Submit" style="width:100px;"/></td>
    </tr>
  </table>
  </div></div>
  
  </center>
</form><?php */?>
<?php /*?><?php
include("../Guest/footer.php")
?>
<?php */?>
</body>
</html>















<?php		 
		

        include("../Connection/Connection.php");
		

    

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Saved jobs</title>

<link rel="stylesheet" type="text/css" href="formstyle.css" />
<?php
include("Links.php");
?>


<?php
include("HeaderJobApply.php");
?>
</head>

<body>



<table class="w3-table w3-striped w3-bordered" border="0" width="60%" height="100"><br/><br/><br/><br/><br/><br/>
       <tr>
       <td style="text-align:center;"><!--<b>Job Category</b>--></td>
       <td style="text-align:center;"><!--<b>Company</b>--></td>
       <td style="text-align:center;"><!--<b>No. Of Vacancy</b>--></td>
       <td style="text-align:center;"><!--<b>Qualification</b>--></td>
       <td style="text-align:center;"><!--<b>Last Date To Apply</b>--></td>
       </tr>
       


<tr class="w3-hover-grey">
       <td style="text-align:center;"><?php echo $data['jobcategory_name'];?></td>
       <td style="text-align:center;">
	   <img src="../Company/Proof/<?php echo $data['company_logo'];?>" width="80px" height="80px"/></td>
       <td style="text-align:center;"><?php echo $data['vacancy_no'];?>&nbsp;<b>Vacancy</b></td>
       <td style="text-align:center;"><b>Qualification:</b><br/><?php echo $data['qualification'];?></td>
         <td style="text-align:center;"><b>Last Date:</b>&nbsp;<?php echo $data['last_datetoapply'];?></td>
         <td width="12%" style="text-align:center;"><a href="JobApply.php?jobvacid=<?php echo  $data['jobvacancy_id'];?>">
         <b style="color:#060;">Apply</b></a></td>
          </tr>
</body>
<?php /*?><?php
include("Footer.php");
?><?php */?>
</html>