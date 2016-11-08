<?php
	include('session.php');
?>
<html>

	<head>
		<title>Assignment Menu</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Assignment Menu</b></div>
				
            <div style = "margin:30px">
			<form action="createsendlink.php" method="post" >
				<p>
					<b> Rubric / Class / Professor Assignment </b>
				</p>

				<p>

				<b> Select Rubric:   </b>
				
				<select name="Rubric">
					<?php
					$sql = "SELECT StudentOutcome FROM baseRubric ORDER BY StudentOutcome ASC";
					$result = mysqli_query($db,$sql);
					while ($row = mysqli_fetch_assoc($result)){
						echo '<option value='.$row['StudentOutcome'].'>'.$row['StudentOutcome'].'</option>';
					}
					?>
				</select>
				</p>

				<p>
				<b> Select Department:    </b>
				<select name="Department">
					<?php
					$sql1 = "SELECT ID,department FROM department";
					$result1 = mysqli_query($db,$sql1);
					while ($row1 = mysqli_fetch_assoc($result1)){
						echo '<option value='.$row1['ID'].'>'.$row1['department'].'</option>';
					}
					?>
				</select>
				</p>
				
				<p>
				<b> Select Course Number:    </b>
				<select name="CNumber">
					<?php
					$sql2 = "SELECT ID,CourseNum FROM coursenumber ORDER BY CourseNum";
					$result2 = mysqli_query($db,$sql2);
					while ($row2 = mysqli_fetch_assoc($result2)){
						echo '<option value='.$row2['ID'].'>'.$row2['CourseNum'].'</option>';
					}
					?>
				</select>
				</p>
				
				<p>
				<b> Select Semester:    </b>
				<select name="Semester">
					<?php
					$sql3 = "SELECT ID,semester FROM semester";
					$result3 = mysqli_query($db,$sql3);
					while ($row3 = mysqli_fetch_assoc($result3)){
						echo '<option value='.$row3['ID'].'>'.$row3['semester'].'</option>';
					}
					?>
				</select>
				</p>
				
				<p>
				<b> Select Professor:    </b>
				<select name="Professor">
					<?php
					$sql4 = "SELECT ID,FName,LName,Email FROM Professor ORDER BY LName ASC";
					$result4 = mysqli_query($db,$sql4);
					while ($row4 = mysqli_fetch_assoc($result4)){
						echo '<option value='.$row4['ID'].'>'.$row4['FName']. ' ' .$row4['LName'].'</option>';
					}
					?>
				</select>
				</p>				
				
				<br />
				<input type ="submit" value="Assign" style = "float:right">
				<input type="submit" value="Go Back"  style = "float:left" formaction="./report_menu.html">
				<br />
				<!--<button type="button" onclick="alert('Data Saved and information sent to $email')">Save & Send</button> -->
			</form>
				<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					-->	
            </div>
				
         </div>
			
      </div>
</body>
</html>

