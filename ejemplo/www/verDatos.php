<?php  
	include 'conexionbd.php';

	session_start();
	
	// Definición de las variables
	$pregunta = "";
	$respuesta1 = "";
	$respuesta2 = "";
	$respuesta3 = "";
	$solucion = "";
	$codigo = "";
	$respuesta = "";

	//$_SESSION['depura'] = "hola";

	if (!isset($_SESSION['posicion'])){
		$_SESSION['posicion'] = 1;

		if (!isset($_SESSION['victorias']) && !isset($_SESSION['perdidas'])){	
			$_SESSION['victorias'] = 0;
			$_SESSION['perdidas'] = 0;
		}
	}
	else
	{
		++$_SESSION['posicion'];

		if($_SESSION['solucion'] == $_POST['respuesta']){
			++$_SESSION['victorias'];
		}
		else{
			++$_SESSION['perdidas'];
		}
	}

	$con=conexion();
	
	$sql = "select count(*) from PREGUNTAS where codigo ='" . $_SESSION['posicion'] ."';";
	$resultado=mysqli_query($con, $sql);
	$datos=mysqli_fetch_assoc($resultado);
	mysqli_close($con);

	$preg = obtener_datos_preguntas($_SESSION['posicion']);

	// $_SESSION: array superglobal para acceder a las sesiones
    $_SESSION['pregunta']=$preg['pregunta'];
    $_SESSION['respuesta1']=$preg['respuesta1'];
    $_SESSION['respuesta2']=$preg['respuesta2'];
    $_SESSION['respuesta3']=$preg['respuesta3'];
    $_SESSION['solucion']=$preg['solucion'];
	$_SESSION['codigo']=$preg['codigo'];

	function obtener_datos_preguntas($posicion)
	{
		$con=conexion();

		$sql="select pregunta, respuesta1, respuesta2, respuesta3, solucion, codigo from PREGUNTAS where codigo = '" . $posicion . "';";
		$resultado=mysqli_query($con, $sql);
        $datos=mysqli_fetch_assoc($resultado);
		mysqli_close($con);
		
		return $datos;
	}

	function obtener_edad_segun_fecha($fecha_nacimiento)
	{
		$nacimiento = new DateTime($fecha_nacimiento);
		$ahora = new DateTime(date("Y-m-d"));
		$diferencia = $ahora->diff($nacimiento);
		return $diferencia->format("%y");
	}
?>

<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<link rel="stylesheet" href="./css/lista.css">
			<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		    <title>Inicio</title>		
		</head>
		<body>
			<form action="./verDatos.php" method="post">
				
			<?php if($_SESSION['posicion'] < 8){ ?>

			<legend class="presenta">PREGUNTA <?php echo $_SESSION['posicion'];?>:</legend></br></br>
			<div class="preguntas">
				&emsp;&emsp;&emsp;&emsp;
				
				<?php echo $_SESSION['pregunta'];?> </br></br>					
			</div>
			<table class="preguntas">
				<tr>&emsp;&emsp;&emsp;&emsp;
					<td NOWRAP>
						<input id="respuesta1" type="radio" name="respuesta" value=1 />&emsp;
						<?php echo $_SESSION['respuesta1'];?>
					</td>
				</tr>
				<tr>
					<td NOWRAP>
						<input id="respuesta2" type="radio" name="respuesta" value=2 />&emsp;
						<?php echo $_SESSION['respuesta2'];?>
					</td>
				</tr>
				<tr>
					<td NOWRAP>
						<input id="respuesta3" type="radio" name="respuesta" value=3 />&emsp;
						<?php echo $_SESSION['respuesta3'];?>
					</td>
				</tr>
			</table>
			</br></br></br></br></br>&emsp;&emsp;
			<input class="boton" id="submit" type="submit" value="Siguiente" />	</br></br></br>	
								
			<?php } ?>

				
			<div class="caja_usuario">
				<div class="info">
					<h3><?php echo 'Jugador: ' . $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];?></h3> 
					<!--<h3><?php echo 'Edad: ';?><?php obtener_edad_segun_fecha($_SESSION['fecha_nacimiento']); ?></h3>-->
					&emsp;&emsp;&emsp;&emsp;
				</div>
			</div>	
			</form>	
		</body>
	</html>

<?php 
	if ($_SESSION['posicion'] == 8){	
			--$_SESSION['posicion'];
			echo '<t class="presenta">';
				echo "PUNTUACIÓN FINAL:";	
				echo '</br>';
				echo "Aciertos: ".$_SESSION['victorias'];
				echo '</br>';
				echo "Fallos: ".$_SESSION['perdidas'];		
			echo '</t>';
			session_destroy();		
		}
?>