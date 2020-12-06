 <?php

        include("../Connection/Connection.php");
ob_start();

?>

 <!--<div id="preloader">
        <i class="circle-preloader"></i>
    </div>-->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area" style=" background-image:url(../Freelancer/Photo/header-bg.jpg); height:500px;">

        <!-- Top Header Area -->
       
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                   
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="#">
                                <img src="" alt=""><h2 style="color:#0F0; size:200px;">
                                
                                
                                <div class="w3-animate-right">
                                
                                QReoTech<sup>.com</sup></div></h2></a>
                     
                            
                            </div>
                           
                                 <center> 
                              <br/>
                            <br/>
                            <div id="photo">
                            
                                <!--Spinner-->
                          
                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 						<!--Spinner ends-->
                            
                               <h1 align="center" style="color:#FFF;"><i>
    Hai&nbsp;&nbsp;<?php echo $_SESSION['freelancername']; ?></i></h1></center>
                            <div class="login-content">
                                <div class="w3-animate-right">
                                <div class="spinner-grow spinner-grow-sm" style="background-color:#F00;"></div>
                                
                                <a href="../Guest/index.php" style="color:#F00;">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        
                <center>
        
        
<!--<div class="w3-center w3-animate-top">
<div class="w3-container w3-tangerine">
  <p class="w3-xxxlarge" style="text-align:center; color:#0F0;">
  Welcome
  </p></div></div>-->
        
        </center><br/><br/>
<style>

#academyNav {border-radius:50px;}
</style>


        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu --><br/><br/><div class="w3-animate-bottom">
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
                                    <li><a href="HomePage.php"><i class="fa fa-home w3-margin-right" ><b style="color:#000;">
                                    Home</b></i></a>
                                    </li>
                                    
 <!--My profile icon-->                                   

<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
                                      
             
              
                
              
              <i class="material-icons"><li><a href="NotificationF.php"><img src="https://img.icons8.com/android/2x/appointment-reminders.png"/ style="width:25px; height:25px;"></a></li></i></a></li>
                  <?php
      $sele="select * from  tbl_jobvacancy ";
	 $row=mysql_query($sele,$con);
	 if($datas=mysql_fetch_array($row))
  {
?>
              <!--</a>--><span class="w3-badge w3-red"><?php echo $datas['jobvacancy_id']; ?></span><?php } ?>

              <li><a href="#">More</a>
                                        <ul class="dropdown">
                                            <li><a href="MyProfilef.php"><i style='font-size:24px' class='fas'>&#xf501;</i>MyProfile</a></li>
                                            <li><a href="Editprofilef.php"><i style='font-size:24px' class='fas'>&#xf4ff;</i>EditProfile</a></li>
                                            <li><a href="Changepsw.php">ChangePassword</a></li>
                                            <li><a href="Fapply.php">My Applys</a></li>
                                          <li><a href="SaveJobFree.php"><i style='font-size:20px' class='fas'>&#xf07c;</i>Saved jobs</a></li>
                                             
                                         </ul>
                                    </li>
             <li><a href="#">Company</a>
                                        <ul class="dropdown">
                                        
                                            <li><a href="FreelancerVacancy.php">Vacancies</a></li>
                                            <li><a href="../User/BranchComp.php">Branches</a></li>
                                            <li><a href="ResponseFree.php"><i style='font-size:24px' class='fas'>&#xf4fc;</i>Response</a></li>
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
                                            
                                         </ul>
                                    </li>
                                    
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
        </div><br/><br/><br/>
             
    </header>
     <section class="hero-area">
     <!--Panel-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--end-->
<!-- <center>
<div class="w3-container">
<div class="w3-panel w3-pale-green" style="width:1050px;">

<marquee direction="left" style="animation-timing-function:ease;">
<a href="FreelancerVacancy.php" style="color:#F00;">*You have new vacancies</a>
</marquee>
</div>-->
<center>
<div class="w3-container">
<div class="w3-panel w3-white" style="width:1050px;">


<?php

include("SearchFree.php");
            
?>  
</div></div></center>
</div></div></div>    
     <br />
     <br />
     <br />
     <br />
     <br />
     