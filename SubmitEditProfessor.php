
<?php
   include('session.php');
?>
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
					<b> Edit Performance Indicator</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
					<?php
						//include('EditPI.php');

						$EditFName = mysqli_real_escape_string($db,$_POST['EditFName']);
						$EditLName = mysqli_real_escape_string($db,$_POST['EditLName']);
						$EditEmail = mysqli_real_escape_string($db,$_POST['EditEmail']);
						$ID = mysqli_real_escape_string($db,$_POST['ID']);
						$sql = "UPDATE Professor SET FName='$EditFName', LName='$EditLName', Email='$EditEmail' WHERE ID='$ID'";
						$result = mysqli_query($db,$sql);
   
						If($result=1){
							echo "Professor was successfully updated.";
						}
						else
						{
							echo "There was a problem updating the Professor.";
						}
					?>
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