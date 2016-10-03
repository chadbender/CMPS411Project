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
         <div style = "width:400px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Data Collection Table for Rubric * </b></div>
				
            <div style = "margin:30px">

				<p>
					<b>Add New Professor:</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
					label {
						display: inline-block;
						width: 90px;
					}
				</style>
				<p>
			<form action="SubmitNewProfessor.php" method="post">
				</br>
				<label>First Name:</label><input type="text" name="FName" size="30">
				</br>
				</br>
				<label>Last Name: </label><input type="text" name="LName" size="30">
				</br>
				</br>
				<label>Email Name:</label><input type="text" name="Email" size="30">
				</br>
				</br>
				<input type="submit" value="Create New Professor">
				
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

