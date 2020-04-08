<!DOCTYPE html>
<html>
<head>
	<title>Nguyễn Văn Phong</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>In bẳng cửu chương bằng vòng lặp for</h2>
	
	<div>
		<?php 
		for ($i=2; $i < 10; $i++){
			for ($e=1; $e < 10; $e++) { 
				echo $i.' x ' . $e ."= ".$i*$e ."<br>";
			}
			echo "<br>";	
		};

		?>

	</div>
</body>
</html>




