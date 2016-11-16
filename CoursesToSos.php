<?php
	include('session.php');
?>
<html>

	<head>
		<title>Reports Page</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Report Menu</b></div>
				
            <div align="left" style = "margin:30px">
				<style>
					table#t01, th, td {
						border: 1px solid black;
						padding-top: 2px;
						padding-right: 5px;
						padding-bottom: 2px;
						padding-left: 5px;	
						border-collapse: collapse;
						
					}
					table#t01 tr:nth-child(even) {
						background-color: #eee;
					}
					table#t01 tr:nth-child(odd) {
					   background-color:#fff;
					}
				</style>
			<?php
				$sql = "SELECT id,course,a,b,c,d,e,f,g,h,i,j,k,l,m,n FROM CoursesToSOs";
				$result = mysqli_query($db,$sql);
				
				echo "<table id=\"t01\">";
				
				echo "<tr>";
				echo "<th>Course</th>";
				echo "<th>a</th>";
				echo "<th>b</th>";
				echo "<th>c</th>";
				echo "<th>d</th>";
				echo "<th>e</th>";
				echo "<th>f</th>";
				echo "<th>g</th>";
				echo "<th>h</th>";
				echo "<th>i</th>";
				echo "<th>j</th>";
				echo "<th>k</th>";
				echo "<th>l</th>";
				echo "<th>m</th>";
				echo "<th>n</th>";
				echo "</tr>";
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						$id = $row['id'];
						$course = $row['course'];
						$a   = $row['a'];
						$b   = $row['b'];
						$c   = $row['c'];
						$d   = $row['d'];
						$e   = $row['e'];
						$f   = $row['f'];
						$g   = $row['g'];
						$h   = $row['h'];
						$i   = $row['i'];
						$j   = $row['j'];
						$k   = $row['k'];
						$l   = $row['l'];
						$m   = $row['m'];
						$n   = $row['n'];
						
						echo "<tr><td>".$course."</td>";
						echo "<td>".($a==1 ? 'X' : '')."</td>";
						echo "<td>".($b==1 ? 'X' : '')."</td>";
						echo "<td>".($c==1 ? 'X' : '')."</td>";
						echo "<td>".($d==1 ? 'X' : '')."</td>";
						echo "<td>".($e==1 ? 'X' : '')."</td>";
						echo "<td>".($f==1 ? 'X' : '')."</td>";
						echo "<td>".($g==1 ? 'X' : '')."</td>";
						echo "<td>".($h==1 ? 'X' : '')."</td>";
						echo "<td>".($i==1 ? 'X' : '')."</td>";
						echo "<td>".($j==1 ? 'X' : '')."</td>";
						echo "<td>".($k==1 ? 'X' : '')."</td>";
						echo "<td>".($l==1 ? 'X' : '')."</td>";
						echo "<td>".($m==1 ? 'X' : '')."</td>";
						echo "<td>".($n==1 ? 'X' : '')."</td>";
						//echo "<td><form><input type='textarea'></form></td></tr>";
						echo "<td><form action='EditCourseToSos.php' method='post'><input type='hidden' name='tempid' value='".$row['id']."'/><input type='submit' name='submit-btn' value='edit' /></form></td></tr>";
					}
				echo "</table>";
				
				
				$sql1 = "SELECT StudentOutcome, CourseNum FROM assignedrubric INNER JOIN coursenumber ON coursenumber.ID = CourseNumberFK";
				$result1 = mysqli_query($db,$sql1);
				/*
				echo "<table id=\"t01\">";
				
				echo "<tr>";
				echo "<th>Course</th>";
				echo "<th>a</th>";
				echo "<th>b</th>";
				echo "<th>c</th>";
				echo "<th>d</th>";
				echo "<th>e</th>";
				echo "<th>f</th>";
				echo "<th>g</th>";
				echo "<th>h</th>";
				echo "<th>i</th>";
				echo "<th>j</th>";
				echo "<th>k</th>";
				echo "<th>l</th>";
				echo "<th>m</th>";
				echo "<th>n</th>";
				echo "</tr>";
				*/
				echo "<table>";
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						$coursenum = $row['CourseNum'];
						$SO   = $row['StudentOutcome'];
						
						echo "<tr><td>".$coursenum."</td>";
						echo "<td>".$SO."</td></tr>";
						/*
						echo "<td>".($a==1 ? 'X' : '')."</td>";
						echo "<td>".($b==1 ? 'X' : '')."</td>";
						echo "<td>".($c==1 ? 'X' : '')."</td>";
						echo "<td>".($d==1 ? 'X' : '')."</td>";
						echo "<td>".($e==1 ? 'X' : '')."</td>";
						echo "<td>".($f==1 ? 'X' : '')."</td>";
						echo "<td>".($g==1 ? 'X' : '')."</td>";
						echo "<td>".($h==1 ? 'X' : '')."</td>";
						echo "<td>".($i==1 ? 'X' : '')."</td>";
						echo "<td>".($j==1 ? 'X' : '')."</td>";
						echo "<td>".($k==1 ? 'X' : '')."</td>";
						echo "<td>".($l==1 ? 'X' : '')."</td>";
						echo "<td>".($m==1 ? 'X' : '')."</td>";
						echo "<td>".($n==1 ? 'X' : '')."</td>";
						*/
						//echo "<td><form><input type='textarea'></form></td></tr>";
						//echo "<td><form action='EditCourseToSos.php' method='post'><input type='hidden' name='tempid' value='".$row['id']."'/><input type='submit' name='submit-btn' value='edit' /></form></td></tr>";
					}
				echo "</table>";
			?>
			</div>
			<div align="right">
			<?php				
				$sql1 = "SELECT
							CourseNum,  
							SUM(CASE WHEN (StudentOutcome='a') THEN 1 ELSE 0 END) AS a,
							SUM(CASE WHEN (StudentOutcome='b') THEN 1 ELSE 0 END) AS b,
							SUM(CASE WHEN (StudentOutcome='c') THEN 1 ELSE 0 END) AS c,
							SUM(CASE WHEN (StudentOutcome='d') THEN 1 ELSE 0 END) AS d,
							SUM(CASE WHEN (StudentOutcome='e') THEN 1 ELSE 0 END) AS e,
							SUM(CASE WHEN (StudentOutcome='f') THEN 1 ELSE 0 END) AS f,
							SUM(CASE WHEN (StudentOutcome='g') THEN 1 ELSE 0 END) AS g,
							SUM(CASE WHEN (StudentOutcome='h') THEN 1 ELSE 0 END) AS h,
							SUM(CASE WHEN (StudentOutcome='i') THEN 1 ELSE 0 END) AS i,
							SUM(CASE WHEN (StudentOutcome='j') THEN 1 ELSE 0 END) AS j,
							SUM(CASE WHEN (StudentOutcome='k') THEN 1 ELSE 0 END) AS k,
							SUM(CASE WHEN (StudentOutcome='l') THEN 1 ELSE 0 END) AS l,
							SUM(CASE WHEN (StudentOutcome='m') THEN 1 ELSE 0 END) AS m,
							SUM(CASE WHEN (StudentOutcome='n') THEN 1 ELSE 0 END) AS n
						FROM 
							assignedrubric INNER JOIN coursenumber ON assignedrubric.CourseNumberFK=coursenumber.ID
						GROUP BY 
							CourseNum";
				$result1 = mysqli_query($db,$sql1);
				
				
				echo "<table id=\"t01\">";
				echo "<tr>";
				echo "<th>Course</th>";
				echo "<th>a</th>";
				echo "<th>b</th>";
				echo "<th>c</th>";
				echo "<th>d</th>";
				echo "<th>e</th>";
				echo "<th>f</th>";
				echo "<th>g</th>";
				echo "<th>h</th>";
				echo "<th>i</th>";
				echo "<th>j</th>";
				echo "<th>k</th>";
				echo "<th>l</th>";
				echo "<th>m</th>";
				echo "<th>n</th>";
				echo "</tr>";
					while ($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
						$coursenum = $row['CourseNum'];
						$a   = $row['a'];
						$b   = $row['b'];
						$c   = $row['c'];
						$d   = $row['d'];
						$e   = $row['e'];
						$f   = $row['f'];
						$g   = $row['g'];
						$h   = $row['h'];
						$i   = $row['i'];
						$j   = $row['j'];
						$k   = $row['k'];
						$l   = $row['l'];
						$m   = $row['m'];
						$n   = $row['n'];
						echo "<tr><td>".$coursenum."</td>";
						echo "<td>".($a==1 ? 'X' : '')."</td>";
						echo "<td>".($b==1 ? 'X' : '')."</td>";
						echo "<td>".($c==1 ? 'X' : '')."</td>";
						echo "<td>".($d==1 ? 'X' : '')."</td>";
						echo "<td>".($e==1 ? 'X' : '')."</td>";
						echo "<td>".($f==1 ? 'X' : '')."</td>";
						echo "<td>".($g==1 ? 'X' : '')."</td>";
						echo "<td>".($h==1 ? 'X' : '')."</td>";
						echo "<td>".($i==1 ? 'X' : '')."</td>";
						echo "<td>".($j==1 ? 'X' : '')."</td>";
						echo "<td>".($k==1 ? 'X' : '')."</td>";
						echo "<td>".($l==1 ? 'X' : '')."</td>";
						echo "<td>".($m==1 ? 'X' : '')."</td>";
						echo "<td>".($n==1 ? 'X' : '')."</td></tr>";
						//echo "<td><form><input type='textarea'></form></td></tr>";
						//echo "<td><form action='EditCourseToSos.php' method='post'><input type='hidden' name='tempid' value='".$row['id']."'/><input type='submit' name='submit-btn' value='edit' /></form></td></tr>";
					}
				echo "</table>";
				
			?>
			</div>
			</br>
			<input type='submit' name='submit-btn' value='Submit' style = "float:right"/>

			<form action="./report_menu.html">
				<input type="submit" value="Go Back" style = "float:left">
			</form>
			
			<br />
			<br />
            </div>
				
         </div>
			
      </div>
</body>
</html>