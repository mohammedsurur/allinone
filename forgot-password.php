
<?php require_once("connection/connection.php");
if(isset($_SESSION["login_sess"])) 
{
  header("location:account.php"); 
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



<!-- forgot pass section -->
<section class="forgot_pass">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-7 col-sm-7 col-md-7 col-lg-7 mx-auto">
				<div class="forgot_wrapper">
					<h6> You will receive a link to create a new password via email.</h6>	
					<form action="forgot_process.php" method="post">
						
			<?php if(isset($_GET['err'])){
			 $err=$_GET['err'];
			 echo '<p class="errmsg">No user found. </p>';
			} 
			// If server error 
			if(isset($_GET['servererr'])){ 
			echo "<p class='errmsg'>The server failed to send the message. Please try again later.</p>";
			   }
			   //if other issues 
			   if(isset($_GET['somethingwrong'])){ 
			 echo '<p class="errmsg">Something went wrong.  </p>';
			   }
			// If Success | Link sent 
			if(isset($_GET['sent'])){
			echo "<div class='successmsg'>Reset link has been sent to your registered email id . Kindly check your email. It can be taken 2 to 3 minutes to deliver on your email id . </div>"; 
			  }
			  ?> <?php if(!isset($_GET['sent'])){ ?>
					  	<div class="form-group"> 
					 		   <label class="label_txt">Username or Email </label>
					   
					     	<input autocomplete="off" class="required form-control" placeholder="Username or email" name="login_var" type="text" value="<?php if(!empty($err)){ echo  $err; } ?>">
					  </div>
					 
						 
					
						<div class="form-group register-btn">
						 <button type="submit" name="subforgot" class="btn btn-primary reset_pass_btn">Reset Password</button>
						  <?php } ?>
						</div>	
					</form>
					</div>
			</div>												
		</div>
	</div>
</section>
<!-- ./ End section -->




<?php include("footer.php")?>
</body>


</html>




