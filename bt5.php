<!DOCTYPE html>
<html>
<head>
	<title>Nguyễn Văn Phong</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Khởi tạo mảng arr = array(1,4,2,6,9,100,4)</h2>
	<h1>Bài làm</h1>

	<?php 
	
	$arr = array(1,4,2,6,9,100,4);
	echo "Mảng đầu vào: ";

	for ($i=0; $i <7 ; $i++) { 
		echo $arr[$i] ." " ;
	}
	echo "<br>";
	echo "Mảng đầu ra: ";

	for ($i=6; $i >=0 ; $i--) { 
		echo $arr[$i] ." " ;
	}
	?>
</body>
</html>
