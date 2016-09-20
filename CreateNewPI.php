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
         <div style = "width:500px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Data Collection Table for Rubric * </b></div>
				
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
				<label>SO: &nbsp &nbsp  </label><label>New PI:</label>
				</br>
				<input type="text" name="OutcomeSelected" value="<?php echo $OutcomeSelected; ?>" size="1">
				<input type="text" name="NewPI" size="50">
				</br>
				</br>
				<input type="submit" value="Create New PI">
				
			</form>
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

