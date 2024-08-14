<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sakura</title>
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
                    <h2>Sakura Haruno</h2>
                    <p>
                        Sakura Haruno es uno de los personajes principales de la serie Naruto, conocida por su inteligencia, fuerza de voluntad y habilidades como ninja médica. 
                        Desde el inicio de la serie, Sakura se muestra como una kunoichi decidida, aunque inicialmente insegura de sí misma. 
                        A lo largo del tiempo, su crecimiento personal y profesional la lleva a convertirse en una de las kunoichis más poderosas de su generación.
                    </p>
                    <p>
                        Entrenada por la legendaria Sannin, Tsunade, Sakura adquiere habilidades excepcionales en el campo de la medicina ninja, 
                        así como una fuerza física impresionante. Su devoción por sus amigos, en particular por Naruto y Sasuke, 
                        impulsa gran parte de su desarrollo y la lleva a superar muchos de sus límites.
                    </p>
                    <p>
                        Aunque comenzó con un enfoque romántico hacia Sasuke, Sakura eventualmente madura, 
                        entendiendo el verdadero valor de la amistad, la lealtad y la responsabilidad. 
                        Su evolución es un testimonio de su capacidad para crecer tanto emocional como físicamente.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="img/sakura.jpg" alt="Sakura Haruno" class="img-fluid rounded sakura-image">
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
                        <img src="img/fuerza.jpeg" class="card-img-top" alt="Fuerza Sobrehumana">
                        <div class="card-body">
                            <h5 class="card-title">Fuerza Sobrehumana</h5>
                            <p class="card-text">
                                Entrenada por Tsunade, Sakura ha desarrollado una fuerza física increíble, capaz de destruir el terreno o incapacitar a sus oponentes 
                                con un solo golpe. Esta habilidad es uno de sus rasgos más distintivos en combate.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/medico.jpg" class="card-img-top" alt="Ninjutsu Médico">
                        <div class="card-body">
                            <h5 class="card-title">Ninjutsu Médico</h5>
                            <p class="card-text">
                                Sakura es una experta en ninjutsu médico, lo que le permite curar heridas, extraer venenos y salvar vidas en el campo de batalla. 
                                Su dominio de esta técnica la convierte en una de las mejores ninjas médicas de Konoha.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/invocación.jpeg" class="card-img-top" alt="Invocación de Katsuyu">
                        <div class="card-body">
                            <h5 class="card-title">Invocación de Katsuyu</h5>
                            <p class="card-text">
                                Sakura, al igual que Tsunade, puede invocar a Katsuyu, una babosa gigante que puede dividirse en múltiples partes para ayudar 
                                en la curación o protección de los aliados en batalla. Katsuyu es una aliada invaluable en situaciones de emergencia.
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
                    <strong>La batalla contra Sasori:</strong> <p>En una de sus primeras batallas serias, Sakura lucha junto a Chiyo contra Sasori, 
                    uno de los miembros más peligrosos de Akatsuki, demostrando su increíble fuerza y habilidades tácticas.</p>
                </li>
                <li class="list-group-item">
                    <strong>La confesión a Naruto:</strong> <p>Sakura confiesa sus sentimientos a Naruto, intentando aliviar su carga, aunque esto lleva a 
                    un entendimiento más profundo de sus propios sentimientos y el respeto por Naruto.</p>
                </li>
                <li class="list-group-item">
                    <strong>El papel en la Cuarta Guerra Mundial Shinobi:</strong> <p>Durante la guerra, Sakura juega un papel crucial tanto en la primera línea 
                    de batalla como en el tratamiento de los heridos, mostrando su desarrollo como una kunoichi completa.</p>
                </li>
                <li class="list-group-item">
                    <strong>La confrontación final con Sasuke:</strong> <p>En el clímax de la serie, Sakura se enfrenta a Sasuke y expresa sus sentimientos 
                    mientras también muestra su determinación para proteger a Konoha y a sus amigos.</p>
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