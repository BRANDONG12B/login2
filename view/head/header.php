<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
    
?>
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
 
<div class="fondo_menu">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php if (empty($_SESSION['usuario'])): ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Precios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contáctanos</a>
                            </li>
                        </ul>
                        <a href="/login/view/home/login.php" class="boton">Iniciar Sesión</a>
                        <a href="/login/view/home/signup.php" class="boton">Registrarse</a>
                    <?php else: ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Agregar información</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Editar perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sesión de recursos</a>
                            </li>
                        </ul>
                        <a href="/login/view/home/logout.php" class="boton">Cerrar Sesión</a>
                    <?php endif ?>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="fondo">
    <!-- Aquí puedes agregar el contenido específico de la sección de agregar productos -->


    <style>
    .fondo {
        background-image: url("../head/img/logo.jpg");
        background-size: cover;
        background-position: center;
        /* Otros estilos de la sección fondo */
    }
    


    * {
  margin: 0;
  padding: 0;
}

main {
  padding-top: 7vh;
}

body {
  background-image: url(../iconos/fondo/fondo.jpg);
  background-color: rgba(0, 0, 0, 0.658);
  background-blend-mode: soft-light;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
}


.logo img {
  float: left;
  width: 300px;
  margin-left: 20px;
  margin-top: 10px;
}

.logo2 a {
  color: black;
  float: right;
  text-decoration: none;
  font-size: xx-large;
  line-height: 60px;
  margin-right: 32px;
  padding: 5px;
}

.logo2:hover a {
  background-color: rgba(255, 255, 255, 0.226);
  border-bottom: solid rgb(81, 255, 217);
}

.busqueda {
  margin-right: 20px;
}

.busqueda input {
  width: 0;
  height: 35px;
  font-size: 22px;
  padding: 0 20px;
  border-radius: 30px;
  color: black;
  outline: none;
  visibility: hidden;
  transition: all 2s ease;
  float: right;
}

.btnBus img {
  width: 50px;
  border-radius: 10px;
  float: left;
  top: 8px;
  right: 0px;
  cursor: pointer;
  float: right;
}

.busqueda:hover input {
  width: 300px;
  visibility: visible;
}

.busqueda input:focus {
  width: 300px;
}

#menu {
  display: none;
}

#menu:checked ~ .menuP {
  opacity: 1;
  visibility: visible;
}

#logo {
  cursor: pointer;
  transition: all 500ms ease;
}

#logo:hover {
  transform: scale(1.3);
}

#menu:checked ~ .menuP .menuH {
  transform: translateX(0%);
}

.menuP {
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  transition: all 500ms ease;
  opacity: 0;
  visibility: hidden;
  z-index: 2;
}

.menuH {
  width: 100%;
  max-width: 290px;
  background: #1c1c1c;
  height: 100%;
  position: fixed;
  transition: all 500ms ease;
  transform: translateX(-100%);
  margin-left: 0;
  overflow-y: hidden;
}

.menuH:hover {
  overflow-y: auto;
}

.menuH::-webkit-scrollbar {
  width: 10px;
}

.menuH::-webkit-scrollbar-thumb {
  background-color: #909090;
  border-radius: 5px;
}

.menuP a {
  display: block;
  text-decoration: none;
  padding: 20px;
  color: #c7c7c7;
  border-left: 5px solid transparent;
  transition: all 400ms ease;
}

.princi a {
  text-align: center;
  top: 50px;
}

.menuH h1 {
  text-align: center;
  font-size: xx-large;
  color: white;
  margin-top: 20px;
}

.menuP a:hover {
  border-left: 5px solid #c7c7c7;
  background: #1f1f1f;
}

.menuH img {
  width: 50px;
  filter: drop-shadow(-1px 1px 1px rgb(255, 255, 255));
}

.menuP h2 {
  font-size: xx-large;
  color: white;
  text-align: center;
}

.menuH label {
  position: absolute;
  right: 5px;
  top: 30px;
  cursor: pointer;
  width: 50px;
  filter: drop-shadow(0.2px 0.2px 0.2px rgba(255, 255, 255, 0.712));
}

.menuP img:hover {
  transform-style: 200ms;
  transform: scale(1.25);
  filter: drop-shadow(-1px 1px 1px rgb(0, 255, 191));
}

.carrucel {
  width: 100%;
  height: 50vh;
  display: flex;
  overflow: hidden;
}

