
<html>

	<head>
		<title>Reports Results</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div align = "center">
         <div style = "width:250px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Report Results</b></div>
				
            <div style = "margin:30px">
			
			<style>
					table, th, td {
					border: 1px solid black;
					}
			</style>
			
			<b> Report Results</b>
			<br />
			<br />
			
			<?php
				include('session.php');
				
				$Rubric = mysqli_real_escape_string($db,$_POST['SelectedRubric']);
				$Class = mysqli_real_escape_string($db,$_POST['SelectedClass']);
				$Year = mysqli_real_escape_string($db,$_POST['SelectedYear']);
				
				echo $Rubric;
				echo $Class;
				echo $Year;
				
			?>

				
				<form action="./report_search.php">
					<input type="submit" value="Go Back">
				</form>
				<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
</body>
</html>