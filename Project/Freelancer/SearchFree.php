<?php


        include("../Connection/Connection.php");
ob_start();

        if(isset($_POST['submit']))
	{
		
	$sel="select * from tbl_jobvacancy where company_id='".$_POST['company']."' OR jobcategory_id='".$_POST['category']."' OR 
	      place_id='".$_POST['place']."'";
		  
	   $rows=mysql_query($sel,$con);
	  header("location:Result.php?company_id=".$_POST['company']."&jobcategory_id=".$_POST['category']."&place_id=".$_POST['place']."");
	
}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search jobs</title>
</head>

<body>

<section class="ftco-domain">
    	<div class="container">
    		<div class="row d-flex align-items-center justify-content-center">
    			<div class="col-lg-10 p-5 ftco-wrap ftco-animate">
    				<form action="" class="domain-form d-flex mb-3" method="post">
              <!--<div class="form-group domain-name">
                <input type="text" class="form-control name px-4" placeholder="Enter your domain name...">
              </div>-->
              
              <div class="form-group domain-select d-flex">
	              <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="company" id="" class="form-control" required>
                  	<option value="">--Company--</option>
<?php
       $sel="select * from tbl_companyregistration";
	   $rows=mysql_query($sel,$con);
	   while($data=mysql_fetch_array($rows))
	 
	{
?>
      <option value="<?php echo $data['company_id']; ?>"><?php echo $data['company_name']; ?></option>
<?php
	}
?>
 
                  </select>
                </div>&nbsp;&nbsp;
                <div class="form-group domain-select d-flex">
	              <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="category" id="" class="form-control">
                  	<option value="">--Category--</option>
<?php
       $sel="select * from tbl_jobcategory";
	   $rows=mysql_query($sel,$con);
	   while($data=mysql_fetch_array($rows))
	 
	{
?>
      <option value="<?php echo $data['jobcategory_id']; ?>"><?php echo $data['jobcategory_name']; ?></option>
<?php
	}
?>

                  </select>
                </div>&nbsp;&nbsp;
              <div class="form-group domain-select d-flex">
	              <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="place" id="" class="form-control">
                  <option value="">--Place--</option>
                  <?php
       $sel="select * from tbl_district";
	   $rows=mysql_query($sel,$con);
	   while($data=mysql_fetch_array($rows))
	 
	{
?>
      <option value="<?php echo $data['district_id']; ?>"><?php echo $data['district_name']; ?></option>
<?php
	}
?>

   
                  </select>
                </div>&nbsp;&nbsp;
                <input type="submit" name="submit" class="search-domain btn btn-primary text-center" value="Search">
	            </div>
            </form>
            
</body>
</html>