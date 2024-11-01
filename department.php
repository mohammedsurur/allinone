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


<section class="courses_features">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                <div class="sub_title">
                    <h2>We Have Tones of Department <br>for You!!</h2>
                </div><!-- ends: .section-header -->
            </div>
        </div>
        <div class="row">           

    <?php  
   $query="select * from department_information ";       
    $run=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($run)){ 
   $profile_image= $row["profile_image"];   

    ?>     <div class="col-12 col-sm-6 col-md-4 col-lg-4 single_features_wrapper">
                <div class="feature_single feature_single_3">
                    <img src=<?php echo "admin/images/$profile_image"  ?> alt="">
                    <div class="feature_content">
                        
                        <?php echo "  <a  href=department_details.php?dep_id=".$row['dep_id']."><h3>".ucwords($row['department_name'])."</h3> </a> ";  ?>

                        <p>Over 4 Courses</p>
                    </div>
                </div>
            </div>
           
        <?php } ?> 
    </div>
        </div>
    </div>
</section>  <!-- End Courses Features -->



<!-- Footer -->  

    <?php include('footer.php') ?>


</body>


</html>
