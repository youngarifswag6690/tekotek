<!DOCTYPE html>
<html>
<head>
	<title>Tekotek</title>
</head>
<body>
	<?php
		for($i=100;$i>=0;$i--){
			if($i==100){
				echo '<p style="font-family:"Helvetica";">'."Tekotek-kotek anak ayam turun $i".'<br></p>';
			}elseif(($i%2)==0){
				echo '<p style="color: orange; font-family: "Helvetica";">'."Mati satu tinggal $i".'<br></p>';
			}else{
				echo '<p style="color: brown; font-family: "Helvetica";">'."Mati satu tinggal $i".'<br></p>';
			}
		}
?>
</body>
</html>