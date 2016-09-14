<html>
<?php
   include('session.php');
?>

<form action = "sopitable.php" method = "post">
	<!-- Dropdown box for student outcome (A-M) -->
	<select name="OutcomeSelected" id="outcome">
		<?php
			$sql = "SELECT DISTINCT outcome FROM soandpi";
			$result = mysqli_query($db, $sql);
			while ($row = mysqli_fetch_assoc($result)){
				echo '<option value='.$row['outcome'].'>'.$row['outcome'].'</option>';
			}
		?>
	</select>
	<!-- Button to go to SOPI Table -->
	<input type = "submit" value = "Submit" name = "GoToSOPITable" id="formSubmit1" /><br />			  
</form>

</html>
