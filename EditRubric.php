<?php
	include('config.php');
	session_start();
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
					<b> Edit Rubric</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				<?php
					// retrieve token
					if (isset($_GET["token"]) && preg_match('/^[0-9A-F]{40}$/i', $_GET["token"])) {
						$token = $_GET["token"];
					}
					else {
						throw new Exception("Valid token not provided.");
					}

					// verify token
					
					$query = "SELECT ProfFK, AssignedRubricFK, CourseNumFK, TimeStamp1 FROM assign WHERE token = '$token'";
					$result = mysqli_query($db,$query);
					$row = mysqli_fetch_array($result);
					$ProfFK = $row['ProfFK'];
					$AssignedRubricFK = $row['AssignedRubricFK'];
					$CourseNumFK = $row['CourseNumFK'];
					
					echo $ProfFK;
					echo $AssignedRubricFK;
					echo $CourseNumFK;
					// do one-time action here, like activating a user account

				?>	
				</p>
				<!--
				<form action="pi_table.php">
					<input type="submit" value="Go Back">
				</form>
				
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			-->		
            </div>
				
         </div>
			
      </div>
</body>
</html>