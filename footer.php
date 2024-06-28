<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">
</head>
<body>
    
<!-- Container whatsapp y messenger -->
<div class="container-redes">
   <a href="https://m.me/academiageunilamolina" target="_blank" hidden>
      <img src="img/icon-messenger.webp" alt="">
   </a>
   <a href="https://api.whatsapp.com/send?phone=51980535010&text=Hola, me gustaría recibir informes" target="_blank">
      <img src="img/icon-whatsapp.webp" alt="">
   </a>
</div>

<footer class="container-fluid footer float-end pt-5 pb-3">
            <!-- Section: Social media -->
            <section class="mb-4 text-center">
              <!-- Facebook -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 href="https://www.facebook.com/academiageunilamolina" target="_blank"
                 role="button"
                 ><i class="bi bi-facebook"></i></a>
      
              <!-- Google -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 href="#!"
                 role="button"
                 ><i class="bi bi-google"></i></a>
      
              <!-- Youtube -->
              <a
                 class="btn btn-outline-light btn-floating m-1"
                 href="https://www.youtube.com/channel/UC4_QYbytyNrLlbxEslCczMw" target="_blank"
                 role="button"
                 ><i class="bi bi-youtube"></i></a>
    
            </section>
            <!-- Section: Social media -->
        <p class="text-center">&copy; <span id="year"></span> Academia Geuni. &middot;  Todos los derechos reservados. </p>
      </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/poper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>document.getElementById('year').textContent = new Date().getFullYear();</script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
</body>
</html>