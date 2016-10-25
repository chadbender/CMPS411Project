
<html>

	<head>
		<title>Reports Results</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Report Results</b></div>
				
            <div style = "margin:30px">
			<?php
	include('session.php');
				
	$Rubric = mysqli_real_escape_string($db,$_POST['SelectedRubric']);
	$CourseFK = mysqli_real_escape_string($db,$_POST['SelectedClass']);
	$Year = mysqli_real_escape_string($db,$_POST['SelectedYear']);

?>
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
				
				$query1="SELECT 
								assignedrubric.ID,assignedrubric.StudentOutcome,Department.Department,CourseNumber.CourseNum,semester.semester,Yr,
								NumOfStud,NumOfStudSatisfied,PerfIndi1,MethOfAsses1,UseOfResult1, PerfIndi2,MethOfAsses2,UseOfResult2,
								PerfIndi3,MethOfAsses3,UseOfResult3, PerfIndi4,MethOfAsses4,UseOfResult4, PerfIndi5,MethOfAsses5,UseOfResult5,
								PerfIndi6,MethOfAsses6,UseOfResult6 
								FROM assignedrubric 
								INNER JOIN Department ON Department.ID=assignedrubric.DepartmentFK
								INNER JOIN CourseNumber ON CourseNumber.ID=assignedrubric.CourseNumberFK
								INNER JOIN Semester ON Semester.ID=assignedrubric.SemesterFK
								INNER JOIN assign ON assign.assignedrubricFK=assignedrubric.ID
								WHERE assignedrubric.StudentOutcome='$Rubric'
								AND assignedrubric.CourseNumberFK='$CourseFK'
								AND assignedrubric.Yr='$Year' ";
				
				$result1 = mysqli_query($db,$query1);
				$row1 = mysqli_fetch_array($result1);
				
				$Semester = $row1['semester'];
				$Department = $row1['Department'];
				$NumOfStud = $row1['NumOfStud'];
				$NumOfStudSatisfied = $row1['NumOfStudSatisfied'];
				$PerfIndi1 = $row1['PerfIndi1'];
				$PerfIndi2 = $row1['PerfIndi2'];
				$PerfIndi3 = $row1['PerfIndi3'];
				$PerfIndi4 = $row1['PerfIndi4'];
				$PerfIndi5 = $row1['PerfIndi5'];
				$PerfIndi6 = $row1['PerfIndi6'];
				$MethOfAsses1 = $row1['MethOfAsses1'];
				$MethOfAsses2 = $row1['MethOfAsses2'];
				$MethOfAsses3 = $row1['MethOfAsses3'];
				$MethOfAsses4 = $row1['MethOfAsses4'];
				$MethOfAsses5 = $row1['MethOfAsses5'];
				$MethOfAsses6 = $row1['MethOfAsses6'];
				$UseOfResult1 = $row1['UseOfResult1'];
				$UseOfResult2 = $row1['UseOfResult2'];
				$UseOfResult3 = $row1['UseOfResult3'];
				$UseOfResult4 = $row1['UseOfResult4'];
				$UseOfResult5 = $row1['UseOfResult5'];
				$UseOfResult6 = $row1['UseOfResult6'];
				
				echo $Rubric."<br />";
				echo $CourseFK."<br />";
				echo $Year."<br />";
				echo $Semester."<br />";
				echo $Department."<br />";
				
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