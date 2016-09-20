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

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				<?php
					//Inserts the new Performance Indicator
					include('session.php');
					$TempID = mysqli_real_escape_string($db,$_POST['TempID']);
					$sql = "DELETE FROM soandpi WHERE ID='$TempID'";
					$result = mysqli_query($db,$sql);
				?>
				<b>
				<?php
   					If($result=1){
						echo "Performance Indicator was successfully deleted.";
					}
					else
					{
						echo "There was a problem deleting the Performance Indicator.";
					}
				?>
				</b>
				</br>
				</br>			
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