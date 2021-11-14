<?php

	$num = 0;

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$num = $_POST['number'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Grades</title>
	<link rel="stylesheet" type="text/css" href="grade.css">
</head>
<body>
<h1>Please, Fill your score and hours in each course!</h1>
<form action="calc.php" method="post">
	<table>
		<tr style="background-color: #91d18b; color: #FFF">
			<td style="color: #FFF">Course no.</td>
			<td style="color: #FFF">Course Grade</td>
			<td style="color: #FFF">Course Hours</td>
		</tr>
	<?php
	    for($i=0; $i<$num ; $i++){
	    	?>
	    	<tr>
	    		<td>Course <?php echo $i+1 ?></td>
	    		<td><input type="text" name="g<?php echo $i ?>" autocomplete="off" required></td>
	    		<td><input type="text" name="h<?php echo $i ?>" autocomplete="off" required></td>
	    	</tr>
	    	<?php
	    }
	    ?>
	</table>
	<input type="text" style="display: none" name="num" value="<?php echo $num ?>">
	<button>Calculate</button>    
</form>
</body>
</html>