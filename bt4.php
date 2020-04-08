<!DOCTYPE html>
<html>
<head>
	<title>Nguyễn Văn Phong</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Tính tổng S = 1 /1! + 2 /2! + ....+ n / n!</h2>
	<div>
		<?php 

		$arr = array(1,4,2,6,9,100,45,8,20); 

		$max = null;

		for ($i = 0; $i < count($arr) ; $i++) { 
			if ($max == null) {
				$max = $arr[$i];
			} else{
				if ($arr[$i] > $max) {
					$max = $arr[$i];
				}
			}
		}
		echo "Vậy giá trị lớn nhất = " . $max;

		?>
	</div>
</body>
</html>