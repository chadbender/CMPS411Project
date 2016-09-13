<html>
<body>
<?php

<h1>display so&pi</h1>

 $query = mysql_query("SELECT * FROM so&pi");
// fetch one row at a time and creates array; display row using array indices
 while ($row = mysql_fetch_row($query)) {
  echo $row[0].' '.$row(1).' '.$row(2).' \';
}

?>
</body>
</html>