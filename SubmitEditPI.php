
<?php
   include('Session.php');
?>
<html>

	<head>
		<title>PI Edit Submitted</title>
		<link rel="stylesheet" type="text/css" href="Style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>PI Edit</b></div>
				
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

						$EditPI = mysqli_real_escape_string($db,$_POST['EditPI']);
						$ID = mysqli_real_escape_string($db,$_POST['ID']);
						$sql = "UPDATE soandpi SET Indicator='$EditPI' WHERE ID='$ID'";
						$result = mysqli_query($db,$sql);
   
						If($result=1){
							echo "Performance Indicator was successfully updated.";
						}
						else
						{
							echo "There was a problem updating the Performance Indicator.";
						}
					?>
				</p>
				<form action="PITable.php">
					<input type="submit" value="Go Back">
				</form>
				
			<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			-->		
            </div>
				
         </div>
			
      </div>
</body>
</html>