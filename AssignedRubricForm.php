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
         <div style = "width:800px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>RUBRIC</b></div>
				
            <div style = "margin:30px">

				<p>
					<b>Rubric</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
					label {
						padding-top: 2px;
						padding-bottom: 2px;
						border: 1px solid black;
					}
				</style>
				<p>
				<label>Department:</label><input type = "text" name = "Department" value="<?php echo $Department; ?>" size="5"class = "box" /> 
				&nbsp
				<label>Course Number:</label><input type = "text" name = "CourseNum" value="<?php echo $Department; ?>" size="5"class = "box" />
				&nbsp
				<label>Semester:</label><input type = "text" name = "Semester" value="<?php echo $Department; ?>" size="5"class = "box" />
				&nbsp
				<label>Year:</label><input type = "text" name = "Year" value="<?php echo $Department; ?>" size="5"class = "box" />
				</p>
				<p>
				<label>Number of Students:</label><input type = "text" name = "NumOfStud" value="<?php echo $Department; ?>" size="5"class = "box" />
				&nbsp
				<label>Number of Students who satisfied all performance indicators:</label><input type = "text" name = "NumOfStudSatisfied" value="<?php echo $Department; ?>" size="5"class = "box" />
				</p>
				<p>
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
				</p>

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

