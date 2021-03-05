<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top colornav">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
              <img src="img/logo.PNG" width="100" height="40">
         </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse w-auto" id="navbarCollapse">
            <ul class="nav justify-content-end me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link text-light cool-link" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Programas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="escolar.php">Escolar</a></li>
                  <li><a class="dropdown-item" href="5topre.php">5to PRE</a></li>
                  <li><a class="dropdown-item" href="preuniversitario.php">Preuniversitario</a></li>
                  <li><a class="dropdown-item" href="universitario.php">Asesoria Universitaria</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light cool-link" href="modcolegio.php">Modalidad Colegio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light cool-link" href="virtual.php">Geuni virtual</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light cool-link" href="contacto.php">Contáctanos</a>
              </li>
            </ul>
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" hidden>Aula virtual</button>
          </div>
        </div>
      </nav>
  </header>
</body>
</html>