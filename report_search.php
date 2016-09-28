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
				
				<form method ="post">
				
					<p>
					<b> Select Rubric:   </b>
					<select name="SelectedRubric">
						<?php
						$sql1 = "SELECT StudentOutcome FROM assignedRubric";
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
						$sql2 = "SELECT courseNum FROM coursenumber
									INNER JOIN assignedRubric
									ON assignedRubric.CourseNumberFK=coursenumber.ID";
						$result2 = mysqli_query($db, $sql2);
						while($row2 = mysqli_fetch_assoc($result2)){
							echo '<option value='.$row2['courseNum'].'>'.$row2['courseNum'].'</option>';
						}
						?>
					</select>
					</p>
					
					<b> Select Year:   </b>
					<select name="SelectedYear">
						<?php
						$sql1 = "SELECT DISTINCT Yr FROM assignedRubric";
						$result1 = mysqli_query($db, $sql1);
						while($row1 = mysqli_fetch_assoc($result1)){
							echo '<option value='.$row1['Yr'].'>'.$row1['Yr'].'</option>';
						}
						?>
					</select>
					</p>
				</form>
				
				<form action="./report_results.php">
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
