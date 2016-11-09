<?php
   include('Session.php');
?>
<html>

	<head>
		<title>Delete PI Confirm</title>
		<link rel="stylesheet" type="text/css" href="Style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Delete PI</b></div>
				
            <div style = "margin:30px">

				<p>
					<center><b>Are you sure you want to delete this performance indicator?</b></center>
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
						}
						echo "</table>";
						echo "\n";
						echo "\n";
					?>
				</p>
				</center>
				<p><br /></p>
				<form action="DeletePI.php" method="post">
					<input type="submit" value="Yes" style = "float:right">
					<input type="hidden" name="TempID" value="<?php echo $TempID; ?>">
				</form>
				<form action="PITable.php">
					<input type="submit" value="Go Back" style = "float:left">
				</form>
				<br />
				
			<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			-->		
            </div>
				
         </div>
			
      </div>
</body>
</html>