.card{
  animation-name: my-animation;
  animation-duration: 40s;
  animation-delay: 1s;
  animation-iteration-count: infinite;
  animation-timing-function: ease;
  position: relative;

}

@keyframes my-animation { 
  0%{right: 0%;}
  20%{right: 40%;}
  40%{right: 70%}
  60%{right: 110%;}
  80%{right: 160%;} 
  100%{right: 0%;}
}

.flechai {
  width: 10%;
  height: 50vh;
  z-index: 1;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
}

.flechai:hover {
  background-color: rgba(0, 0, 0, 0.219);
}

.flechai a img:hover {
  filter: drop-shadow(0 0 5px aqua);
}

.flechad:hover {
  background-color: rgba(0, 0, 0, 0.219);
}

.flechad a img:hover {
  filter: drop-shadow(0 0 5px aqua);
}

.flechad {
  width: 10%;
  height: 50vh;
  position: absolute;
  z-index: 1;
  right: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.flechad a img {
  filter: drop-shadow(0 0 10px white);
}

.flechai a img {
  filter: drop-shadow(0 0 5px white);
}

.carrucelhijo img {
  width: auto;
  height: 60vh;
  object-fit: cover;
  z-index: -1;
  position: relative;
}

.cardinfo {
  font-size: xx-large;
  color: white;
  text-shadow: 0 0 8px black;
  text-align: center;
  padding: 20px;
  width: 100%;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}

.card {
  position: relative;
}

.cardinfo {
  position: absolute;
  bottom: 0;
}

.title h1 {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  text-shadow: 0 0 1px black;
}

.grid {
  width: 80%;
  margin: auto;
  display: grid;
  grid-gap: 40px;
  grid-template-columns: repeat(6, 1fr);
  grid-template-rows: repeat(5, 1fr);
}

.grid .pelicula a img {
  width: 200px;
  height: 275px;
  object-fit: cover;
  transition: 0.1s;
}

.grid > div {
  height: auto;
  background-color: #000000b6;
  padding: 5px;
  text-align: center;
  border: solid 1px rgba(255, 255, 255, 0.616);
}

.grid div a {
  text-decoration: none;
  color: white;
  text-shadow: 0 0 5px black;
  font-size: large;
  padding: 6px;
}

.pelicula:hover {
  border: solid 1px blue;
}

.pelicula a:hover {
  color: aqua;
}

.grid .seibar {
  grid-column: 5/6;
  grid-column: span 2;
  grid-row: span 5;
}

.seibar h2 {
  font-size: xx-large;
  padding: 30px;
  color: white;
  text-shadow: 0 0 2px rgb(0, 0, 0);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}

.seibarc {
  width: 100%;
  display: flex;
  padding-top: 20px;
}

.seibarc:hover {
  border-bottom: solid 1px #0f4c75;
  border-top: solid 1px #0f4c75;
}

.seibarc a:hover {
  color: aqua;
}

.imagenes {
  width: 50%;
}

.imagenes {
  width: 200px;
}

.imagenes img {
  width: 140px;
}

.sifo {
  width: 50%;
  padding-top: 40px;
}

.sifo a img {
  padding-left: 10px;
  padding-top: 10px;
  transition: all 300ms;
}

#play:hover {
  transform: scale(1.3);
}

.vermaszz {
  width: 100%;
  padding: 20px;
}

