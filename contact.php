<?php  

    require_once "connection/connection.php";
  
    if (isset($_POST['submit'])) {

        $full_name=$_POST["full_name"];
        $email=$_POST["email"];
        $feedBack=$_POST['feedBack'];
     


        $query="Insert into contact(full_name,email,feedBack)values('$full_name','$email','$feedBack')";
        $run=mysqli_query($con, $query);
        if ($run) {
         
            echo "<script> (alert('Your Data has been submitted')) </script>";
        }
        else {
            echo "Your Data has not been submitted into login";
        }
        }
       
    
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




<section class="contact_info_wrapper">
     <div class="container">  
        <div class="row">  
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_info">
                    <h3 class="title">Contact Us.</h3>
                   
                    <div class="event_location_info">                  
                        <ul class="list-unstyled">
                            <li>
                                <h4 class="info_title">Address : </h4>
                                <ul class="list-unstyled">
                                    <li>Africa Union, Addis Abeba, Ethiopia</li>
                                    
                                </ul>
                            </li>
                            <li>
                                <h4 class="info_title">Phone Numbers :</h4>
                                <ul class="list-unstyled">
                                    <li>+251 11 558 4766</li>
                                 
                                </ul>
                            </li>
                            <li>
                                <h4 class="info_title">Our E-mails :</h4>
                                <ul class="list-unstyled">
                                    <li>plc.addiss@yahoo.com</li>                                    
                                </ul>
                            </li>
                             <li>
                                <h4 class="info_title">Youtube :</h4>
                                <ul class="list-unstyled">
                                    <li>plc.addiss@yahoo.com</li>                                    
                                </ul>
                            </li>                       
                        </ul>
                        <img src="images/banner/map_shape.png" alt="" class="contact__info_shpae">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_form_wrapper">
                    <h3 class="title">Get In Touch</h3>
                    <div class="leave_comment">
                        <div class="contact_form">
                            <form action="contact.php"  method="post">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                       <input type="text" class="form-control" id="name" name="full_name" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail">
                                    </div>          
                          
                                   
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <textarea class="form-control" name="feedBack" id="comment" placeholder="Your Comment Wite Here ..."></textarea>
                                    </div>
                                     <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                        <button type="submit" name="submit" class="text-center">Send Massage</button>
                                    </div>
                                </div>
                            </form>   
                        </div>
                    </div> 
                </div>
           </div>
        </div>
    </div>
</section> <!-- Contact Info Wrappper-->



<section class="contact_map">
    <div class="container-fluid">  
        <div class="row">                  
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mr-auto p-0">
                <h2 class="disabled">Google Map</h2>
                <div class="google_map">
                    <div class="gmap">
                         <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1970.3314247442297!2d38.73498395785507!3d9.00313774755041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b878388778361%3A0x4a1649b4332be7ef!2zUHJvZHVjdGl2aXR5IEltcHJvdmVtZW50IGFuZCBDZW50ZXIgb2YgRXhjZWxsZW5jZSAo4Yid4Yit4Ymz4Yib4YqQ4Ym1IOGIm-GIu-GIuOGLq-GKkyDhi6jhiI3hi5XhiYDhibUg4Yib4YuV4Yqo4YiNKQ!5e0!3m2!1sen!2set!4v1673267020201!5m2!1sen!2set" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- Ends: .gmap -->                    
                </div>
           </div>
        </div>
    </div>
</section> <!-- Ends: Google Map Area -->  



<!-- Footer -->  

    <?php include('footer.php') ?>

</body>


</html>
