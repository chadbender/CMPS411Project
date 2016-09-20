<?php
	$OutcomeSelected = mysqli_real_escape_string($db,$_POST['OutcomeSelected']);
	function RunQuery($OutcomeSelected){
		$sql= "INSERT INTO login (Username) VALUES ('$OutcomeSelected')";
		$result = mysqli_query($db,$sql);
		if($result==1)
		{
			echo "cool";
		}
		else{
			echo "not cool";
		}
	}
?>