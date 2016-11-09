<html>

	<head>
		<title>Edit/Add/Delete PI</title>
		<link rel="stylesheet" type="text/css" href="Style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Edit/Add/Delete PI</b></div>
				
            <div style = "margin:30px">

				<p>
					<b> Edit Performance Indicator(s)</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<center>
				<p>
				<?php
					include('session.php');

					$OutcomeSelected = mysqli_real_escape_string($db,$_POST['OutcomeSelected']);
					//echo $OutcomeSelected;
					$sql = "SELECT id,outcome,indicator FROM soandpi WHERE outcome='$OutcomeSelected'";
					$result = mysqli_query($db,$sql);
			
					echo "<table>";
						while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							$id = $row['id'];
							$outcome   = $row['outcome'];
							$indicator = $row['indicator'];
							//echo "<tr><td>".$id."</td>";
							echo "<td>".$outcome."</td>";
							echo "<td>".$indicator."</td>";
							echo "<td><form action='EditPI.php' method='post'><input type='hidden' name='tempid' value='".$row['id']."'/><input type='submit' name='submit-btn' value='edit' /></form></td>";
							echo "<td><form action='ConfirmDeletePI.php' method='post'><input type='hidden' name='tempid' value='".$row['id']."'/><input type='submit' name='submit-btn' value='delete' /></form></td></tr>";
						}
					echo "</table>";
				?>
				
				</p>
				<center/>
				
				<!-- When this button is pressed, it will submit the value of student outcome to SubmitNewPI which gives us a starting point for inserting a new row -->
				<form action="CreateNewPI.php" method="post">
					<input type="submit" value="Add New PI" style = "float:right">
					<input type="hidden" name="OutcomeSelected" value="<?php echo $OutcomeSelected; ?>" style = "float:center">
				</form>

				<form action="./PITable.php">
					<input type="submit" value="Go Back" style = "float:left">
				</form>
				<br/>
				
			<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			-->		
            </div>
				
         </div>
			
      </div>
</body>
</html>