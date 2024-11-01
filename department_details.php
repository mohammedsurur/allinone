<?php  

    require_once "connection/connection.php";
      $dep_id=$_GET['dep_id']
    ?>
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
        
      
        if($dep_id){
            $query="select * from department_information where dep_id='$dep_id'";
        }
        else{
            echo "<script> (alert('You Can Not Access This file.')) </script>";

        }
        $run=mysqli_query($con,$query);
        $row=mysqli_fetch_array($run) ;
         $profile_image= $row["profile_image"] ;
         $department_name = $row['department_name'];

        ?>


<section class="blog_wrapper" id="courses_details_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="courses_details">
                    <div class="single-curses-contert">
                        <h2><?php echo ucwords($row['department_name']);  ?></h2>
                        <br>
                        <div class="details-img-bxo">
                            <img src=<?php echo "admin/images/$profile_image"  ;?> alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="courses_tab_wrapper">  
                        <div class="courses_details_nav_tabs">     
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab">Information</a></li>
                                
                            </ul>
                        </div>   

                        <!-- Tab panes -->
                        <div class="tab_contents tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                <h3>Department Description <span>:</span></h3>
                                <p><?php echo $row['description'];  ?></p>
                                
                                
                                <div class="social_wrapper d-flex">
                                    <span>Contact Us : </span>
                                    <ul class="social-items d-flex list-unstyled">
                                        <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                    </ul>   
                                </div>
                            </div>
                        
                         
                         
                        </div>
                    </div> 
                </div>
            </div> <!--End Blog Siderbar Left-->


            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">
                    <div class="courses_features widget_single">
                        <div class="items-title">
                            <h3 class="title">Courses </h3>
                        </div>
                        <div class="features_items">
                            <ul class="list-unstyled">
                                <?php  
                           $query="select * from courses_information where department_name='$department_name' ";       
                            $run=mysqli_query($con,$query);
                            while ($row=mysqli_fetch_array($run)) {                            

                            ?> 

                                
                                 <li> <?php echo " <a  href=course_details.php?course_id=".$row['course_id']."><i class='flaticon-page'>".ucwords($row['course_name'])."</i> </a> ";  ?></li>

                              <?php }?> 
                            </ul>
                        </div>
                        <img src="images/shapes/testimonial_2_shpe_2.png" alt="" class="courses_feaures_shpe">
                    </div>  




                    

                    <div class="archives widget_single">
                        <div class="items-title">
                            
                            <h3 class="title">All Departments</h3>

                        </div>
                        <div class="archives-items">
                            <ul class="list-unstyled">
                                <?php  
                           $query="select * from department_information ";       
                            $run=mysqli_query($con,$query);
                            while ($row=mysqli_fetch_array($run)){                            

                            ?> 
                            <li> <?php echo "  <a  href=department_details.php?dep_id=".$row['dep_id'].">".ucwords($row['department_name'])." </a> ";  ?></li>
                                
                               <?php }?> 
                            </ul>
                        </div>
                    </div>  
                </div>
            </div> <!-- End Right Sidebar-->
            
        </div>
    </div> 
</section><!-- ./ End  Blog Wrapper-->
 

<section class="meet_our_team" id="become_instructorr">
    <div class="container">
        
         <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Contact Our Instructor</h2>
                </div><!-- ends: .section-header -->
            </div>
           
            </div>   
        <div class="row">
             <?php  
               $query="select * from trainers_information  where department='$department_name'";       
                $run=mysqli_query($con,$query);
                while ($row=mysqli_fetch_array($run)){  
                $profile_image= $row["profile_image"] ;
                $department = $row['department'];                          

                ?> 
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="testimonial_single">
                    <div class="reviewer_info">
                        <div class="pro_pic_teacher">
                            <img src=<?php echo "admin/images/$profile_image"  ;?> alt="2" class="img-fluid">
                        </div>
                        <div class="name_position">
                            <span class="name"><a href="#" title=""><?php echo ucwords( $row['first_name']);  ?><</a></span>
                            <span><li><?php echo    ucwords($department);  ?></li></span>
                            <span><li><?php echo  $row['phone_no'];  ?></li></span>
                            <span><?php echo  $row['email'];  ?></span>
                        </div>
                    </div>
                </div>                                       
            </div><?php }?> 
        </div>
    </div>
</section><!-- End Meet Our Team -->



<!-- Footer -->  
    <?php include('footer.php') ?>



</body>


</html>