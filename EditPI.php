<?php
   include('session.php');
?>
<html>
	<head>
		<title>Edit Performance Indicator</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
   <body>
   <style>
		table, th, td {
			border: 1px solid black;
		}
	</style>
    

		<form action = "SubmitNewPI.php" method = "post">
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
            <label>New PI: </label><input type = "text" name = "NewPI" class = "box" /><br/><br />
            <input type = "submit" value = " Submit "/><br />
				  
        </form>
    </body>
   
</html>
