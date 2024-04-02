<html>
<head>
</head>
<body>
<?php
	$numero1 = $_POST["num1"];
	$numero2 = $_POST["num2"];
	$calculo = $_POST["calculo"];
	switch ($calculo) {
		case "+":
			$resultado = $numero1 + $numero2;
			break;
		case "-":
			$resultado = $numero1 - $numero2;
			break;
		case "*":
			$resultado = $numero1 * $numero2;
			break;
		case "/":
			$resultado = $numero1 / $numero2;
	}
	echo $resultado;
?>
</body>
</html>

