<?php
   include('session.php');
?>
<html>

	<head>
		<title>Data Collection Table</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div align = "center">
         <div style = "width:500px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Data Collection Table for Rubric * </b></div>
				
            <div style = "margin:30px">

				<p>
					<center><b>Are you sure you want to delete this Professor?</b></center>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<center>
				<p>
					<?php
						//gets ID
						$TempID = mysqli_real_escape_string($db,$_POST['tempid']);
						//echo $TempID;
						$sql = "SELECT id,FName,LName,Email FROM Professor WHERE id='$TempID'";
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
						}
						echo "</table>";
						echo "\n";
						echo "\n";
					?>
				</p>
				</center>
				<form action="DeleteProfessor.php" method="post">
					<?php 
					//echo $TempID;
					?>
					<input type="submit" value="Yes">
					<input type="hidden" name="TempID" value="<?php echo $TempID; ?>">
				</form>
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