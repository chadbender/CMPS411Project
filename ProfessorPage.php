<html>

	<head>
		<title>Professor Information Page</title>
		<link rel="stylesheet" type="text/css" href="Style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Professor Information Table</b></div>
				
            <div style = "margin:30px">

				<p>
					<b>Professor Information </b>
				</p>

				<p>				
				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<center>
				<?php
					include('session.php');

					$sql = "SELECT id,FName,LName,Email FROM Professor ORDER BY LName ASC";
					$result = mysqli_query($db,$sql);
			
					echo "<table>";
						while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							$id = $row['id'];
							$FName   = $row['FName'];
							$LName = $row['LName'];
							$Email = $row['Email'];
							//echo "<tr><td>".$id."</td>";
							echo "<td>".$FName."</td>";
							echo "<td>".$LName."</td>";
							echo "<td>".$Email."</td>";
							echo "<td><form action='EditProfessor.php' method='post'><input type='hidden' name='tempid' value='".$row['id']."'/><input type='submit' name='submit-btn' value='edit' /></form></td>";
							echo "<td><form action='ConfirmDeleteProfessor.php' method='post'><input type='hidden' name='tempid' value='".$row['id']."'/><input type='submit' name='submit-btn' value='delete' /></form></td></tr>";
						}
					echo "</table>";
				?>
				</center>
				</p>

				<form action="./ReportMenu.html">
					<input type="submit" value="Go Back" style = "float:left">
				</form>
				<form action="CreateNewProfessor.php">
					<input type="submit" value="Add Professor" style = "float:right">
				</form>
				<br />
				<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					-->
            </div>
				
         </div>
			
      </div>
</body>
</html>