<?php 
    include 'header.php';
?>

<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('img/slide01.webp'); background-size: cover; background-position: center;">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1 class="titleslider">PREPÁRATE CON GEUNI</h1>
              <p>Y sé el mejor</p>
              <p><a class="btn btn-lg btn-danger btncolor" href="contacto.php">Matricúlate ahora</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item"  style="background-image: url('img/slide02.webp'); background-size: cover; background-position: center;">  
          <div class="container">
            <div class="carousel-caption">
              <h1 class="titleslider">DESDE 1994</h1>
              <p>Ofreciendo la mejor metodología de enseñanza</p>
              <p><a class="btn btn-lg btn-danger btncolor" href="#who">Conoce más</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('img/slide03.webp'); background-size: cover; background-position: center;">  
          <div class="container">
            <div class="carousel-caption text-end">
              <h1 class="titleslider">¿ESTÁS TERMINANDO LA SECUNDARIA?</h1>
              <p> En GEUNI te acompañamos en la transición a la universidad, fortaleciendo tus capacidades, de acuerdo a tu orientación. ¿Estás listo para enfrentar el reto?</p>
              <p><a class="btn btn-lg btn-danger btncolor" href="5topre.php">Conoce más</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
  
    <div class="container marketing">
    <h1 class="text-center titulos pb-5">Programas disponibles</h1>
      <!-- Three columns of text below the carousel -->
      <div class="row pb-5">
        <div class="col-lg-4">
          <div class="card">
            <img src="img/escolar.webp" class="card-img-top" width="100%" height="100%">
            <div class="card-body">
              <h5 class="card-title">Asesoria Escolar</h5>
              <p class="card-text fw-light">Desde el colegio puedes dar un gran paso y alcanzar tu meta.
                Prepárate para la Universidad dese tu momento escolar con nuestro NUEVO CICLO ESCOLAR 2021</p>
              <p><a class="btn btn-primary" href="escolar.php">Ver detalles &raquo;</a></p>
            </div>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="card">
            <img src="img/5toPre.webp" class="card-img-top" width="100%" height="100%">
            <div class="card-body">
              <h5 class="card-title">5to PRE</h5>
              <p class="card-text fw-light">Asegura tu ingreso a la universidad en tu último año del cole, con profesores expertos, clases en vivo con interacción PROFESOR - ALUMNO.</p>
              <p><a class="btn btn-primary" href="5topre.php">Ver detalles &raquo;</a></p>
            </div>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="card">
            <img src="img/preUniv.webp" class="card-img-top" width="100%" height="100%">
            <div class="card-body">
              <h5 class="card-title">Preuniversitario</h5>
              <p class="card-text fw-light">Si culminaste 5to de secundaria, nosotros te preparamos con nuestro ciclo Anual 2021 - 100% virtual. #AROMPERLAENEL-EXAMEN-ADMISIÓN  </p>
              <p><a class="btn btn-primary" href="preuniversitario.php">Ver detalles &raquo;</a></p>
            </div>
          </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container --> 
  
      <!-- START THE FEATURETTES -->
  
 <section class="who" id="who">
  <div class="container marketing pb-5 pt-5">

    <div class="row featurette">
      <div class="col-md-5 pb-5 pt-5">
        <h2 class="featurette-heading mt-0">¿Quiénes somos? <br> <span class="text-muted">Academia Geuni</span></h2>
        <p class="lead">Somos un grupo de estudio que desde 1994 nos dedicamos a la enseñanza y llevar el más alto y exigente nivel en matemáticas y ciencias, con una nueva temática en el desarrollo de los cursos en NIVELACIÓN - REPASO Y ADELANTO para que nuestros alumnos afronten con éxito cualquier dificultad en el área de matemáticas y ciencias.</p>
      </div>
      <div class="col-md-7 pb-5 pt-5">
        <div class="video">
          <iframe width="560" height="315" class="video_who" src="https://www.youtube.com/embed/4SPq5zm2AYs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
 </section>

        <section class="parallax" style=" background-image: url('img/banner.webp');">
          <div class="container">
            <div class="slogan">
              <h2 style="font-size: 30px;">¿DIFÍCIL LA MATEMÁTICA?</h2>
              <h1 style="font-size: 70px;">En la Geuni te la hacemos recontra fácil</h1>
            </div>
          </div>
        </section>

  <div class="container pt-5 pb-5">
    <h1 class="text-center titulos pb-5">¿Por qué elegirnos?</h1>
    <ul class="list-unstyled row text-left mt-lg-3 pt-lg-3  pb-lg-3 pt-3">
      <li class="col-lg-4 adress-info">
          <div class="row">
              <div class="col-md-3 text-lg-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>                   </div>
              <div class="col-md-9 text-left">
                  <h6>Asesoria personalizada</h6>
                  <span><i class="bi bi-check"></i></span> Se adapta a tu forma de aprender<br>
                  <span><i class="bi bi-check"></i></span> Puede ser personal o grupal <br>
                  <span><i class="bi bi-check"></i></span> Reforzamiento de matemáticas desde 0 <br>
              </div>
          </div>
      </li>

      <li class="col-lg-4 adress-info">
          <div class="row">
              <div class="col-md-3 text-lg-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                </svg>
              </div>
              <div class="col-md-9 text-left">
                  <h6>Clases en Vivo</h6>
                  <p>
                    <span><i class="bi bi-check"></i></span> Clases Teórico Prácticas <br>
                    <span><i class="bi bi-check"></i></span> Interacción Alumno - Profesor <br>
                    <span><i class="bi bi-check"></i></span> Implementación de tareas <br>
                  </p>
              </div>
          </div>
      </li>
      <li class="col-lg-4 adress-info">
          <div class="row">
              <div class="col-md-3 text-lg-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
              </div>
              <div class="col-md-9 text-left">
                  <h6>Material por niveles</h6>
                  <span><i class="bi bi-check"></i></span> Implementación de tareas <br>
                  <span><i class="bi bi-check"></i></span> Según las necesidades del alumno <br>
              </div>
          </div>
      </li>
  </ul>

  </div>

  
  
      <!-- /END THE FEATURETTES -->
  
    
  </main>

<?php 
    include 'footer.php';
?>