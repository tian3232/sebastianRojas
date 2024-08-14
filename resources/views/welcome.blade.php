<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>Naruto</title>
    @vite(['resources/sass/welcome.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="http://127.0.0.1:8000/">Naru<span class="text-orange">to</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/naruto">Naruto</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/sasuke">Sasuke</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/hinata">Hinata</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/sakura">Sakura</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/hijos">Hijos</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/dashboard"><i class="bi bi-person-circle"></i></a></li>
          </div>
        </nav>
      </header>      

      <section class="hero">
        <div class="container text-center">
          <h1>Bienvenido al Mundo de Naruto</h1>
          <p>Explora la vida y aventuras de Naruto Uzumaki y sus amigos más cercanos.</p>
          <img src="img/naruto2.jpg" alt="Naruto" class="img-fluid">
        </div>
      </section>
    
    <section class="characters"></section>
    <h2>Personajes</h2>
    </div>
    <div class="container mt-5">
        <div class="row">
          <!-- Naruto Card -->
          <div class="col-md-3">
            <div class="card">
              <img src="img/naruto2.jpg" class="card-img-top" alt="Naruto Uzumaki">
              <div class="card-body">
                <h5 class="card-title">Naruto Uzumaki</h5>
                <a href="http://127.0.0.1:8000/naruto" class="btn btn-custom">Más información...</a>
              </div>
            </div>
          </div>
    
          <!-- Sasuke Card -->
          <div class="col-md-3">
            <div class="card">
              <img src="img/sasuke.jpg" class="card-img-top" alt="Sasuke Uchiha">
              <div class="card-body">
                <h5 class="card-title">Sasuke Uchiha</h5>
                <a href="http://127.0.0.1:8000/sasuke" class="btn btn-custom">Más información...</a>
              </div>
            </div>
          </div>
    
          <!-- Hinata Card -->
          <div class="col-md-3">
            <div class="card">
              <img src="img/hinata2.jpeg" class="card-img-top" alt="Hinata Hyuga">
              <div class="card-body">
                <h5 class="card-title">Hinata Hyuga</h5>
                <a href="http://127.0.0.1:8000/hinata" class="btn btn-custom">Más información...</a>
              </div>
            </div>
          </div>
    
          <!-- Sakura Card -->
          <div class="col-md-3">
            <div class="card">
              <img src="img/sakura.jpg" class="card-img-top" alt="Sakura Haruno">
              <div class="card-body">
                <h5 class="card-title">Sakura Haruno</h5>
                <a href="http://127.0.0.1:8000/sakura" class="btn btn-custom">Más información...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <section class="gallery">
        <h2>Galería de Imagenes</h2>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/naruto.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/sasuke.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/naruto2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

      <section class="news">
        <div class="container">
          <h2>Últimas Noticias</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="card news-item">
                <img src="img/thelast.jpg" class="card-img-top" alt="Noticia 1">
                <div class="card-body">
                  <h3 class="card-title">Nueva Película de Naruto</h3>
                  <p class="card-text">Anunciada una nueva película de Naruto que explorará nuevas aventuras de la generación siguiente.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card news-item">
                <img src="img/manga.jpg" class="card-img-top" alt="Noticia 2">
                <div class="card-body">
                  <h3 class="card-title">Lanzamiento del Nuevo Manga</h3>
                  <p class="card-text">El nuevo manga de Boruto ha sido lanzado, continuando la historia del hijo de Naruto.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card news-item">
                <img src="img/aniversario.jpeg" class="card-img-top" alt="Noticia 3">
                <div class="card-body">
                  <h3 class="card-title">Aniversario de la Serie</h3>
                  <p class="card-text">Naruto celebro su 24 aniversario con eventos especiales y recuerdos para los fanáticos.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer>
        <div class="container">
          <p>Contactanos: <a href="mailto:info@naruto.com">info@naruto.com</a></p>
          <ul class="social-links">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
      </footer>
      
</body>
</html>