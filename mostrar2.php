<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Futbol</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
	
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand">Tabla de equipos</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
			  <li><a href="index.php">Inicio</a></li>
			  <li class="Mostrar">
                  <a href="#Mostrar" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mostrar <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="mostrar1.php">Mostrar 1</a></li>
                  </ul>
                </li>
                <li><a href="insertar.php">Insertar</a></li>
                <li><a href="modificar.php">Modificar</a></li>
                <li><a href="eliminar.php">Eliminar</a></li>
                
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


	
	<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<br><br><br><br>

		<?php
			$servidor = "localhost";
			$usuari = "root";
			$password = "";
			$db = "futbol";

			// Create connection
			$conn = new mysqli($servidor, $usuari, $password, $db);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connexió KO: " . $conn->connect_error);
			} 
			else {

				$sql = "SELECT codi, nom, codiequip FROM titols";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					echo "<div class=\"table-responsive\"> 
					      <table class=\"table table-striped\">
						  <thead>
							<tr>
							  <th>codi</th>
							  <th>nom</th>
							  <th>codiequip</th>
							</tr>
						  </thead>
						  <tbody>";
					while($rows = $result->fetch_assoc()) {
						echo "<tr><td>" . $rows['codi'] . "</td><td>" . $rows['nom'] . "</td><td>". $rows['codiequip']. "</td></tr>";
					}
					echo "</tbody>
						  </table>
						  </div>";
					
				} else {
					echo "0 registres";
				}
				$conn->close();
			}
		?>



      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2019 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>
