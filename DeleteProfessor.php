<html>

	<head>
		<title>Professor Deleted</title>
		<link rel="stylesheet" type="text/css" href="Style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Delete Professor</b></div>
				
            <div style = "margin:30px">

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				<b>
				<?php
					//Inserts the new Performance Indicator
					include('session.php');
					$TempID = mysqli_real_escape_string($db,$_POST['TempID']);
					$sql1 = "SELECT ProfFK, AssignedrubricFK FROM assign WHERE ProfFK = '$TempID'";
					$result1 = mysqli_query($db,$sql1);
					$rowCount = mysqli_num_rows($result1);
					IF($rowCount>0){
						echo "Sorry, you can't delete the professor, this would result in an orphaned record.";
					}
					ELSE {
						$sql = "DELETE FROM professor WHERE ID='$TempID'";
						$result = mysqli_query($db,$sql);
						If($result=1){
							echo "Professor was successfully deleted.";
						}
						else
						{
							echo "There was a problem deleting the professor.";
						}
					}
				?>
			
				</b>
				</br>
				</br>			
				</p>
				
				<form action="ProfessorPage.php">
					<input type="submit" value="Go Back">
				</form>
				
			<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			-->		
            </div>
				
         </div>
			
      </div>
</body>
</html>