<?php
   include('session.php');
?>
<html>

	<head>
		<title>Data Collection Table</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div>
         <div style = "width:600px; border: solid 1px #333333; ">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Data Collection Table for Rubric</b></div>
				
            <div style = "margin:30px">

				<p>
					<b>Performance Indicator being Edited:</b>
				</p>

				<style>
					table, th, td {
					border: 1px solid black;
					}
				</style>
				<p>
				<form action = "SubmitEditPI.php" method = "post">
					<?php
					// retrieve token
					if (isset($_GET["token"]) && preg_match('/^[0-9A-F]{40}$/i', $_GET["token"])) {
						$token = $_GET["token"];
					}
					else {
						throw new Exception("Valid token not provided.");
					}

					// verify token
					$query = $db->prepare("SELECT username, tstamp FROM pending_users WHERE token = ?");
					$query->execute(array($token));
					$row = $query->fetch(PDO::FETCH_ASSOC);
					$query->closeCursor();

if ($row) {
    extract($row);
}
else {
    throw new Exception("Valid token not provided.");
}

// do one-time action here, like activating user account
// ...

// delete token so it can't be used again
$query = $db->prepare(
    "DELETE FROM pending_users WHERE username = ? AND token = ? AND tstamp = ?",
);
$query->execute(
    array(
        $username,
        $token,
        $tstamp));
?>					
					<br>
					<input type ="hidden" value = "<?php echo $id; ?>" name="ID" />
						<label>Edit PI: </label><input type = "text" name = "EditPI" value="<?php echo $indicator; ?>" size="50"class = "box" /><br/><br />
					<input type = "submit" value = " Submit "/><br />
					</p>
				</form>
				
			<form action="pi_table.php">
				<input type="submit" value="Go Back">
			</form>
				
			<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			-->		
            </div>
				
         </div>
			
      </div>
</body>
</html>

