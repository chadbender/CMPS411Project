<?php
	include('session.php');
?>
<html>

	<head>
		<title>Reports Page</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div align = "center">
         <div style = "width:700px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Report Menu</b></div>
				
            <div style = "margin:30px">
				<style>
					table, th, td {
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
			<form>
			<center>
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
					//echo "<tr><td>".$id."</td>";
					echo "<tr><td>".$course."</td>";
					//echo "<td>".($row['a']==1 ? 'checked' : '')."</td>";
					echo "<td><input type='checkbox' name='".$id."a'".($a==1 ? 'checked' : '')."/></td>";
					//echo "<td>".$a."</td>";
					echo "<td><input type='checkbox' name='".$id."b'".($b==1 ? 'checked' : '')."/></td>";
					echo "<td>".$c."</td>";
					echo "<td>".$d."</td>";
					echo "<td>".$e."</td>";
					echo "<td>".$f."</td>";
					echo "<td>".$g."</td>";
					echo "<td>".$h."</td>";
					echo "<td>".$i."</td>";
					echo "<td>".$j."</td>";
					echo "<td>".$k."</td>";
					echo "<td>".$l."</td>";
					echo "<td>".$m."</td>";
					echo "<td>".$n."</td></tr>";
					}
				echo "</table>";
			?>
			</br>
			<input type='submit' name='submit-btn' value='Submit'/>
			</center>
			
			</form>
			<br />
			<br />
            </div>
				
         </div>
			
      </div>
</body>
</html>