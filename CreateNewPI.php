<?php
   include('Session.php');
?>
<html>

	<head>
		<title>Create New PI</title>
		<link rel="stylesheet" type="text/css" href="Style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Create New PI</b></div>
				
            <div style = "margin:30px">

				<p>
					<b>Create New Performance Indicator:</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				
				<?php
					$OutcomeSelected = mysqli_real_escape_string($db,$_POST['OutcomeSelected']);
					//echo $OutcomeSelected;
					
				?>
			<form action="SubmitNewPI.php" method="post">
				<label style="float:left">&nbsp &nbsp &nbsp &nbsp SO: </label><label>New Performance Indicator:</label>
				</br>
				<input type="text" name="OutcomeSelected" value="<?php echo $OutcomeSelected; ?>" size="1">
				<input type="text" name="NewPI" size="50">
				</br>
				</br>
				<br />
				<input type="submit" value="Create New PI" style = "float:right">
				<input type="submit" value="Go Back" style = "float:left" formaction="PITable.php">
				<br />
			</form>
			
				
			<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			-->		
            </div>
				
         </div>
			
      </div>
</body>
</html>

