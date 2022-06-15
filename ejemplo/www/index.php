<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="./css/lista.css">
		<title>Práctica 3</title>
	</head>
	
	<body>
		<main id="main">
			<?php

				echo '<p class="presenta">';
				echo "¡Bienvenida/o al juego de preguntas de: </br> El Señor de los Anillos!";
				echo "</br></br></br>";
				echo '</p>';
				echo '<i class="info">';
				echo "Tras acceder con tus datos al juego </br> deberás responder las preguntas planteadas </br> siendo únicamente una la correcta.";	
				echo "</br></br></br></br></br>";
				echo '</i>';	
			
			?>	

			<form action="miFormulario">
				<input class="boton" type="submit" formaction="iniciarSesion.php" value="Iniciar sesión" name="iniciar"/>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<input class="boton" type="submit" formaction="alta.php" value="Alta nueva" name="alta"/>
			</form>
		</main>
	</body>
</html>
