<?php
	include('config.php');
	session_start();
?>
<html>

	<head>
		<title>Data Collection Table</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Edit Rubric</b></div>
				
            <div style = "margin:30px">


				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				<?php
					// retrieve token
					if (isset($_GET["token"]) && preg_match('/^[0-9A-F]{40}$/i', $_GET["token"])) {
						$token = $_GET["token"];
					}
					else {
						throw new Exception("Valid token not provided.");
					}

					// verify token
					
					$query = "SELECT FName, LName, CourseNum, ProfFK, AssignedRubricFK, CourseNumFK FROM assign INNER JOIN professor ON professor.ID=assign.ProfFK INNER JOIN CourseNumber ON CourseNumber.ID=assign.CourseNumFK WHERE token = '$token'";
					$result = mysqli_query($db,$query);
					$row = mysqli_fetch_array($result);
					$ProfFK = $row['ProfFK'];
					$FName = $row['FName'];
					$LName = $row['LName'];
					$AssignedRubricFK = $row['AssignedRubricFK'];
					$CourseNum = $row['CourseNum'];
					
					
					$query1="SELECT 
								assignedrubric.ID,assignedrubric.StudentOutcome,Department.Department,CourseNumber.CourseNum,semester.semester,Yr,
								NumOfStud,NumOfStudSatisfied,PerfIndi1,MethOfAsses1,UseOfResult1, PerfIndi2,MethOfAsses2,UseOfResult2,
								PerfIndi3,MethOfAsses3,UseOfResult3, PerfIndi4,MethOfAsses4,UseOfResult4, PerfIndi5,MethOfAsses5,UseOfResult5,
								PerfIndi6,MethOfAsses6,UseOfResult6 
								FROM assignedrubric INNER JOIN Department ON Department.ID=assignedrubric.DepartmentFK
								INNER JOIN CourseNumber ON CourseNumber.ID=assignedrubric.CourseNumberFK
								INNER JOIN Semester ON Semester.ID=assignedrubric.SemesterFK
								INNER JOIN assign ON assign.assignedrubricFK=assignedrubric.ID
								WHERE assign.token='$token'";
					$result1 = mysqli_query($db,$query1);
					$row1 = mysqli_fetch_array($result1);
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
					
					// do one-time action here, like activating a user account
					
				?>		
				</p>
				<p>
				<label>Professor: </label><?php echo $FName; ?> &nbsp <?php echo $LName; ?> 
				</br>
				<label>Course Number: </label><?php echo $CourseNum; ?>
				</p>
				<!--
				<form action="pi_table.php">
					<input type="submit" value="Go Back">
				</form>
				
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			-->		
            </div>
				
         </div>
			
      </div>
</body>
</html>