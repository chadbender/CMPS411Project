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
					<b>Professor being Edited:</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				
				<form action = "SubmitEditProfessor.php" method = "post">
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
					<br>
					<input type ="hidden" value = "<?php echo $id; ?>" name="ID" />
						<label>Edit First Name: </label><input type = "text" name = "EditFName" value="<?php echo $FName; ?>" size="50"class = "box" /><br/><br />
						<label>Edit Last Name: </label><input type = "text" name = "EditLName" value="<?php echo $LName; ?>" size="50"class = "box" /><br/><br />
						<label>Edit Email: </label><input type = "text" name = "EditEmail" value="<?php echo $Email; ?>" size="50"class = "box" /><br/><br />
					<input type = "submit" value = " Submit "/><br />
					</p>
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