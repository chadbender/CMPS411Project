<html>

	<head>
		<title>Professor Assignment Page</title>
		<link rel="stylesheet" type="text/css" href="style.css" />	
	</head>
	
	<body bgcolor = "#FFFFFF">
		<div align = "center">
         <div style = "width:350px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Professor Information Table</b></div>
				
            <div style = "margin:30px">

				<p>
					<b> 2016 > Professor Information </b>
				</p>

				<p>
				<b> Select Rubric:   </b>
				<select name="owner">
					<?php
					$sql = mysqli_query($connection, "SELECT rubric FROM table");
					while ($row = $sql->fetch_assoc()){
					echo "
					<option value=\"owner1\">" . $row['rubric'] . "</option>";
					}
					?>
				</select>
				</p>

				<p>
					<b> Select Class:    </b>
				<select name="owner">
					<?php
					$sql = mysqli_query($connection, "SELECT class FROM table");
					while ($row = $sql->fetch_assoc()){
					echo "
					<option value=\"owner1\">" . $row['class'] . "</option>";
					}
					?>
				</select>
				</p>

				<p>
					<b> Select Professor:</b>
				<select name="owner">
					<?php
					$sql = mysqli_query($connection, "SELECT professor FROM table");
					while ($row = $sql->fetch_assoc()){
					echo "
					<option value=\"owner1\">" . $row['professor'] . "</option>";
					}
					?>
				<select>
				</p>
				
				<p>
					<b> Select email:</b>
				<select name="owner">
					<?php
					$sql = mysqli_query($connection, "SELECT email FROM table");
					while ($row = $sql->fetch_assoc()){
					echo "
					<option value=\"owner1\">" . $row['professor'] . "</option>";
					}
					?>
				<select>
				</p>

				<button type="button" onclick="alert('Changes Saved')">Save Changes</button>
				<br />
				<br />
				<form action="./report_menu.html">
					<input type="submit" value="Go Back">
				</form>
				<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
</body>
</html>