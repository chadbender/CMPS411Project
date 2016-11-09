<?php
   include('Config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   //echo $user_check;
   $ses_sql = mysqli_query($db,"select username from login where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   //echo $login_session;
   if(!isset($_SESSION['login_user'])){
      header("location:Login.php");
   }
?>