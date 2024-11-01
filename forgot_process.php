<?php 
 require_once("connection/connection.php");
if(isset($_POST['subforgot'])){ 
$login=$_REQUEST['login_var'];
$query = "select * from  login where email = '$login'"; 
$res = mysqli_query($con,$query);
$result=mysqli_fetch_array($res);
if($result)
{
$findresult = mysqli_query($con, "SELECT * FROM login WHERE  email = '$login'");
if($res = mysqli_fetch_array($findresult))
{
$oldftemail = $res['email'];  
}
$token = bin2hex(random_bytes(50));
 $inresult = mysqli_query($con,"insert into login values('','$oldftemail','$token')"); 
 if ($inresult)  
 { 
$FromName="PICE";
$FromEmail="mame.surur.2523@gmail.com";
$ReplyTo="mame.surur.2523@gmail.com";
$credits="All rights are reserved | Techno Smarter "; 
$headers  = "MIME-Version: 1.0\n";
     $headers .= "Content-type: text/html; charset=iso-8859-1\n";
     $headers .= "From: ".$FromName." <".$FromEmail.">\n";
      $headers .= "Reply-To: ".$ReplyTo."\n";
      $headers .= "X-Sender: <".$FromEmail.">\n";
       $headers .= "X-Mailer: PHP\n"; 
       $headers .= "X-Priority: 1\n"; 
       $headers .= "Return-Path: <".$FromEmail.">\n"; 
         $subject="You have received password reset email"; 
     $msg="Your password reset link <br> http://localhost:8081/project/pice/password-reset.php?token=".$token." <br> Reset your password with this link .Click or open in new tab<br><br> <br> <br> <center>".$credits."</center>"; 
   if(@mail($oldftemail, $subject, $msg, $headers,'-f'.$FromEmail) ){
header("location:forgot-password.php?sent=1"); 
$hide='1';
          
    } else {
        
    header("location:forgot-password.php?servererr=1"); 
} 
      } 
      else 
      { 
          header("location:forgot-password.php?something_wrong=1"); 
      }     
}
else  
{
header("location:forgot-password.php?err=".$login); 
}
}
?>