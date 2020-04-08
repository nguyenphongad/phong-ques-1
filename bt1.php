<!DOCTYPE html>
<html>
<head>
	<title>Nguyễn Văn Phong</title>
	<meta charset="UTF-8">
</head>
<body>
	<h2>Giải chương trình giải phương trình bậc 2: ax^2 + bx + c = 0</h2>

	<form method="post" action="">
		Nhập số a: <input type="number" name="giatri_a" value=""/> <br/><br/>
		Nhập số b: <input type="number" name="giatri_b" value=""/> <br/><br/>
		Nhập số c: <input type="number" name="giatri_c" value=""/> <br/><br/>
		<input type="submit" name="cal" value="Kiểm tra"/><br>
	</form>

	<?php
	if (isset($_POST['cal']))
	{
		$a=$_POST['giatri_a'];
		$b=$_POST['giatri_b'];
		$c=$_POST['giatri_c'];
        // check hệ số
		if ($a==0) {
			if ($b==0) {
				echo "Phương trình vô nghiệm";
			}else{
				echo "Phương trình chỉ có một giá trị là: x =". (-$c / $b) ;
			}
			return;
		}
		// xét denta
		$denta= $b*$b - 4*$a*$c;
		echo "Giá trị delta là : ".$denta."<br><br>";
		$x1='';
		$x2='';
        // tính nghiệm x1, x2
		if ($denta>0) {
			$x1= (-$b + sqrt($denta)) / (2*$a);
			$x2= (-$b - sqrt($denta)) / (2*$a);
			echo "Phương trình có hai nghiệm là : <br>"."x1= ".$x1. " | x2= ".$x2;
		} else if ($denta < 0){
			echo "phương trình vô nghiệm";
		}else {
			echo "phương trình có nghiệm kép "."x1 = x2= ". $x1;
		}

	}
	?>

</body>
</html>