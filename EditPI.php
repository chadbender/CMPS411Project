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
					<b>Performance Indicator being Edited:</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				
				<form action = "SubmitEditPI.php" method = "post">
					<?php
						//gets ID
						$TempID = mysqli_real_escape_string($db,$_POST['tempid']);
						//echo $TempID;
						$sql = "SELECT id,outcome,indicator FROM soandpi WHERE id='$TempID'";
						$result = mysqli_query($db,$sql);
						echo "<table>";
						while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							$id = $row['id'];
							$outcome   = $row['outcome'];
							$indicator = $row['indicator'];
							//echo "<tr><td>".$id."</td>";
							echo "<td>".$outcome."</td>";
							echo "<td>".$indicator."</td>";
							//echo "<td><form action='EditPI.php' method='post'><input type='hidden' name='tempid' value='".$row['id']."'/><input type='submit' name='submit-btn' value='edit' /></form></td></tr>";
						}
						echo "</table>";
						echo "\n";
						echo "\n";
					?>
					<br>
					<input type ="hidden" value = "<?php echo $id; ?>" name="ID" />
						<label>Edit PI: </label><input type = "text" name = "EditPI" value="<?php echo $indicator; ?>" size="50"class = "box" /><br/><br />
					<input type = "submit" value = " Submit "/><br />
					</p>
				</form>
				
			<form action="pi_table.php">
				<input type="submit" value="Go Back">
			</form>
				
			<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			-->		
            </div>
				
         </div>
			
      </div>
</body>
</html>

