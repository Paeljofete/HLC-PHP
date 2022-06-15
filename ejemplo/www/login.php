
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="./css/index.css">
		<link href="css/lista.css" rel="stylesheet">
		<title>Login</title>
	</head>
	<body>
      <main id="main">
          <form action="iniciarSesion.php" method="get" onSubmit="validarEmail();">
              <div class="presenta" >
                  <h1>El Señor de los Anillos</h1>
                  <div class="estructura-visible">
                      <span class="cabecera">Inicio de sesi&oacute;n</span>
                      <div class="cuerpo" id="inputLogin">
                          Email de usuario: <input type="text" name="email" id="email" />
                      </div>
                  </div>
              </div>
              <input type="submit" class='boton' value="Acceder" />
          </form>
          	<a class="boton botonSalir" href="/">Salir</a>
      </main>
	</body>
</html>
