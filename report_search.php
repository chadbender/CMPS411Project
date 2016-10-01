<?php
	include('session.php');
?>
<html>

	<head>
		<title>Report Search</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div align = "center">
		<div style = "width:350px; border: solid 1px #333333; " align = "left">
			<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Report Search</b></div>
			
			<div style = "margin:30px">
			
				<p>
					<b> Report Search </b>
				</p>
				
				<form method ="post" action="./report_results.php">
				
					<p>
					<b> Select Rubric:   </b>
					<select name="SelectedRubric">
						<?php
						$sql1 = "SELECT DISTINCT StudentOutcome FROM assignedRubric GROUP BY StudentOutcome";
						$result1 = mysqli_query($db, $sql1);
						while($row1 = mysqli_fetch_assoc($result1)){
							echo '<option value='.$row1['StudentOutcome'].'>'.$row1['StudentOutcome'].'</option>';
						}
						?>
					</select>
					</p>
					
					<p>
					<b> Select Class:   </b>
					<select name="SelectedClass">
						<?php
						$sql2 = "SELECT courseNumber.ID,courseNum FROM coursenumber
									INNER JOIN assignedRubric
									ON assignedRubric.CourseNumberFK=coursenumber.ID GROUP BY courseNum";
						$result2 = mysqli_query($db, $sql2);
						while($row2 = mysqli_fetch_assoc($result2)){
							echo '<option value='.$row2['ID'].'>'.$row2['courseNum'].'</option>';
						}
						?>
					</select>
					</p>
					
					<b> Select Year:   </b>
					<select name="SelectedYear">
						<?php
						$sql1 = "SELECT DISTINCT Yr FROM assignedRubric GROUP BY Yr";
						$result1 = mysqli_query($db, $sql1);
						while($row1 = mysqli_fetch_assoc($result1)){
							echo '<option value='.$row1['Yr'].'>'.$row1['Yr'].'</option>';
						}
						?>
					</select>
					</p>
					
					<input type="submit" value="Search">
					
				</form>				
				
				<form action="./report_menu.html">
					<input type="submit" value="Go Back">
				</form>
				
			
            </div>
				
         </div>
			
      </div>
</body>
</html>
