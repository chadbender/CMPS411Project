<html>
<body>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<?php
include('session.php');

	$OutcomeSelected = mysqli_real_escape_string($db,$_POST['OutcomeSelected']);
	//echo $OutcomeSelected;
	$sql = "SELECT id,outcome,indicator FROM soandpi WHERE outcome='$OutcomeSelected'";
	$result = mysqli_query($db,$sql);
	echo "<table>";
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$id = $row['id'];
			$outcome   = $row['outcome'];
			$indicator = $row['indicator'];
			echo "<tr><td>".$id."</td>";
			echo "<td>".$outcome."</td>";
			echo "<td>".$indicator."</td>";
			echo "<td><form action='EditPI.php' method='post'><input type='hidden' name='tempid' value='".$row['id']."'/><input type='submit' name='submit-btn' value='edit' /></form></td></tr>";
		}
	echo "</table>";
?>
</body>
</html>