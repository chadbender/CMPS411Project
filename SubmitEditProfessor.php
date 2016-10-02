
<?php
   include('session.php');
?>
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

				<p>
					<b> Edit Professor Information</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
					<?php
						

						$EditProfessor = mysqli_real_escape_string($db,$_POST['EditProfessor']);
						$ID = mysqli_real_escape_string($db,$_POST['ID']);
						$sql = "UPDATE Professor SET email='$EditProfessor' WHERE ID='$ID'";
						$result = mysqli_query($db,$sql);
   
						If($result=1){
							echo "Professor information was successfully updated.";
						}
						else
						{
							echo "There was a problem updating the Professor information.";
						}
					?>
				</p>
				<form action="professor_page.php">
					<input type="submit" value="Go Back">
				</form>
				
            </div>
				
         </div>
			
      </div>
</body>
</html>