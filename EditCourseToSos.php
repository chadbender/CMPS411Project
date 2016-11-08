<?php
	include('session.php');
?>
<html>

	<head>
		<title>Edit Mapping Row</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Edit Row</b></div>
				
            <div style = "margin:30px">
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
			<center>
			<form>
			
			<?php
				$TempId = mysqli_real_escape_string($db,$_POST['tempid']);
				$sql = "SELECT id,course,a,b,c,d,e,f,g,h,i,j,k,l,m,n FROM CoursesToSOs WHERE id='$TempId'";
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
					//echo "<tr><td>".$id."</td>";
					echo "<tr><td>".$course."</td>";
					//echo "<td>".($row['a']==1 ? 'checked' : '')."</td>";
					echo "<td><input type='checkbox' name='".$id."a'".($a==1 ? 'Checked' : '')."/></td>";
					//echo "<td>".$a."</td>";
					echo "<td><input type='checkbox' name='".$id."b'".($b==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."c'".($c==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."d'".($d==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."e'".($e==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."f'".($f==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."g'".($g==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."h'".($h==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."i'".($i==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."j'".($j==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."k'".($k==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."l'".($l==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."m'".($m==1 ? 'Checked' : '')."/></td>";
					echo "<td><input type='checkbox' name='".$id."n'".($n==1 ? 'Checked' : '')."/></td>";
					echo "<td><form action='EditCourseToSos.php' method='post'><input type='hidden' name='tempid' value='".$id."'/><input type='submit' name='submit-btn' value='edit' /></form></td></tr>";
					}
				echo "</table>";
			?>
			</center>
			</br>
			<input type='submit' name='submit-btn' value='Submit' style = "float:right"/>
			
			</form>			
			
			<form action="./CoursesToSos.php">
				<input type="submit" value="Go Back" style = "float:left">
				<br />
			</form>
						
			
            </div>
				
         </div>
			
      </div>
</body>
</html>