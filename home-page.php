<!---------------- Session starts form here ----------------------->
<?php  

    require_once "connection/connection.php";
    ?>
<!---------------- Session Ends form here ------------------------>

      <?php
        
        $query="select * from blog_post ";
      
       
        $run=mysqli_query($con,$query);
       
    ?>

<section class="events-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="event_title_wrapper">  
                    <div class="sub_title">
                        <h2>Our Upcoming Events</h2>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                    </div><!-- ends: .section-header -->
                    <div class="envent_all_view">
                        <a href="blog_post.php" title="">View All Post</a>
                    </div>
                </div> 
            </div>
        </div>

        <div class="row">
            <?php  while ($row=mysqli_fetch_array($run)){ 
   $profile_image= $row["profile_image"];   
    
    ?> 
            <div class="col-sm-12 events_full_box">
                <div class="events_single">
                    <div class="event_banner">
                        <a href="#"><img src=<?php echo "admin/images/$profile_image"  ?> alt="" class="img-fluid"></a>
                    </div>
                    <div class="event_info">
                        
                        <h3><?php echo "  <a  href=blog_details.php?blog_id=".$row['blog_id'].">".ucwords($row['blog_title'])." </a> ";  ?></h3> 
                        <div class="events_time">
                            <span class="time"><i class="flaticon-clock-circular-outline"></i> <?php echo $row['post_date'];?></span>
                            <span><i class="fas fa-user"></i><?php echo ucwords($row['author']);  ?></span>
                        </div>
                        
                        <div class="event_dete">
                            <span class="date">  09 </span>
                            <span>Jan</span>
                        </div>
                    </div>
                </div>  
            </div>

<?php } ?> 
        
        </div> 
    </div>
</section><!-- ./ End Events Area section -->


<section class="about_top_wrapper">
    <div class="container">            
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="title">
                    <h2>Take The First Step To Learn With PICE.</h2>
                    <p>Education is a means of achieving a world of peace, justice, freedom, and equality for all. Thus, education is extremely necessary for all. No good life is possible without education. It indorses the intelligence of human beings, develops his skill, and enables him to be industrious. </p>
                 </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">            
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 ml-auto p-0">
                <div class="banner_learn">
                    <img src="images/banner/image3.jpg" alt="" class="img-fluid">
                 </div>
            </div>
        </div>
    </div>
    <div class="items_shape"></div>
    <div class="story_about">
        <div class="container">            
            <div class="row">
                <div class="col-12 col-sm-6 col-md-7 col-lg-7">
                    <div class="story_banner">
                        <img src="images/banner/hero-bg.jpg" alt="" class="img-fluid">
                     </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="about_story_title">
                        <h2>The Srory Of PICE.</h2>
                        <p>Vocational education programs have made a real difference in the lives of countless young people nationwide; they build self-confidence and leadership skills by allowing students to utilize their unique gifts and talents.</p>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End about_top_wrapper -->





<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="testimonial_title">
                    <h2>Student Say About Us.</h2>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="testimonial_text_wrapper">
                    <div class="carousel_text slider-for">
                        <div>
                            <div class="single_box wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <p>“Today’s students can put dope in their veins or hope in their brains. If they can conceive it and believe it, they can achieve it. They must know it is not their aptitude but their attitude that will determine their altitude.”</p>
                            </div>
                        </div>
                        <div>
                            <div class="single_box wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                                <p>“Take the attitude of a student, never be too big to ask questions, never know too much to learn something new.”</p>
                            </div>
                        </div>
                        <div>
                            <div class="single_box wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                <p>The books that help you most are those which make you think that most. The hardest way of learning is that of easy reading; but a great book that comes from a great thinker is a ship of thought deep freighted with truth and beauty.” </p>
                            </div>
                        </div>
                    </div> 
                    <div class="reviewer_info">
                        <div class="carousel_images slider-nav">
                            <div class="restimonial_single_img">
                                <img src="images/trainers/worku.jpg" alt="2" class="img-fluid">
                                <div class="name_position">
                                    <span class="name">kirubel </span>
                                    <span>Graphic Student</span>
                                </div>
                            </div>                    
                            <div class="restimonial_single_img">
                                <img src="images/trainers/md.jpg" alt="2" class="img-fluid ">
                                <div class="name_position">
                                    <span class="name">Mohammed</span>
                                    <span>Web Student</span>
                                </div>
                            </div>                    
                            <div class="restimonial_single_img ">
                                <img src="images/trainers/abdurezak.jpg" alt="2" class="img-fluid">
                                <div class="name_position">
                                    <span class="name">Abdurezak</span>
                                    <span>Manufacturing Student</span>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- End Testimonial -->

<section class="teamgroup">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-0"> 
                <div class="teamgroup_info_wrapper">
                    <h2>Start now and turn your knowledge into a profitable PICE course</h2>
                    <a href="#" title="" class="srtarte_btn">Get Started Now</a>
                </div>   
                <div class="teamgroup_info_banner">
                    <img src="" alt="" class="img-fluid">
                </div>  
            </div>
        </div>
    </div>                
</section><!-- End Team Group -->
