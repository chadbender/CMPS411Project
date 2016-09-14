<html>
<?php
   include('session.php');
   //include('EditPI.php');

   $NewPI = mysqli_real_escape_string($db,$_POST['NewPI']);
   $ID = mysqli_real_escape_string($db,$_POST['ID']);
   $sql = "UPDATE soandpi SET Indicator='$NewPI' WHERE ID='$ID'";
   $result = mysqli_query($db,$sql);
   
   If($result=1){
	   echo "Performance Indicator was successfully updated.";
   }
   else
   {
	   echo "There was a problem updating the performance indicator.";
   }
?>



</html>