.vermaszz a {
  font-size: xx-large;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.vermaszz a:hover {
  color: aqua;
}

footer {
  width: 100%;
  height: 40px;
  background-color: #3282b8;
  padding-top: 24px;
  border-top: #1c1c1c;
}

.footer {
  width: 100%;
  display: flex;
  justify-content: center;
}

.footer a {
  text-decoration: none;
  font-size: large;
  color: white;
  text-shadow: 0 0 5px black;
  padding-left: 20px;
}

.terminos3 {
  font-size: large;
  color: white;
  text-shadow: 0 0 5px black;
  padding-left: 20px;
}

.footer a:hover {
  text-shadow: 0 0 2px #355c7d;
}

h1 {
  color: white;
  margin: 0 0 0 10%;
  padding-top: 50px;
  padding-bottom: 30px;
}

.vermas {
  margin: 0 0 0 10%;
  padding-bottom: 50px;
  padding-top: 20px;
}

.vermas a {
  text-decoration: none;
  color: white;
  font-size: xx-large;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  text-shadow: 0 0 2px black;
}

.vermas a:hover {
  color: aqua;
}

</style>
 <header>
        <div class="cabe">
            <div class="menu">
                <label for="menu">
                    <img id="logo" src="iconos/menu.png" alt="">
                </label>
            </div>
            <div class="logo">
                <a href="index.html">
                    <img src="iconos/baner.png" alt="banner">
                </a>
            </div>
            <div class="logo2">
                <a href="login.html">Login</a>
            </div>

            <div class="busqueda">
                <div>
                    <label class="busqueda" for="">
                </div>
                <input type="text" placeholder="Buscar" required>
                <div class="btnBus">
                    <img src="iconos/buscar.png" alt="">
                </div>
                </label>
            </div>
        </div>
        <input id="menu" type="checkbox">
        <aside class="menuP">
            <div class="menuH">
                <nav class="princi">
                    <h1>PeliTech</h1>
                    <a href="populares.html">Estrenos</a>
                    <a href="populares.html">Mas vistas</a>
                    <a href="proximamente.html">Series</a>
                    <a href="proximamente.html">Anime</a>
                </nav>
                <div class="gene">
                    <h2>GENEROS</h2>
                    <a href="populares.html">Acción</a>
                    <a href="populares.html">Animación</a>
                    <a href="populares.html">Aventura</a>
                    <a href="populares.html">Ciencia Ficción</a>
                    <a href="populares.html">Comedia</a>
                    <a href="populares.html">Crimen</a>
                    <a href="populares.html">Drama</a>
                    <a href="populares.html">Fantasía</a>
                    <a href="populares.html">Guerra</a>
                    <a href="populares.html">Historia</a>
                    <a href="populares.html">Romance</a>
                    <a href="populares.html">Suspense</a>
                    <a href="populares.html">Terror</a>
                    <a href="populares.html">Misterio</a>
                    <label for="menu">
                        <img src="iconos/flecha-izquierda.png" alt="">
                    </label>
                </div>
                <label for="menu">
                    <img src="iconos/flecha-izquierda.png" alt="">
                </label>
            </div>
        </aside>
    </header>

    <main>

        <div class="carrucel">
            <div class="card" id="img1">
                <a href="reproductoresP/Doctor-Strange-en-Multiverso-de-la-Locura.html">
                    <div class="carrucelhijo">
                        <img src="img/carrusel/pdrstren.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>Doctor Strange en el Multiverso de la Locura</h3>
                    </div>
                </a>
            </div>


            <div class="card" id="img2">

                <a href="reproductoresP/spiderman-un-nuevo-universo.html">
                    <div class="carrucelhijo">
                        <img src="img/carrusel/pspiderman.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>Spider-Man: un nuevo universo</h3>
                    </div>
            </div>
            </a>


            <div class="card" id="img3">

                <a href="reproductoresP/sonic2.html">
                    <div class="carrucelhijo">
                        <img src="img/carrusel/psonic2.jpg">
                    </div>
                    <div class="cardinfo">
                        <h3>Sonic 2</h3>
                    </div>
            </div>
            </a>


            <div class="card" id="img4">

                <a href="reproductoresP/joker.html">
                    <div class="carrucelhijo">
                        <img src="../head/img/caratulas/joker.jpg" alt="" >
                        
                    </div>
                    <div class="cardinfo">
                        <h3>Joker</h3>
                    </div>
            </div>
            </a>


            <div class="card" id="img5">

                <a href="reproductoresP/vengadores-infinity-war.html">
                    <div class="carrucelhijo">
                        <img src="img/carrusel/pengame.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>vengadores infinity war</h3>
                    </div>
                </a>
            </div>

        </div>

        <div class="title">
            <h1>Agregadas recientemente</h1>
        </div>

        <div class="grid">

            <div class="pelicula">
                <a href="reproductoresP/animalesfantasticos3.html">
                    <img src="img/caratulas/pAnimalesFantascicosLosSceretosD.jpg" alt="">
                    Animales Fantásticos 3: Los Secretos de Dumbledore
                </a>
            </div>


            <div class="pelicula">
                <a href="reproductoresP/vengadores4.html">
                    <img src="img/caratulas/avengers.jpg" alt="">
                    Avengers: Endgame
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/joker.html">
                    <img src="img/caratulas/joker.jpg" alt="">
                    joker
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/ligadelajusticiaZACK.html">
                    <img src="img/caratulas/ligajusticia.jpg" alt="">
                    La Liga de la Justicia de Zack Snyder
                </a>
            </div>


            <div class="seibar">
                <h2>Recomendado</h2>
                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/animalesfantasticos3.html">
                            <img src="img/caratulas/pAnimalesFantascicosLosSceretosD.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/animalesfantasticos3.html"> Animales Fantásticos 3: Los Secretos de
                            Dumbledore <br> 4.7 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/parasitos.html">
                            <img src="img/caratulas/parasitos.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/parasitos.html">Parásitos<br> 4.4 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/vengadores4.html">
                            <img src="img/caratulas/avengers.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/vengadores4.html">Avengers: Endgame<br> 4.7 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/John-Wick-3.html">
                            <img src="img/caratulas/john-wick-3.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/John-Wick-3.html">John Wick 3: Parabellum<br> 4.4 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/spiderman-lejos-de-casa.html">
                            <img src="img/caratulas/spider-man-lejos-de-casa.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/spiderman-lejos-de-casa.html">Spider-Man: lejos de casa<br> 4.0 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/aves-de-presa.html">
                            <img src="img/caratulas/aves-de-presa-y-la-fantabulosa-emancipacion-de-harley-quinn-25967-poster-200x300.jpg"
                                alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/aves-de-presa.html"> Aves de presa <br> 3.7 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/joker.html">
                            <img src="img/caratulas/joker.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/joker.html">Guason<br> 4.7 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="vermaszz">
                    <a href="populares.html">Ver mas</a>
                </div>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/parasitos.html">
                    <img src="img/caratulas/parasitos.jpg" alt="">
                    Parasitos
                </a>
            </div>


            <div class="pelicula">
                <a href="reproductoresP/sonic2.html">
                    <img src="img/caratulas/Sonic2.jpg" alt="">
                    Sonic 2
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/Toystory4.html">
                    <img src="img/caratulas/toystory4.jpg" alt="">
                    Toy story 4
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/ultimo-ritual.html">
                    <img src="img/caratulas/ultimoRitu.jpg" alt="">
                    El ultimo ritual
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/vengadores-infinity-war.html">
                    <img src="img/caratulas/vengadores-infinity-war.jpg" alt="">
                    vengadores infinity war
                </a>
            </div>


            <div class="pelicula">
                <a href="reproductoresP/spiderman-lejos-de-casa.html">
                    <img src="img/caratulas/spider-man-lejos-de-casa.jpg" alt="">
                    spider man lejos de casa
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/spiderman-un-nuevo-universo.html">
                    <img src="img/caratulas/spaidermananimada.jpg" alt="">
                    Spider-Man: un nuevo universo
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/gozilla-vs-kong.html">
                    <img src="img/caratulas/godzilla-vs-kong.jpg" alt="">
                    godzilla vs kong
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/deadpool2.html">
                    <img src="img/caratulas/deadpool-2.jpg" alt="">
                    Deadpool 2
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/aquaman.html">
                    <img src="img/caratulas/aquaman.jpg" alt="">
                    Aquaman
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/Bohemian-Rhaosody.html">
                    <img src="img/caratulas/bohemian-rhapsody.jpg" alt="">
                    Bohemian Rhaosody
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/John-Wick-3.html">
                    <img src="img/caratulas/john-wick-3.jpg" alt="">
                    john wick 3
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/it-2.html">
                    <img src="img/caratulas/it-capitulo-2.jpg" alt="">
                    it 2 capitulo 2
                </a>
            </div>


            <div class="pelicula">
                <a href="reproductoresP/aves-de-presa.html">
                    <img src="img/caratulas/aves-de-presa-y-la-fantabulosa-emancipacion-de-harley-quinn-25967-poster-200x300.jpg"
                        alt="">
                    Aves de presa
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/soul.html">
                    <img src="img/caratulas/soul.jpg" alt="">
                    Soul
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/capitana-marvel.html">
                    <img src="img/caratulas/capitana-marvel.jpg" alt="">
                    Capitana marvel
                </a>
            </div>

        </div>
        <div class="vermas">
            <a href="populares.html">Ver mas</a>
        </div>
    </main>

    <footer>
        <div class="footer">
            <div>
                <a href="">Terminos y condiciones</a>
            </div>
            <div>
                <a href="">Contacto</a>
            </div>

            <div class="terminos3">
                <p>PeliTech 2022-2023</p>
            </div>
        </div>
    </footer>

    
</body>
</html>

