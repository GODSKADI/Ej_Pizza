<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Haz tu pizza</title>
		<style>
			h1{
				text-align: center;
				background-color: silver;
			}
			form{
				background-color: silver; 
			}
		</style>
	</head>
	<body>
		<script type="text/javascript">
		function tu_pedido(){
			echo "Hola";
		}
		function processar_datos($ingredientes){
			global $eleccion_ingredientes;
			$precio_total = 5.0;
			$ingredientes_seleccionados = "";
		}
		</script>

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
		echo "<h1>Haz tu pizza</h1>";
		echo "<form>";
		echo "<h2>Ingredientes</h2>";
		for($i=0; $i<$size_length; $i++){
			echo "<p>".$eleccion_ingredientes[$i]."<input type='checkbox' name='".$i."' value='".$i."'></p>\n";
		}
		echo "<button value='submit'>Pedir</button>";
		echo "</form>";


		?>
	</body>
</html>