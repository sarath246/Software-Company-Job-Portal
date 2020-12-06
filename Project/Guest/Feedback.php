<?php

      include("../Connection/Connection.php");

   if(isset($_POST['save']))
 {
      $Feedback=$_POST['text'];
	  $name=$_POST['name'];
	  $email=$_POST['email'];

      $ins="insert into tbl_feedback(feedback,name,email)values('".$Feedback."','".$name."','".$email."')";
	  mysql_query($ins,$con);
	  
	  
 }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback</title>
<style>
#text{size:30px;}

</style>
<style>
#cardc {width:60%; border-radius:20px;}
</style>
</head><a href="Feedback.php"></a>

<body>

                <h3 class="mb-5">Enter your feedback</h3>
                
                  
              <div class="w3-container">
<div class="w3-panel w3-card w3-white w3-hover-shadow w3-animate-zoom" id="cardc"><br/><br/>
 
                  
                    <form method="post">
                    <input type="text" name="name" placeholder="Enter your name...." class="form-control" required="required" /><br/>
                    <input type="email" name="email" placeholder="Enter your e mail...." class="form-control" required="required"  /><br/>
                    <input area="text" name="text" id="text"   placeholder="Enter your feedback...." class="form-control" required></textarea>
                  <br/>
                  <div class="form-group">
                    <input type="submit" name="save" id="save" value="Sand feedback" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
                </div>
                </div>
             
</body>
</html>