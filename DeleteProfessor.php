<html>

	<head>
		<title>Professor Information</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div align = "center">
         <div style = "width:500px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Professor Information </b></div>
				
            <div style = "margin:30px">

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				<?php
					
					include('session.php');
					$TempID = mysqli_real_escape_string($db,$_POST['TempID']);
					$sql = "DELETE FROM professor WHERE ID='$TempID'";
					$result = mysqli_query($db,$sql);
				?>
				<b>
				<?php
   					If($result=1){
						echo "Professor was successfully deleted.";
					}
					else
					{
						echo "There was a problem deleting the Professor.";
					}
				?>
				</b>
				</br>
				</br>			
				</p>
				
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