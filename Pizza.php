<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		$eleccion_ingredientes = array(
			0=> 'Masa Gruesa',
			1=> 'Masa Fina',
			2=> 'Masa con Bordes de queso',
			3=> 'Oregano',
			4=> 'Queso',
			5=> 'Mozzarela',
			6=> 'Jamon York',
			7=> 'Bacon',
			8=> 'Pollo',
			9=> 'Hamburgesa',
			10=> 'Cebolla'
			);

		$size_length = sizeof($eleccion_ingredientes);
		echo "<form>";
		for($i=0; $i<$size_length; $i++){
			echo "<p>".$eleccion_ingredientes[$i]."<input type='checkbox' name='ingredientes' value='".$i."'></p>";

		}
		echo "</form>";

		function mostrar_ingredientes($ingredientes){
			global $eleccion_ingredientes;

		}
		function processar_datos($ingredientes){
			global $eleccion_ingredientes;
			$precio_total = 5.0;
			$ingredientes_seleccionados = "";


		}
		?>
	</body>
</html>