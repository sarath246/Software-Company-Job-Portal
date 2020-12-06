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

         $ins="insert into tbl_jobvacancy(jobcategory_id,company_id,vacancy_no,qualification_id,last_datetoapply,user_exp,district_id,salary,job)values('".
		 $JobCategory."','".$_SESSION['companyid']."','".$NoOfVacancy."','".$Qualification."','".$LastDate."','".$Experience."','".$Location."',
		 '".$Salary."','".$Job."')";
	
		 mysql_query($ins,$con);
	}

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body class="" >
<?php
include("../New Index/Job-post.html")
?>
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
</form>
</body>
</html>