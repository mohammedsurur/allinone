<?php  

    require_once "connection/connection.php";
    ?>
<!---------------- Session Ends form here ------------------------>
<!doctype html>
<html lang="en">

<head>
<?php include('css-style.php') ?>
    
</head>
<body>
<header class="header_inner about_page">
<!-- Preloader -->
<?php include('header.php') ?>

</header> <!-- End nav -->


    <?php include('login.php') ?>

<?php  
   $query="select * from directorates_account where position='Deputy Dean of Institutional Development and Industry Counseling' AND account_status='Active' ";  
    $run=mysqli_query($con,$query);
    $row=mysqli_fetch_array($run);
    if ($row > 0) {
        
        $position= $row["position"]; 
        $profile_image= $row["profile_image"]; 
    

    ?> 
<section class="teachers_profile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 teacher-detail-left">
                <div class="teacher_info_wrapper">
                    <div class="teacger-image">
                        <img src=<?php echo "admin/images/$profile_image"  ?> alt="" class="img-fluid">
                    </div>
                    <div class="social_wraper">
                        <ul class="social-items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            
                        </ul>
                    </div> 
                    
                </div>
            </div><!-- Ends: .teacher-detail-left -->
            <div class="col-sm-8 teacher-detail-right">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="teacher-info">
                            <ul class="list-unstyled">
                                <li>
                                    <h3>Name :</h3>
                                    <span><?php echo $row["first_name"]." ".$row["middle_name"];  ?></span>
                                </li>
                                <li>

                                    <h3>Position :</h3>
                                    <span><?php echo $row["position"];  ?></span>
                                </li>
                                <li>
                                    <h3>Email :</h3>
                                    <span><?php echo $row["email"];  ?></span>
                                </li>
                                <li>
                                    <h3>Phone Number :</h3>
                                    <span><?php echo $row["phone_no"];  ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-sm-12">
                        <div class="courses_tab_wrapper">  
                            <div class="courses_details_nav_tabs">     
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab"><i class="flaticon-info-sign"></i>Dean Message</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#curricularm" role="tab" data-toggle="tab"><i class="flaticon-portfolio"></i>Services</a></li>
                                   
                                </ul>
                            </div>   

                            <!-- Tab panes -->
                            <div class="tab_contents tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                     <p>“<?php echo $row["speach"];  ?>”</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="curricularm">
                                   <ul class="quick_inf0">
                                         <?php                                  
                                        $query1="select * from service where catagory='$position'";
                                         $run1=mysqli_query($con,$query1);
                                         while ($row1=mysqli_fetch_array($run1)) {
                                            $service = $row1["service"];
                                            $service_id = $row1["service_id"];
                                                 ?>
                                            <li>
                                                <?php echo ">>-  <a  href=service_details.php?service_id=".$row1['service_id'].">".$row1['service']." </a> ";  ?>

                                            </li>
                                        <?php
                                    }?>
                                    </ul>
                               
                                </div>                                
                              
                            </div>
                        </div>  
                    </div>
                </div>
            </div><!-- Ends: .teacher-detail-right -->
        </div>
    </div>
</section><!-- Ends: .teacher-details-wrapper -->



    <?php  } else {  echo '

<section class="popular_courses">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>File Not Found!!!!</h2>
                     
                </div><!-- ends: .section-header -->
            </div>

                                    
        </div>

    </div>
</section>';
  } ?>

    <?php include('footer.php') ?>
</body>


</html>