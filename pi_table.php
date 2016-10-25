<html>
<?php
	include('session.php');
?>

	<head>
		<title>Performance Indicator Menu</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div align = "center">
         <div style = "width:350px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Performance Indicator Table</b></div>
				
            <div style = "margin:30px">

				<p>
					<b> 2016 > PI Table</b>
				</p>

				<p>

				</p>

				<form method="post">
					<p>
					<b> Student Outcome:   </b>
						
						<select name="OutcomeSelected" id="outcome" style = "float:right">
							<?php
								$sql = "SELECT DISTINCT outcome FROM soandpi";
								$result = mysqli_query($db, $sql);
								while ($row = mysqli_fetch_assoc($result)){
									echo '<option value='.$row['outcome'].'>'.$row['outcome'].'</option>';
									}
							?>
						</select>
					</p>
					<input type="submit" value="Edit/Add/Delete" style = "float:left" formaction="data_table.php">
					<p></p>
					<input type="submit" value="Generate base Rubric" style = "float:right" formaction="RunAppend.php">
					
				</form>
				<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
				
				<br />
				-->
				<br>
				<br>
				<form action="./report_menu.html">
					<input type="submit" value="Go Back" style = "float:left">
				</form>
				
				<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
				-->
            </div>
				
         </div>
			
      </div>
</body>
</html>