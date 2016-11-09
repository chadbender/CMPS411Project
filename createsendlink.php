<?php
include ('Session.php');
?>
<html>

	<head>
		<title>Create Link</title>
		<link rel="stylesheet" type="text/css" href="Style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Assignment</b></div>
				
            <div style = "margin:30px">
			<form action="createsendlink.php" method="post">
				<p>
				<b>
				<?php
					$Rubric = mysqli_real_escape_string($db,$_POST['Rubric']);
					$Department = mysqli_real_escape_string($db,$_POST['Department']);
					$CNum = mysqli_real_escape_string($db,$_POST['CNumber']);
					$Semester = mysqli_real_escape_string($db,$_POST['Semester']);
					$ProfFK = mysqli_real_escape_string($db,$_POST['Professor']);
					$year = date("Y");

					//echo $Rubric;

					$query1 = "SELECT StudentOutcome,PerfIndi1,PerfIndi2,PerfIndi3,PerfIndi4,PerfIndi5,PerfIndi6 FROM baserubric WHERE StudentOutcome='$Rubric'";
					$result1 = mysqli_query($db,$query1);
					$row=mysqli_fetch_array($result1);
					$StudentOutcome = $row['StudentOutcome'];
					$PerfIndi1 = $row['PerfIndi1'];
					$PerfIndi2 = $row['PerfIndi2'];
					$PerfIndi3 = $row['PerfIndi3'];
					$PerfIndi4 = $row['PerfIndi4'];
					$PerfIndi5 = $row['PerfIndi5'];
					$PerfIndi6 = $row['PerfIndi6'];

					/*
					echo $StudentOutcome;
					echo $Department;
					echo $CNum;
					echo $Semester;
					echo $year;
					echo $PerfIndi1;
					echo $PerfIndi2;
					echo $PerfIndi3;
					echo $PerfIndi4;
					echo $PerfIndi5;
					echo $PerfIndi6;
					*/
					$query5 = "SELECT FName,LName,CourseNum,Department,ProfFK,assignedrubric.ID,StudentOutcome,DepartmentFK,CourseNumberFK,SemesterFK,Yr FROM AssignedRubric INNER JOIN assign ON AssignedRubric.ID=assign.AssignedRubricFK INNER JOIN Professor ON assign.ProfFK=professor.ID INNER JOIN CourseNumber ON assign.CourseNumFK=CourseNumber.ID INNER JOIN Department ON Department.ID=assignedrubric.DepartmentFK WHERE StudentOutcome='$StudentOutcome' AND DepartmentFK='$Department' AND CourseNumberFK='$CNum' AND SemesterFK='$Semester' AND Yr='$year'";
					$result5 = mysqli_query($db,$query5);
					$row2 = mysqli_fetch_array($result5);
					$rowCount1 = mysqli_num_rows($result5);
					$FName = $row2['FName'];
					$LName = $row2['LName'];
					$CNumber = $row2['CourseNum'];
					$Dept = $row2['Department'];
					IF($rowCount1==0){
							$query2 = "INSERT INTO assignedrubric (StudentOutcome,DepartmentFK,CourseNumberFK,SemesterFK,Yr,PerfIndi1,PerfIndi2,PerfIndi3,PerfIndi4,PerfIndi5,PerfIndi6) VALUES ('$StudentOutcome','$Department','$CNum','$Semester','$year','$PerfIndi1','$PerfIndi2','$PerfIndi3','$PerfIndi4','$PerfIndi5','$PerfIndi6')";
							$result2 = mysqli_query($db,$query2);

							$query3 = "SELECT ID,StudentOutcome,DepartmentFK,CourseNumberFK,SemesterFK,Yr FROM AssignedRubric WHERE StudentOutcome='$StudentOutcome' AND DepartmentFK='$Department' AND CourseNumberFK='$CNum' AND SemesterFK='$Semester' AND Yr='$year'";
							$result3 = mysqli_query($db,$query3);

							$row1 = mysqli_fetch_array($result3);
							$AssignedRubricFK = $row1['ID'];
							//Echo $AssignedRubricFK;

							$token = sha1(uniqid($ProfFK, true));
							//echo $token;
							$query4 = "INSERT INTO Assign (ProfFK,AssignedRubricFK,CourseNumFK,token) VALUES ('$ProfFK','$AssignedRubricFK','$CNum','$token')";
							$result4 = mysqli_query($db,$query4);

							IF($result4)
								echo "The rubric has been successfully assigned.";
							else
								echo "There was a problem assigning the rubric.";

							//generate url
							
							
							$url = "EditRubric.php?token=$token";
							
							
							
							
							
							
							// send link via email
							
							
							
							
							
							
					}
					ELSE{
						echo "You have already assigned rubric (".$StudentOutcome.") for ".$Dept." ".$CNumber." to ".$FName." ".$LName.".";
					}					
				?>
				
				</b>
				</p>
				<p>
				<a href="<?php if(isset($url) && ($url!=null)){ echo $url;} else{ echo ""; }; ?>" target="_blank"><?php if(isset($url) && ($url!=null)){ echo $url;} else{ echo ""; }; ?></a>
				</p>
			</form>
				<form action="AssignmentPage.php">
					<input type="submit" value="Go Back">
				</form>
				<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					-->	
            </div>
				
         </div>
			
      </div>
</body>
</html>
