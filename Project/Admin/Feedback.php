<?php



 	include("../Connection/Connection.php");



	
	 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("../Includes/head.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedbackt</title>
</head>

<body>
<?php
include("../Includes/sidebar.php");
?>
<div class="main-panel">
<?php
include('../Includes/navbar.php');
?>
<div class="main-panel">
	<div class="content">
		<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Feedbacks</h4>
						<p class="card-category"></p>
					</div>
                    
                    
 			 				<p class="card-category">
                            
          <table border="1" width="700" height="200" align="center">
          <tr>
          <th style="text-align:center;">Name</th>
          <th style="text-align:center;">E-mail</th>
          <th style="text-align:center;">Feedback</th>
          </tr>                  
                            
    <?php
	     
		    $sel="select * from tbl_feedback";
			$rows=mysql_query($sel,$con);
			while($data=mysql_fetch_array($rows))
		{
	?>
        
        
        <tr>
        <td style="text-align:center;"><?php echo $data["name"]; ?></td>
           <td style="text-align:center;"><?php echo $data["email"]; ?></td>
           <td style="text-align:center;"><?php echo $data["feedback"]; ?></td>
        
        </tr>
        
<?php
}
?>	

</table>
	
                            </p>
                	</div>
                	<div class="card-body">
                    
                  	
</body>
</html>