<!DOCTYPE html>
<html>
<head>
	<title>Nguyễn Văn Phong</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Khởi tạo mảng $arr = array(1,4,2,6,9,100,45,8,20); <br>
	Tìm phần tử lớn nhất của mảng !</h2>
	
	<h1>Bài làm</h1>
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
