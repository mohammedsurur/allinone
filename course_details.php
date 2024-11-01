<?php  

    require_once "connection/connection.php";
      $course_id=$_GET['course_id']
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
        
      
        if($course_id){
            $query="select * from courses_information where course_id='$course_id'";
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
                        <h2><?php echo ucwords($row['course_name']);  ?></h2>
                        <br>
                        <div class="details-img-bxo">
                            <img src=<?php echo "admin/images/$profile_image"  ;?> alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="courses_tab_wrapper">  
                        <div class="courses_details_nav_tabs">     
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab">Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="#curricularm" role="tab" data-toggle="tab">Curricularm</a></li>
                                
                            </ul>
                        </div>   

                        <!-- Tab panes -->
                        <div class="tab_contents tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                <h3>Courses Description <span>:</span></h3>
                                <p><?php echo $row['content'];  ?></p>
                                <h3>Course Objective <span>:</span></h3>
                                <p><?php echo $row['course_objectives'];  ?></p>  
                                                          
                               
                                <div class="social_wrapper d-flex">
                                    <span>Share : </span>
                                    <ul class="social-items d-flex list-unstyled">
                                        <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                    </ul>   
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="curricularm">
                                <div class="curriculum-text-box">
                                    <div class="curriculum-section">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title click">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="">
                                                        1. Welcome to the Courses<span>0/7</span></a>
                                                    </h4>

                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse in show">
                                                    <div class="panel-body">
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Course Code</span>
                                                               
                                                            </div>
                                                            <a href="#"><?php echo $row['course_code'];  ?></a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Course Name</span>
                                                                
                                                            </div>
                                                           <a href="#"><?php echo ucwords($row['course_name']);  ?></a>
                                                        </div>
                                                         <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Department </span>
                                                                
                                                            </div>
                                                            <a href="#"><?php echo ucwords($row['department_name']);  ?></a>
                                                        </div>
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Level</span>
                                                              
                                                            </div>
                                                            <a href="#"><?php echo lcfirst($row['level']);  ?></a>
                                                        </div>
                                                        <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Training Program</span>
                                                              
                                                            </div>
                                                            <a href="#"><?php echo lcfirst($row['training_program']);  ?></a>
                                                        </div>


                                                          <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Target Group</span>
                                                                
                                                            </div>
                                                            <a href="#"><?php echo lcfirst($row['target_group']);  ?></a>
                                                        </div>
                                                          <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Duration</span>
                                                                
                                                            </div>
                                                            <a href="#"><?php echo lcfirst($row['duration']);  ?></a>
                                                        </div>
                                                          <div class="curriculum-single">
                                                            <div class="lecture">
                                                                <span><i class="fa fa-file-text-o"></i>Price</span>
                                                              
                                                            </div>
                                                            <a href="#"><?php echo lcfirst($row['price']);  ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                           

                                        </div> <!-- .curriculum-section-text END -->
                                    </div>
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






<!-- Footer -->  
    <?php include('footer.php') ?>



</body>


</html>
