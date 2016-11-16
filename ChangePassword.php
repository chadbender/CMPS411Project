<?php
	include('session.php');
?>
<html>

	<head>
		<title>Change Password</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; " >
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Report Menu</b></div>
				
            <div style = "margin:30px">
			<br />
			<br />
			<h3><b>Please change your password below.</b><h3>
			</br>
			</br>
               <form action = "ChangedPWord.php" method = "post">
                  <label>Username:            </label><input type = "text" name = "username" value="<?php $user = $_SESSION['login_user']; echo $user; ?>" class = "box"/><br /><br />
				  <label>New Password:        </label><input type = "password" name = "newpassword" class = "box" /><br/><br />
				  <label>Confirm New Password:</label><input type = "password" name = "confirmpassword" class = "box" /><br/><br />
                  <input type = "submit" value = "Change Password"/><br />
               </form>
				
            </div>
				
         </div>
			
      </div>
</body>
</html>