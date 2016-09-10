<?php
   include('session.php');

   //echo $user_check;
   $newPassword = mysqli_real_escape_string($db,$_POST['passcode']);
   $sql = "UPDATE admin set passcode = '$newPassword' WHERE username = '$user_check'";
   $result = mysqli_query($db,$sql);
   //$row = mysqli_fetch_assoc($result);
   //echo $row['id'];
   
   
   //$sql2 = "select 'username' FROM 'admin' WHERE 'username'='$user_check'";
   //$result = mysqli_query($db,$sql2);
   //var_dump($result);
   //echo $sql2;
   //$sql1 = "INSERT INTO 'admin' 'username' VALUES '$newPassword'";
   //$sql = "UPDATE 'admin' SET 'passcode'='$newPassword' WHERE 'username'='$user_check'";
   
?>