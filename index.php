<!DOCTYPE html>
<html>
<head>
	<title>
		Table
</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>
<div class ="conatiner">
<div clss ="row">
<div class="col-md-4">Left side</div>
  <div class="col-md-4">
<p>Labas</p>
<table call="table">
<tr> 

 
<?php
 
$x = 1;
//$a = rand(1, 400);
//$y = "<tr> $a </tr>";
 
while($x <= 200) {
	echo "<table>";
	echo "<tr></tr>";
  echo  "<td>  $x   </td> <br/>";
  $x++;
} 
 
?>

	
</div>
</table>
</div>
<div class="col-md-4">.right side</div>
</div>
</body>
</html>