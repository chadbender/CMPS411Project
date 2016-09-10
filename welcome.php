<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
	  <form action = "Update.php" method = "post">
                  <label>Update password :</label><input type = "text" name = "passcode" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
				  
               </form>
   </body>
   
</html>
