<html>

	<head>
		<title>Submit Professor</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Submit Professor</b></div>
				
            <div style = "margin:30px">

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				<?php
					//Inserts the new Professor
					include('session.php');
					$FName = mysqli_real_escape_string($db,$_POST['FName']);
					$LName = mysqli_real_escape_string($db,$_POST['LName']);
					$Email = mysqli_real_escape_string($db,$_POST['Email']);
					$sql2 = "INSERT INTO Professor (FName,LName,Email) VALUES ('$FName','$LName','$Email')";
					$result2 = mysqli_query($db,$sql2);
				?>
				<b>
				<?php
   					If($result2=1){
						echo "Professor was successfully added.";
					}
					else
					{
						echo "There was a problem adding the Professor.";
					}
				?>
				</b>
				</br>
				</p>
				
				<form action="professor_page.php">
					<input type="submit" value="Go Back">
				</form>
				
			<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			-->		
            </div>
				
         </div>
			
      </div>
</body>
</html>