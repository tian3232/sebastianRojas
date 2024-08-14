<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sasuke</title>
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
                    <h2>Sasuke Uchiha</h2>
                    <p>
                        Sasuke Uchiha es uno de los personajes principales de la serie Naruto y es conocido como el último sobreviviente del Clan Uchiha. 
                        Desde temprana edad, Sasuke mostró un gran talento como ninja y fue impulsado por el deseo de vengar la destrucción de su clan, 
                        cometido por su propio hermano, Itachi Uchiha.
                    </p>
                    <p>
                        A lo largo de su viaje, Sasuke desarrolla habilidades extraordinarias, incluyendo el Sharingan y el Rinnegan. 
                        Su camino lo lleva desde ser un ninja respetado hasta convertirse en un renegado, y finalmente encuentra la redención 
                        después de varios enfrentamientos con su mejor amigo y rival, Naruto Uzumaki.
                    </p>
                    <p>
                        Sasuke es un personaje complejo, impulsado por la venganza, la soledad, y finalmente, el deseo de proteger a su aldea a su manera.
                        Su historia es una de redención, crecimiento personal y lucha interna entre el odio y el deseo de hacer lo correcto.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="img/sasuke.png" alt="Sasuke Uchiha" class="img-fluid rounded sasuke-image">
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
                        <img src="img/sharingan.jpg" class="card-img-top" alt="Sharingan">
                        <div class="card-body">
                            <h5 class="card-title">Sharingan</h5>
                            <p class="card-text">
                                El Sharingan es el kekkei genkai del Clan Uchiha, que le permite a Sasuke copiar movimientos y técnicas, 
                                así como predecir y reaccionar ante ataques enemigos con increíble velocidad y precisión.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/shidori.png" class="card-img-top" alt="Chidori">
                        <div class="card-body">
                            <h5 class="card-title">Chidori</h5>
                            <p class="card-text">
                                El Chidori es una técnica que Sasuke aprende de Kakashi Hatake. Es una poderosa técnica de rayo concentrado que 
                                Sasuke utiliza en combate cuerpo a cuerpo, capaz de perforar cualquier cosa en su camino.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="img/amateratsu.jpg" class="card-img-top" alt="Amaterasu">
                        <div class="card-body">
                            <h5 class="card-title">Amaterasu</h5>
                            <p class="card-text">
                                El Amaterasu es una técnica de llamas negras que arden hasta consumir su objetivo por completo. 
                                Esta técnica es exclusiva del Mangekyō Sharingan de Sasuke.
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
                    <strong>La masacre del Clan Uchiha:</strong> <p>Uno de los momentos más impactantes en la vida de Sasuke, cuando su hermano Itachi asesina a toda su familia, dejando a Sasuke como el único sobreviviente.</p>
                </li>
                <li class="list-group-item">
                    <strong>El entrenamiento con Orochimaru:</strong> <p>Sasuke abandona Konoha para entrenar con Orochimaru, buscando poder para vengar a su clan.</p>
                </li>
                <li class="list-group-item">
                    <strong>El enfrentamiento final con Naruto:</strong> <p>En el Valle del Fin, Sasuke y Naruto se enfrentan en una batalla épica que define sus destinos.</p>
                </li>
                <li class="list-group-item">
                    <strong>La redención y regreso a Konoha:</strong> <p>Después de la Cuarta Guerra Mundial Shinobi, Sasuke busca redimirse y decide vagar por el mundo como un shinobi errante para expiar sus pecados.</p>
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