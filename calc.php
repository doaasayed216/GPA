<?php

	$total = 0;
	$hours = 0;

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		for($i =0 ; $i < $_POST['num'] ; $i++)
		{
			if($_POST['g'.$i] >= 90){
				$point = 4;
			}
			else if($_POST['g'.$i] >= 85 && $_POST['g'.$i] < 90){
				$point = 3.75;
			}
			else if($_POST['g'.$i] >= 80 && $_POST['g'.$i] < 85){
				$point = 3.4;
			}
			else if($_POST['g'.$i] >= 75 && $_POST['g'.$i] < 80){
				$point = 3.1;
			}
			else if($_POST['g'.$i] >= 70 && $_POST['g'.$i] < 75){
				$point = 2.8;
			}
			else if($_POST['g'.$i] >= 65 && $_POST['g'.$i] < 70){
				$point = 2.5;
			} 
			else if($_POST['g'.$i] >= 60 && $_POST['g'.$i] < 65){
				$point = 2.25;
			}
			else if($_POST['g'.$i] >= 50 && $_POST['g'.$i] < 60){
				$point = 2;
			}
			else if($_POST['g'.$i] < 50){
				$point = 1;
			}

			$product = $_POST['h'.$i] * $point;
			$total += $product;
			$hours += $_POST['h'.$i];
		}


		$result = $total / $hours;

		if($result >= 3.4){
			$grade = 'Exellent';
			$color = "green";
		}
		else if($result >= 2.8 && $result < 3.4){
			$grade = 'Very Good';
			$color = 'Orange';
		}
		else if($result >= 2.4 && $result < 2.8){
			$grade = 'Good';
			$color = "Orange";
		}
		else if($result >= 2 && $result < 2.4){
			$grade = 'Accebtable';
			$color = "Orange";
		}
		else if($result >= 1.4 && $result < 2){
			$grade = 'Weak';
			$color = "Orange";
		}
		else if($result < 1.4){
			$grade = 'Very Weak';
			$color = 'red';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="calc.css">
</head>
<body>
	<div>
	<h1>Results</h1>
	<p><span class="label">GPA:</span> <?php echo $result; ?></p>
	<p><span class="label">Grade:</span> <span style="color: <?php echo $color; ?>"><?php echo $grade; ?></span> </p>
	<h2>Hope you do well!</h2>
</div>
</body>
</html>	