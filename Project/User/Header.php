 <?php

        include("../Connection/Connection.php");
ob_start();

?>

 
 
 <!--<div id="preloader">
        <i class="circle-preloader"></i>
    </div>-->

    <!-- ##### Header Area Start ##### -->
  <!--Anim-->  
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    -->    
    <!--End-->
    <header class="header-area" style=" background-image:url(../Freelancer/Photo/header-bg.jpg); height:500px;">
  <!--  <center>
<header style=" background-image:url(../Freelancer/Photo/SecuritClearances.jpg); height:600px;">
<div class="w3-animate-zoom"><h1 style="color:#FFF;">
            Hai&nbsp;&nbsp;<?php echo $_SESSION['username']; ?></h1></div>
</header></center>
-->

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                   
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                
                                <img src="" alt=""><h2 style="color:#0C3; size:100px;">
                                <div class="w3-animate-right">
                                
                                QReoTech<sup>.com</sup></div></h2>
                     
                            
                            </div>
                           
                                 <center> 
                              <br/>
                            <br/><br/><br/><br/><br/><br/>
                          
                          <!--Spinner-->
                          
                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 						<!--Spinner ends-->
                            
                               <h1 align="center" style="color:#FFF;"><i>
    Hai&nbsp;&nbsp;<?php echo $_SESSION['username']; ?></i></h1><br/><br/><br/></center>
                            <div class="login-content">
                                <div class="spinner-grow spinner-grow-sm" style="background-color:#F00;"></div><a href="../Guest/index.php" style="color:#F00;">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/><br/><br/><br/>
            
            <!--<img src="../Freelancer/Photo/Web-Tech-Stack-Banner-1.webp"/></div>
           -->
        </div>
<style>

#academyNav {border-radius:50px;}
</style>


        <!-- Navbar Area -->
        <div class="academy-main-menu" id="menu">
            <div class="classy-nav-container breakpoint-off"><br/><br/>
                <div class="container">
                    <!-- Menu --><div class="w3-animate-bottom">
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span>
                            </span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span>
                                <span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="HomePage.php"><!--<i class="fa fa-home w3-margin-right" ><b style="color:#000;">-->
                                    <i style='font-size:24px' class='fas'>&#xf015;</i>
                                    Home</b></i></a>
                                    </li>
 
 
 <!--My profile icon-->                                   

<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
                                
             
              
                
              
              <i class="material-icons">
 <a href="../User/Notification.php"><img src="https://img.icons8.com/android/2x/appointment-reminders.png"/ style="width:25px; height:25px;"></a></li></i>
         <?php
      $sele="select * from  tbl_jobvacancy ";
	 $row=mysql_query($sele,$con);
	 if($datas=mysql_fetch_array($row))
  {
?>
              <!--</a>--><span class="w3-badge w3-red"><?php echo $datas['jobvacancy_id']; ?></span><?php } ?>
          <li><a href="#">More</a>
                                        <ul class="dropdown">
                                        
                                            <li><a href="MyProfile.php"><i style='font-size:24px' class='fas'>&#xf501;</i>MyProfile</a></li>
                                            <li><a href="EditProfile.php"><i style='font-size:24px' class='fas'>&#xf4ff;</i>EditProfile</a></li>
                                            <li><a href="ChangePassword.php">ChangePassword</a></li>
                                            <li><a href="../User/UserApply-View.php">My Applys</a></li>
                                            <li><a href="../User/SavedJobs.php"><i style='font-size:20px' class='fas'>&#xf07c;</i>Saved jobs</a></li>
                                            
                                            
                                         </ul>
                                    </li>
          <li><a href="#">Company</a>
                                        <ul class="dropdown">
                                        
                                            <li><a href="../User/UserVacancy.php">Vacancies</a></li>
                                            <li><a href="BranchComp.php">Branches</a></li>
                                            <li><a href="Response.php"><i style='font-size:24px' class='fas'>&#xf4fc;</i>Response</a></li>
                                            <!--<li><a href="ChangePassword.php">ChangePassword</a></li>
                                            <li><a href="../User/UserApply-View.php">My Applys</a></li>
                                            -->
                                            
                                         </ul>
                                    </li>
          <li><a href="#">Interview</a>
                                        <ul class="dropdown">
                                        
                                            <li><a href="../Guest/InterviewD.php"><i style='font-size:24px' class='fas'>&#xf0c0;</i>Guide Line</a></li>
                                            <!--<li><a href="BranchComp.php">Branches</a></li>-->
                                            <!--<li><a href="EditProfile.php">EditProfile</a></li>
                                            <li><a href="ChangePassword.php">ChangePassword</a></li>
                                            <li><a href="../User/UserApply-View.php">My Applys</a></li>
                                            -->
                                      <!--      
                                         </ul>
           <li><a href="Filter.php">Filter</a></li>-->
                                       
                                    
                                     <!--<li><a href="Search.php">Search</a></li>-->
                           
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                        
                        
                        
                        
                        
                        

                        <!-- Calling Info -->
                        <div class="calling-info" id="academyNav">
                            <div class="call-center">
                               
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
          
            
    </header>
     <section class="hero-area"></section></div>
   
   

 
     
   <!--Panel-->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--end-->
 <center>
<div class="w3-container">
<div class="w3-panel w3-white" style="width:1050px;">


<?php

include("Search.php");
            
?>  

</div>
</div></div></div>
</center>



     <br />
     <br />
     <br />
     <br />
     <br />
     