<html>

	<head>
		<title>Professor Assignment Page</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div align = "center">
         <div style = "width:700px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Professor Assignment Page </b></div>
				
            <div style = "margin:30px">

				<p>
					<b> Edit Professor Information</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				<?php
					include('session.php');

					
					$sql = "SELECT ID,FName,LName,Email FROM professor";
					$result = mysqli_query($db,$sql);
			
					echo "<table>";
						while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							$ID = $row['ID'];
							$FName   = $row['FName'];
							$LName = $row['LName'];
							$Email = $row['Email'];
							echo "<td>".$FName."</td>";
							echo "<td>".$LName."</td>";
							echo "<td>".$Email."</td>";
							echo "<td><form action='EditProfessor.php' method='post'><input type='hidden' name='tempid' value='".$row['ID']."'/><input type='submit' name='submit-btn' value='edit' /></form></td>";
							echo "<td><form action='ConfirmDeleteProfessor.php' method='post'><input type='hidden' name='tempid' value='".$row['ID']."'/><input type='submit' name='submit-btn' value='delete' /></form></td></tr>";
						}
					echo "</table>";
					
				?>
				
				</p>
				
				
				<form action="CreateNewProfessor.php" method="post">
					<input type="submit" value="Add New Professor">
					<input type="hidden" name="OutcomeSelected" value="<?php echo $OutcomeSelected; ?>">
				</form>

				<form action="./report_menu.html">
					<input type="submit" value="Go Back">
				</form>
				
				
            </div>
				
         </div>
			
      </div>
</body>
</html>