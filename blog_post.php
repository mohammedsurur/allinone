<?php  

    require_once "connection/connection.php";
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






<section class="latest_news_2" id="latest_news_style_2">
    <div class="container">
        <div class="row">

    <?php  
   $query="select * from blog_post ";       
    $run=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($run)){ 
   $profile_image= $row["profile_image"];   

    ?>  
           
        
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                 <div class="single_item">
                    <div class="item_wrapper">
                        <div class="blog-img">
                            <a href="#" title=""><img  src=<?php echo "admin/images/$profile_image"  ?> alt="" class="img-fluid"></a>
                          
                        </div>
                        <h3><?php echo "  <a  href=blog_details.php?blog_id=".$row['blog_id'].">".ucwords($row['blog_title'])." </a> ";  ?></h3> 
                    </div>
                    <div class="blog_title">
                        <ul class="post_bloger">
                            <li><i class="fas fa-user"></i><?php echo ucwords($row['author'] ) ?>.</li> 
                            <li><i class="flaticon-clock-circular-outline"></i><?php echo $row['post_date']  ?></li>
                            
                        </ul>               
                    </div> 
                </div>
            </div>            
<?php } ?> 
           
           

            <div class="pagination_blog">
                <ul>
                    <li><a href="#">1</a></li>
                    <li class="current"><a href="#">2</a></li>
                    <li><a href="#" class=""><i class='flaticon-right-arrow'></i></a></li>
                </ul>
            </div> 
        </div>
    </div>
</section><!-- End Our Blog -->

            

<!-- Footer -->  
    <?php include('footer.php') ?>



</body>


</html>
