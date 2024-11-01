<?php  

    require_once "connection/connection.php";
      $blog_id=$_GET['blog_id']
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
        
      
        if($blog_id){
            $query="select * from blog_post where blog_id='$blog_id'";
        }
        else{
            echo "<script> (alert('You Can Not Access This file.')) </script>";

        }
        $run=mysqli_query($con,$query);
        $row=mysqli_fetch_array($run) ;
         $profile_image= $row["profile_image"] ;

        ?>



<section class="blog_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="blog_post">
                    <h3><?php echo ucwords($row['blog_title']);  ?></h3>
                    <div class="post_by d-flex">
                        <span>By - <a href="#" title="" class="bloger_name"><?php echo ucwords($row['author'] ); ?></a></span>
                        <span><?php echo $row['post_date'] ; ?></span>                        
                       
                    </div>
                    <img src=<?php echo "admin/images/$profile_image"  ;?> alt="" class="img-fluid">
                    <div class="postpage_content_wrapper">
                        <div class="social_wrapper">
                            <h4>Share</h4>
                            <ul class="social_items list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                
                            </ul>
                        </div>
                        <div class="blog_post_content">
                            <p><?php echo lcfirst( $row['description']) ; ?></p>    
                           
                            
                            <div class="post_response_count d-flex justify-content-between">
                                <ul class="d-flex tags">
                                    <li class="tag_headline">Tags : </li>
                                    <li><a href="#" title="">Piterson, </a></li>
                                    <li><a href="#" title="">Cavien, </a></li>
                                    <li><a href="#" title="">human, </a></li>                    
                                    <li><a href="#" title="">master, </a></li>
                                    <li><a href="#" title="">pleasure</a></li>
                                </ul>
                                <ul class="d-flex comnent_count">
                                    <li><i class="fas fa-thumbs-up"></i>3 Likes</li>
                                    <li><i class="fas fa-comment"></i>2 Comments</li>
                                </ul>  
                            </div>
                    
                            <!-- Blog Comment Wrappper-->
                            <div class="commnet-wrapper">
                              
                                
                                <!--  Leave Commnent Wrapper -->
                                <div class="leave_comment_wrapper">
                                    <div class="items_title">
                                        <h3 class="title">Leave A Comment</h3>
                                        <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined</p>
                                    </div>
                                    <div class="leave_comment">
                                        <div class="contact_form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                                       <input type="text" class="form-control" id="name"  placeholder="Name">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                                        <textarea class="form-control" id="comment" placeholder="Your Comment Wite Here ..."></textarea>
                                                    </div>


                                                     <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                                        <button type="submit" class="text-center">Post Comment</button>
                                                    </div>
                                                </div>
                                            </form>   
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div> <!-- End Blog Left Side-->

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">

                  

                    <div class="recent_post_wrapper widget_single">
                        <div class="items-title">
                            <h3 class="title">Recent Post</h3>
                        </div>
                            <?php  
                           $query="select * from blog_post ";       
                            $run=mysqli_query($con,$query);
                            while ($row=mysqli_fetch_array($run)){ 
                           $profile_image= $row["profile_image"];   

                            ?> 
                        <div class="single-post">
                            <div class="recent_img">
                                 <a href="#" title=""><img src=<?php echo "admin/images/$profile_image"  ;?> alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <?php echo "  <a  href=blog_details.php?blog_id=".$row['blog_id'].">".ucwords($row['blog_title'])." </a> ";  ?>
                                <div class="post-date">
                                    <span><?php echo $row['post_date']  ?></span>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                       
                      <div class="envent_all_view">
                        <a href="blog_post.php" title="">View All Post</a>
                    </div>
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
                           $profile_image= $row["profile_image"];   

                            ?> 
                               <li> <?php echo "  <a  href=department_details.php?dep_id=".$row['dep_id'].">".ucwords($row['department_name'])." </a> ";  ?></li>
                               <?php }?> 
                            </ul>
                        </div>

                    </div>  

                </div>
            </div><!-- ./ End  Blog Right Side-->
            
        </div>
    </div> 
</section> <!-- ./ End Blog Area Wrapper-->


<!-- Footer -->  
<?php include('footer.php') ?>




</body>


</html>
