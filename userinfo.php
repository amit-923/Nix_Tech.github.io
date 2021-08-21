<?php
$con  = mysqli_connect('localhost','root');
if($con){
       echo "conenction successful";
}
else{
       "No connect";
}
 mysqli_select_db($con,'owndatabase');

 $user=   $_POST['user'];
 $email=  $_POST['email'];
 $mobile= $_POST['mobile'];
 $comment=$_POST['comment'];

 $query ="insert into userinfo(user, email, mobile,comment) 
 valuse ('$user', '$email','$mobile','$comment')";
  
echo "$query";
 mysqli_query($con,$query);
 header('location:Home.php');
?>