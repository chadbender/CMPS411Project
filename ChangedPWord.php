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
			
			</br>
			</br>
			<b>
			<form action="report_menu.php">
			<?php
				$Username = mysqli_real_escape_string($db,$_POST['username']);
				$newpassword = mysqli_real_escape_string($db,$_POST['newpassword']);
				$confirmpassword = mysqli_real_escape_string($db,$_POST['confirmpassword']);
				
				if($newpassword==$confirmpassword){
					//update password
					$salt = "l4M2!Sf_#d";
					//echo $salt;
					$hash = md5($salt.$newpassword);
					$query1 = "UPDATE login SET PWord = '$hash' WHERE UserName = '$Username'";
					$result1 = mysqli_query($db,$query1);
					echo "Password Successfully Changed.";
				}
				else{
					//tell user incosistent passwords and must be redirected to changePassword
					header("location:ChangePassword.php");
				}
			?>
			</br>
			</br>
				<input type = "submit" value = "Go to Report Menu"/><br />
				</b>
            </form>
				
            </div>
				
         </div>
			
      </div>
</body>
</html>