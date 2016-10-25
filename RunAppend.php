<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Performance Indicator Table</b></div>
				
            <div style = "margin:30px">

				<p>
					<b> 2016 > PI Table</b>
				</p>

				<p><b>
				<?php
				include('session.php');
				//Check if the baseRubric for outcome has already been created
				$OutcomeSelected = mysqli_real_escape_string($db,$_POST['OutcomeSelected']);
				$sql = "SELECT StudentOutcome FROM baseRubric WHERE StudentOutcome='$OutcomeSelected'";
				$result = mysqli_query($db,$sql);
				$rowCount = mysqli_num_rows($result);
	
				//if the resulting query returns 0 rows, we will create the base rubric
				if($rowCount==0){
					$sql2 = "SELECT id,outcome,indicator FROM soandpi WHERE outcome='$OutcomeSelected'";
					$result2 = mysqli_query($db,$sql2);
					$numOfRows = mysqli_num_rows($result2);
	
					//The for loop runs through the above query assigning indicator2[0-6] with a performance indicator
					for($i=0; $i<$numOfRows; $i++){
							mysqli_data_seek($result2,$i);
							$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
							$indicator2[$i] = $row2['indicator'];
					}
	
					//The for loop checks how many blank performance indicators are left, and assigns the value NULL to them
					for($j=$numOfRows;$j<6;$j++){
						$indicator2[$j] = "";
					}
	
					//Creates the baseRubric for each Student Outcome
					$append = "INSERT INTO baserubric 
								(StudentOutcome,PerfIndi1,PerfIndi2,PerfIndi3,PerfIndi4,PerfIndi5,PerfIndi6) 
								VALUES 
								('$OutcomeSelected','$indicator2[0]','$indicator2[1]','$indicator2[2]','$indicator2[3]','$indicator2[4]','$indicator2[5]')";		
					$run = mysqli_query($db,$append);
					echo "Student Outcome ($OutcomeSelected) was successfully created.";
				}
					//If the baseRubric for outcome is already created then it will return this.
				Else{
					echo "Student Outcome ($OutcomeSelected) has already been created.";
				}
	
				?>
				</b></p>

				<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
				
				<br />
				-->
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
