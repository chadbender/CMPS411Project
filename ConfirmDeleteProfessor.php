<?php
   include('session.php');
?>
<html>

	<head>
		<title>Professor Information</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div align = "center">
         <div style = "width:500px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Professor Information </b></div>
				
            <div style = "margin:30px">

				<p>
					<center><b>Are you sure you want to delete this professor?</b></center>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
					<?php
						//gets ID
						$TempID = mysqli_real_escape_string($db,$_POST['tempid']);
						$sql = "SELECT id,fname,lname,email FROM professor WHERE id='$TempID'";
						$result = mysqli_query($db,$sql);
						echo "<table>";
						while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							$id = $row['id'];
							$fname   = $row['fname'];
							$lname = $row['lname'];
							$email= $row['email'];
							
							echo "<td>".$fname."</td>";
							echo "<td>".$lname."</td>";
							echo "<td>".$email."</td>";
						}
						echo "</table>";
						echo "\n";
						echo "\n";
					?>
				</p>
				<form action="DeleteProfessor.php" method="post">
					<input type="submit" value="Yes">
					<input type="hidden" name="TempID" value="<?php echo $TempID; ?>">
				</form>
				<form action="professor_page.php">
					<input type="submit" value="Go Back">
				</form>
		
            </div>
				
         </div>
			
      </div>
</body>
</html>