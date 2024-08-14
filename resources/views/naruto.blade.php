<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/">Inicio</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/naruto">Naruto</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/sasuke">Sasuke</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/hinata">Hinata</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/sakura">Sakura</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/hijos">Hijos</a></li>
              <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/dashboard"><i class="bi bi-person-circle"></i></a></li>
          </div>
        </nav>
      </header>  

      <section class="principal">
      <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Naruto Uzumaki</h2>
                <p>
                    Naruto Uzumaki es el protagonista principal de la serie Naruto. Es un ninja de la Aldea Oculta de la Hoja, 
                    conocido por su determinación y su deseo de convertirse en el Hokage, el líder de su aldea. 
                    Nacido como el hijo del Cuarto Hokage, Naruto creció como un huérfano y fue evitado por los aldeanos debido 
                    a que lleva dentro de él al demonio zorro de nueve colas, Kurama.
                </p>
                <p>
                    A pesar de los desafíos que enfrentó, Naruto nunca renunció a sus sueños y finalmente ganó el respeto de su aldea y de todo el mundo shinobi. 
                    Su carácter inspirador, su inquebrantable voluntad y su capacidad para hacer amigos y aliados han hecho de Naruto un personaje querido por muchos.
                </p>
                <p>
                    A lo largo de la serie, Naruto aprende diversas técnicas y habilidades, incluyendo su firma, el Rasengan, 
                    y eventualmente domina el modo sabio y el modo Kurama, convirtiéndose en uno de los ninjas más poderosos de todos los tiempos.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/naruto.jpg" alt="Naruto Uzumaki" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>

    <section class="habilidades">
    <div class="container mt-5">
        <h3>Habilidades y Técnicas</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/rasengan.jpg" class="card-img-top" alt="Rasengan">
                    <div class="card-body">
                        <h5 class="card-title">Rasengan</h5>
                        <p class="card-text">
                            El Rasengan es una técnica poderosa creada por el Cuarto Hokage. Es una esfera de chakra concentrado que gira a alta velocidad, causando un daño significativo al impacto.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/kurama.jpeg" class="card-img-top" alt="Modo Kurama">
                    <div class="card-body">
                        <h5 class="card-title">Modo Kurama</h5>
                        <p class="card-text">
                            El Modo Kurama permite a Naruto acceder al poder del Zorro de Nueve Colas, otorgándole un aumento masivo en su fuerza, velocidad y chakra.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/sabio.jpg" class="card-img-top" alt="Modo Sabio">
                    <div class="card-body">
                        <h5 class="card-title">Modo Sabio</h5>
                        <p class="card-text">
                            El Modo Sabio es una técnica que permite a Naruto utilizar la energía natural, lo que aumenta todas sus habilidades físicas y le da acceso a poderosas técnicas basadas en senjutsu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="destacados">
    <div class="container mt-5">
        <h3>Momentos Destacados</h3>
        <ul class="xd">
            <li class="list-group-item">
                <strong>Batalla con Sasuke en el Valle del Fin:</strong> <p>Uno de los enfrentamientos más épicos de la serie, donde Naruto lucha contra su amigo Sasuke.</p>
            </li>
            <li class="list-group-item">
                <strong>El encuentro con Jiraiya:</strong> <p>Jiraiya se convierte en el mentor de Naruto, enseñándole habilidades cruciales y guiándolo hacia su destino.</p>
            </li>
            <li class="list-group-item">
                <strong>La lucha contra Pain:</strong> <p>Naruto demuestra su crecimiento y poder al enfrentarse a uno de los enemigos más peligrosos de la serie, Pain.</p>
            </li>
            <li class="list-group-item">
                <strong>La Cuarta Guerra Mundial Shinobi:</strong> <p>Naruto juega un papel clave en la victoria durante la guerra, luchando junto a otros ninjas para salvar al mundo.</p>
            </li>
        </ul>
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