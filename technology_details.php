<?php  

    require_once "connection/connection.php";
      $tech_id=$_GET['tech_id']
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
        
      
        if($tech_id){
            $query="select * from technology where tech_id='$tech_id'";
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
                    <h3><?php echo ucwords($row['technology_name']);  ?></h3>
                    <div class="post_by d-flex">
                        <span>Developed By - <a href="#" title="" class="bloger_name"><?php echo ucwords($row['developer_name']) ; ?></a></span>
                        <span>Posted On : <?php echo $row['mani_date'] ; ?></span>                        
                        <span><a href="#" title="">Position : <?php echo ucwords($row['status'] ); ?></a></span>
                    </div>
                    <img src=<?php echo "admin/images/$profile_image"  ;?> alt="" class="img-fluid">
                    <div class="postpage_content_wrapper">
                       
                        <div class="blog_post_content">
                            <p><?php echo $row['description'] ; ?></p>    
                           
                            
                            <div class="post_response_count d-flex justify-content-between">
                                
                                <ul class="d-flex comnent_count">
                                    <li>Posted By : <i class="fas fa-user"></i><?php echo ucwords($row['developer_name'] ) ?>.</li>
                                  
                                </ul>  
                            </div>
                    
                            <!-- Blog Comment Wrappper-->
                            
                        </div>
                    </div>
                </div>               
            </div> <!-- End Blog Left Side-->

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">

                  

                    <div class="recent_post_wrapper widget_single">
                        <div class="items-title">
                            <h3 class="title">Technologies</h3>
                        </div>
                            <?php  
                           $query="select * from technology ";       
                            $run=mysqli_query($con,$query);
                            while ($row=mysqli_fetch_array($run)){ 
                           $profile_image= $row["profile_image"];   

                            ?> 
                        <div class="single-post">
                            <div class="recent_img">
                                 <a href="#" title=""><img src=<?php echo "admin/images/$profile_image"  ;?> alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <?php echo "  <a  href=technology_details.php?tech_id=".$row['tech_id'].">".ucwords($row['technology_name'])." </a> ";  ?>
                                <div class="post-date">
                                    <span><?php echo $row['mani_date'] ; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                       
                      <div class="envent_all_view">
                        <a href="technology_dean.php" title="">View All Post</a>
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
