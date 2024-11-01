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
   $query="select * from directorates_account where position='Chief Principal' AND account_status='Active' ";  
    $run=mysqli_query($con,$query);
    $row=mysqli_fetch_array($run);
    if ($row > 0) {
         $profile_image= $row["profile_image"]; 
        $position= $row["position"]; 
    

    ?>  




<section class="teachers_profile">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 teacher-detail-left">
                <div class="teacher_info_wrapper">
                  <div class="teacger-image">
                    <img src=<?php echo "admin/images/$profile_image";  ?> alt="" class="img-fluid">

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
                                    <li class="nav-item"><a class="nav-link active" href="#information" role="tab" data-toggle="tab"><i class="flaticon-info-sign"></i>Message From Dean</a></li>
                                 
                                    
                                </ul>
                            </div>  
                            <!-- Tab panes -->
                            <div class="tab_contents tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                    <p>“<?php echo $row["speach"];  ?>”</p>
                                </div>
                               
                            </div>
                        </div>  
                    </div>
                </div>
            </div><!-- Ends: .teacher-detail-right -->
        </div>
    </div>
</section><!-- Ends: .teacher-details-wrapper -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Editors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Editors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Quill Editor Default</h5>

              <!-- Quill Editor Default -->
              <div class="quill-editor-default">
                <p>Hello World!</p>
                <p>This is Quill <strong>default</strong> editor</p>
              </div>
              <!-- End Quill Editor Default -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Quill Editor Bubble</h5>

              <!-- Quill Editor Bubble -->
              <p>Select some text to display options in poppovers</p>
              <div class="quill-editor-bubble">
                <p>Hello World!</p>
                <p>This is Quill <strong>bubble</strong> editor</p>
              </div>
              <!-- End Quill Editor Bubble -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Quill Editor Full</h5>

              <!-- Quill Editor Full -->
              <p>Quill editor with full toolset</p>
              <div class="quill-editor-full">
                <p>Hello World!</p>
                <p>This is Quill <strong>full</strong> editor</p>
              </div>
              <!-- End Quill Editor Full -->

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">TinyMCE Editor</h5>

              <!-- TinyMCE Editor -->
              <textarea class="tinymce-editor">
                <p>Hello World!</p>
                <p>This is TinyMCE <strong>full</strong> editor</p>
              </textarea><!-- End TinyMCE Editor -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

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
