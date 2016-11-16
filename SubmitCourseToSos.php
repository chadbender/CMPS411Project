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
			<b>
			<?php
				$TempID = mysqli_real_escape_string($db,$_POST['TempID']);
				
				//echo $TempID;
				$Temp = "Temp";
				$TotalQuery1 = "";
				$TotalQuery2 = "";
				$Total ="";
				for($x = "a"; $x < "o"; $x++){
					if(isset($_POST[$TempID.$x])){
						$query = "UPDATE coursestosos SET ".$x."='1' WHERE ID='".$TempID."'; ";
						//echo $query;
						//echo "\n";
						//$result = mysqli_query($db,$sql);
						$TotalQuery1 = $TotalQuery1.$query;
					}
					else{
						$query1 = "UPDATE coursestosos SET ".$x."='0' WHERE ID='".$TempID."'; ";
						//echo $query1;
						//$result1 = mysqli_query($db,$sql1);
						$TotalQuery2 = $TotalQuery2.$query1;
					}
					$Total = $TotalQuery1.$TotalQuery2;					
				}
				//echo $Total;
				$result = mysqli_multi_query($db,$Total);
				if($result){
					echo "Update successful";
				}
				else{
					echo "Update unsuccessful";
				}
			?>
			</b>
			</center>
			</br>		
			</form>
			<form action="./CoursesToSos.php">
				<input type="submit" value="Go Back" style = "float:left">
			</form>
						
			<br />
            </div>
				
         </div>
			
      </div>
</body>
</html>