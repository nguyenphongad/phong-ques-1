<!DOCTYPE html>
<html>
<head>
	<title>Nguyễn Văn Phong</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Tính tổng S = 1 /1! + 2 /2! + ....+ n / n!</h2>
	<h1>Bài làm</h1>
	<?php

	echo "Cho n = 100 <br>";

	$temp = 1;
	$sum = 0;

	for ($i = 1; $i <= 100; $i++) { 
		$temp = $temp * $i;
		$sum = $sum + $i/$temp;
	}

	echo "tổng của S với n = 100 là ". $sum;
	?>

</body>
</html>
