<?php  

    require_once "connection/connection.php";
      $service_id=$_GET['service_id']
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
        
      
        if($service_id){
            $query="select * from service where service_id='$service_id'";
        }
        else{
            echo "<script> (alert('You Can Not Access This file.')) </script>";

        }
        $run=mysqli_query($con,$query);
        $row=mysqli_fetch_array($run) ;
       $catagory = $row['catagory'];
 

        ?>



<section class="blog_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="blog_post">
                    <h3><?php echo ucwords($row['service']);  ?></h3>
                    <div class="post_by d-flex">
                     <span>Under - <a href="#" title="" class="bloger_name"><?php echo ucwords($row['catagory']) ; ?></a></span>
                         <span>By - <a href="#" title="" class="bloger_name"><?php echo ucwords($row['author'] ); ?></a></span>
                       
                    </div>
                                 
                    <div class="postpage_content_wrapper">
                        
                        <div class="blog_post_content">
                            <p><?php echo lcfirst($row['description']) ; ?></p>    
                        </div>
                    </div>
                </div>               
            </div> <!-- End Blog Left Side-->

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">            

                    <div class="archives widget_single">
                        <div class="items-title">
                            <h3 class="title">Services </h3>
                        </div>
                        <div class="archives-items">
                            <ul class="list-unstyled">
                                    <?php  
                           $query="select * from service where catagory = '$catagory'";       
                            $run=mysqli_query($con,$query);
                            while ($row=mysqli_fetch_array($run)){ 
                           

                            ?> 
                               <li>  <?php echo "  <a  href=service_details.php?service_id=".$row['service_id'].">".ucwords($row['service'])." </a> ";  ?></li>
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
