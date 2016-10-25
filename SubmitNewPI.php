<html>

	<head>
		<title>Data Collection Table</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Data Collection Table for Rubric</b></div>
				
            <div style = "margin:30px">

				<p>
					<b>Performance Indicator(s)</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				<?php
					//Inserts the new Performance Indicator
					include('session.php');
					$Outcome = mysqli_real_escape_string($db,$_POST['OutcomeSelected']);
					$PI = mysqli_real_escape_string($db,$_POST['NewPI']);
					$sql2 = "INSERT INTO soandpi (Outcome,Indicator) VALUES ('$Outcome','$PI')";
					$result2 = mysqli_query($db,$sql2);
				?>
				<b>
				<?php
   					If($result2=1){
						echo "Performance Indicator was successfully added.";
					}
					else
					{
						echo "There was a problem adding the Performance Indicator.";
					}
				?>
				</b>
				</br>
				</br>
				<?php
					//Displays the performance indicators
					$OutcomeSelected = mysqli_real_escape_string($db,$_POST['OutcomeSelected']);
					$OutcomeSelected;
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