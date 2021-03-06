
<!DOCTYPE html>
<html lang="en">
<head>

  
 <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet"> 
      <link href="https://unpkg.com/nes.css/css/nes.css" rel="stylesheet" />
        <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
      <link href="css/stylo.css" rel="stylesheet">
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Sombra estudio</title>

  <link rel="apple-touch-icon" sizes="180x180" href="images/logo/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Creative Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Kross Template v1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- ** Plugins Needed for the Project ** -->

  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet">

  <!-- Main Stylesheet -->
  
  <link href="css/style.css" rel="stylesheet">

</head>
<body>
  

  <header class="navigation">
    <nav class="navbar w-100 navbar-expand-lg navbar-dark ">
      <div class=" col-lg-2  align-self-start">
          <a id="logo" class="navbar-brand font-tertiary " href="index.html">
            <img class="w-100 nes-pointer" src="images/logo/logo.png"  class="d-inline-block  " alt="">
          </a>
         <button class="navbar-toggler  align-self-center cuadro-morado" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
          </button>
      </div>
      

      <div class=" col-lg-10  row collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link nes-pointer" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nes-pointer" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nes-pointer" href="#contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nes-pointer" href="index-en.html">EN<img src="images/eng.png" width="30"alt="spa"> </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- hero area -->
  <section  >
    <div class="container">
      <div class="row hero-area">
        <div class="col-lg-8 col-xs-8 nes-container cuadro-morado mx-auto  is-rounded">
          <h3 class="text-white font-tertiary">Hola Soy  NUMIX </h3>
          <h4 class="text-white font-tertiary" >
            Conoce mi trabajo como Unity Developer
            <br><br>
            Soy Analista de Sistemas y me dedico hace tiempo a desarrollar videojuegos utilizando como herramienta principial Unity.
            <br><br>
            Comence hace unos a??os en mi tiempo libre y fui capacit??ndome, explorando Unity y creando diversos y peque??os proyectos que podras ver mas abajo.
            <br><br>
            He realizado dos cursos de desarrollo de videojuegos con esta herramienta en la UTN (Universidad Tecnologica Nacional de Argentina) y ya he publicado mi primer videojuego, "24 Cats".          
          </h4>
          
        </div>
        <div class="col-lg-4 col-xs-8 mx-auto foto-numa">
          <div class="mb-4  nes-container cuadro-morado    is-rounded">
            <img src="images/pp.jpg" alt="MANUEL ALONSO" class="img-manu">
          </div>
          
        </div>
      </div>
    </div>

    <section class="hero-area " id="parallax">
      <div class="container">
        
        <div class="row">
          <div id="portfolio" class="col-lg-12 nes-container cuadro-morado is-rounded">
            <h3 class="text-white font-tertiary">Portfolio</h3>
            <h4 class="text-white font-tertiary" >Estos son algunos de los juegos que desarrolle</h4>

            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
            -->
            <div class="row">
              <div class="col-lg-3">
                <div id="torre2" class="card juegos "  data-toggle="modal" data-target=".bd-example-modal-lg" >
                  <img class="d-block w-100 nes-pointer" src="images/portfolio/casa-arbol.png">
                  <div class="card-body nes-pointer">
                    <p class="card-text">Pro builder and Cinemachine Demo</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="row justify-content-between">
                  <div id="torre" class="card col-lg-6 col-sm-auto hover-zoom juego "  data-toggle="modal" data-target="#fafa6" >
 
                    <img class="d-block w-100 nes-pointer" src="images/portfolio/Thumbnailv2_1280x720.PNG">
                    <div class="card-body nes-pointer">
                      <p class="card-text">Pro builder and Cinemachine Demo</p>
                    </div>
                  </div>
                  <div class="card col-lg-6 col-sm-auto juego hover-zoom "  data-toggle="modal" data-target="#fafa2" >

                    <img class="d-block w-100 nes-pointer" src="images/portfolio/cats.jpg">
                    <div class="card-body nes-pointer">
                      <p class="card-text">24 CATS</p>
                    </div>
                  </div>
                  <div class="card col-lg-6 col-sm-auto juego hover-zoom "  data-toggle="modal" data-target="#fafa3" >
                    <img class="d-block w-100 nes-pointer" src="images/portfolio/FirstPersonShooter1_1280x720.png" >
                    <div class="card-body nes-pointer">
                      <p class="card-text">First person shooter</p>
                    </div>
                  </div>
                  <div class="card col-lg-6  col-sm-12 juego hover-zoom"  data-toggle="modal" data-target="#fafa4" >
                    <img class="d-block w-100 nes-pointer" src="images/portfolio/space.jpg" >
                    <div class="card-body nes-pointer">
                      <p class="card-text">Fixed Shooter</p>
                    </div>
                  </div>
                  <div class="card col-lg-6 juego hover-zoom "  data-toggle="modal" data-target="#fafa5">
                    <img class="d-block w-100 nes-pointer" src="images/portfolio/chess.PNG" >
                    <div class="card-body nes-pointer">
                      <p class="card-text">Word of chess</p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>    
    </section>    
 <!--
    <section class="hero-area " id="parallax">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 mx-auto">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner  ">
                <div class="carousel-item active">
                 
                  <div  class=" breadcrumb aver w-100 nes-container  is-rounded d-md-block">
                    <h4>Incremental Clicker Game</h4>
                    <p>24 Cats fue creado utilizando el package de Visual Scripting de Unity 2021. Es un clicker donde obtienes puntos al hacer que gatos salten contra las paredes y piso. Al obtener mas puntos tienes como recompensa mas gatos para as?? poder ganar mas puntos y llegar a coleccionar los 24 gatos del juego.
                    <br>
                      <a href="https://play.google.com/store/apps/details?id=com.SombraStudios.Product24Cats" target="_blank">Google Play Store</a>
                    <br>
                      <a href="https://manuelfalonso.itch.io/24-cats" target="_blank"><span class="color_11"><span style="text-decoration:underline;">Ithc.io</span></span></a>
                    </p>
                    
                  </div>
                
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/portfolio/counter.png" alt="Second slide">
                  <div   class=" breadcrumb aver w-100 nes-container  is-rounded d-md-block">
                    <h4>Fixed Shooter</h4>
                    <p>Uno de mis primeros proyectos con la herramienta Unity fue el creado junto con el curso de "Programaci??n de Video Juegos con Unity Nivel Inicial" de la UTN en el a??o 2017.
                    <br>
                      <a href="https://drive.google.com/file/d/1nNW4j5nbFGZEOOEGfR7azHrdj5Rp2-1K/view" target="_blank">DEMO</a>
                    <br>
                      <a href="https://manuelfalonso.itch.io/24-cats" target="_blank"><span class="color_11"><span style="text-decoration:underline;">Ithc.io</span></span></a>
                    </p>
                    
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/portfolio/space.jpg" alt="Third slide">
                  <div  class=" breadcrumb aver w-100 nes-container  is-rounded d-md-block">
                    <h4>First Person Shooter</h4>
                    <p>Este proyecto fue creado junto con el Nivel Avanzado del curso de "Programaci??n de Video Juegos con Unity" de la UTN en el a??o 2017. Es un Shooter en primera persona estilo Arcade con escenario con obst??culos. 
                    <br>
                      <a href="https://play.google.com/store/apps/details?id=com.SombraStudios.Product24Cats" target="_blank">Google Play Store</a>
                    <br>
                      <a href="https://manuelfalonso.itch.io/24-cats" target="_blank"><span class="color_11"><span style="text-decoration:underline;">Ithc.io</span></span></a>
                    </p>
                    
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/portfolio/chess.PNG" alt="Third slide">
                  <div  class=" breadcrumb aver w-100 nes-container  is-rounded d-md-block">
                    <h4>Estrategia por turnos</h4>
                    <p>"World of Chess" es uno de mis primeros proyectos comenzados de cero utilizando 100% assets creados por mi. Se trata de un juego de tablero por turnos basado en el ajedrez ambientado en un mundo real. A continuaci??n link para poder probar la ultima versi??n disponible online. Se encuentra en desarrollo.  Cualquier comentario es bienvenido!
                    <br>
                      <a href="https://play.google.com/store/apps/details?id=com.SombraStudios.Product24Cats" target="_blank">Google Play Store</a>
                    <br>
                      <a href="https://manuelfalonso.itch.io/24-cats" target="_blank"><span class="color_11"><span style="text-decoration:underline;">Ithc.io</span></span></a>
                    </p>
                    
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
          </div>
          
        </div>
      </div>
    -->
      <!-- social icon 
      <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
        <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
        <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
        <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
        <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
      </ul>
       /social icon -->
    
    <!-- social icon 
    <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-facebook"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
    </ul>
    /social icon -->
  </section>
<!-- /hero area -->


<!-- footer -->
  <footer class="footer-section">
    <div id="contacto" class="section">
      <div class="container ">
        <div class="row">
          <div class="container nes-container cuadro-morado mx-auto  is-rounded ">
            <h3 class="text-white font-tertiary">Ponete en contacto conmigo!</h3>
            <div class="nes-field">
              <label for="name_field" class="text-white nes-pointer font-tertiary">Your name</label>
              <input type="text" id="name_field" class="nes-input cuadro">
            </div>
            <div class="nes-field">
              <label for="name_field" class="text-white  font-tertiary">Email</label>
              <input type="email" id="name_field" class="nes-input">
            </div>
            <div class="nes-field">
              <label for="name_field" class="text-white font-tertiary">Asunto</label>
              <input type="text" id="name_field" class="nes-input">
            </div>
            <label for="textarea_field" class="text-white font-tertiary">Mensaje</label>
            <textarea id="textarea_field" class="nes-textarea"></textarea>
            <a class="nes-btn align-self-end" href="#">Enviar</a>
            <div class="d-flex justify-content-center redes">
              <a href="https://github.com/manuelfalonso"><!-- github -->
                <i class="nes-icon github is-medium"></i></a>
                <a href="https://www.linkedin.com/in/manuel-f-alonso/"><!-- github -->
                  <i class="nes-icon linkedin is-medium"></i></a>
                  <a href="https://www.facebook.com/manuel.alonso1"><!-- github -->
                    <i class="nes-icon facebook is-medium"></i></a>
                    <a href="https://twitter.com/ManuelFAlonso"><!-- github -->
                      <i class="nes-icon twitter is-medium"></i></a>
            </div>
          </div>
        </div>
        
      </div>
    </div>  
    <div class="section">
      <div class="row Designed">
        <a class=" col text-white font-tertiary nes-pointer" href="http://www.impalasoluciones.com.ar">Designed by <span class="nes-text is-primary">IMPALA SOLUCIONES</span>
        </a>

      </div>
    </div>
  </footer>
  <div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-12 ">
      <div class="modal-dialog modal-dialog-centered col-lg-12 " role="document">
        <div class="modal-content nes-container is-dark mx-auto  is-rounded">
          <div class="modal-header">
            <h3 class="modal-title text-white font-tertiary" id="exampleModalLongTitle">Pro builder and Cinemachine Demo</h3>
            <button type="button " class="close nes-pointer" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-white font-tertiary">Demo de una torre y un bunker utilizando ProBuilder, ProGrids, PolyBrush and Cinemachine.
              <br>
              <br>
              <video width="800" height="600" controls>
                <source src="video/1080p_sounds.mp4" type="video/mp4">
              </video>
              
          </div>
          <div class="modal-footer">
            <button type="button" class="nes-btn nes-pointer" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="fafa2" class="modal 2  fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-12 ">
      <div class="modal-dialog modal-dialog-centered col-lg-12 " role="document">
        <div class="modal-content nes-container is-dark mx-auto  is-rounded">
          <div class="modal-header">
            <h3 class="modal-title text-white font-tertiary" id="exampleModalLongTitle">24 gatos</h3>
            <button type="button" class="close nes-pointer" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-white font-tertiary">24 Cats fue creado utilizando el package de Visual Scripting de Unity 2021. Es un clicker donde obtienes puntos al hacer que gatos salten contra las paredes y piso. Al obtener mas puntos tienes como recompensa mas gatos para as?? poder ganar mas puntos y llegar a coleccionar los 24 gatos del juego.
              <br>
              <br>
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/24 Cats/24Cats_image_001_0000.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/24 Cats/24Cats_image_004_0000.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/24 Cats/24Cats_Unity_IDE_1280x720.png" alt="Third slide">
                  </div>
                  
                </div>
                
              </div>  
              <div class="d-flex justify-content-center">
                <a class="nes-btn align-self-center" href="https://play.google.com/store/apps/details?id=com.SombraStudios.Product24Cats" target="_blank">Google Play Store</a>
                <br>
                <a class="nes-btn" href="https://manuelfalonso.itch.io/24-cats" target="_blank"><span class="color_11"><span style="text-decoration:underline;">Ithc.io</span></span></a>
              </div>    
          </div>
          <div class="modal-footer">
            <button type="button " class="nes-btn nes-pointer" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="fafa3" class="modal 2  fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-12 ">
      <div class="modal-dialog modal-dialog-centered col-lg-12 " role="document">
        <div class="modal-content nes-container is-dark mx-auto  is-rounded">
          <div class="modal-header">
            <h3 class="modal-title text-white font-tertiary" id="exampleModalLongTitle">First Person Shooter
            </h3>
            <button type="button" class="close nes-pointer" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-white font-tertiary">Este proyecto fue creado junto con el Nivel Avanzado del curso de "Programaci??n de Video Juegos con Unity" de la UTN en el a??o 2017. Es un Shooter en primera persona estilo Arcade con escenario con obst??culos. Demo no disponible aun.
              <br>
              <br>
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/First Person Shooter/FirstPersonShooter1_1280x720.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/First Person Shooter/FirstPersonShooter2_1280x720.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/First Person Shooter/FirstPersonShooter3_1280x720.png" alt="Third slide">
                  </div>
                </div>
               
              </div>                
          </div>
          <div class="modal-footer">
            <button type="button" class="nes-btn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="fafa4" class="modal 2  fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-12 ">
      <div class="modal-dialog modal-dialog-centered col-lg-12 " role="document">
        <div class="modal-content nes-container is-dark mx-auto  is-rounded">
          <div class="modal-header">
            <h3 class="modal-title text-white font-tertiary" id="exampleModalLongTitle">
              Fixed Shooter
            </h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-white font-tertiary">Uno de mis primeros proyectos con la herramienta Unity fue el creado junto con el curso de "Programaci??n de Video Juegos con Unity Nivel Inicial" de la UTN en el a??o 2017.
              <br>
              <br>
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/Fixed Shooter/FixedShooter1_1280x720.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/Fixed Shooter/FixedShooter2_1280x720.jpg"  alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/Fixed Shooter/FixedShooter3_1280x720.jpg" alt="Third slide">
                  </div>
                </div>
               
              </div>   
              <div class="d-flex justify-content-center">
                <a class="nes-btn" href="https://drive.google.com/file/d/1nNW4j5nbFGZEOOEGfR7azHrdj5Rp2-1K/view" target="_blank"><span class="color_11"><span style="text-decoration:underline;">DEMO!</span></span></a>
              </div> 
          </div>
          <div class="modal-footer">
            <button type="button" class="nes-btn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="fafa5" class="modal 2  fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-12 ">
      <div class="modal-dialog modal-dialog-centered col-lg-12 " role="document">
        <div class="modal-content nes-container is-dark mx-auto  is-rounded">
          <div class="modal-header">
            <h3 class="modal-title text-white font-tertiary" id="exampleModalLongTitle">
              Estrategia por turnos
            </h3>
            <button type="button" class="close nes-pointer" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-white font-tertiary">"World of Chess" es uno de mis primeros proyectos comenzados de cero utilizando 100% assets creados por mi. Se trata de un juego de tablero por turnos basado en el ajedrez ambientado en un mundo real. A continuaci??n link para poder probar la ultima versi??n disponible online. Se encuentra en desarrollo.  Cualquier comentario es bienvenido!
              <br>
              <br>
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/World of Chess/World of Chess 1_1280x720.PNG" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/World of Chess/World of Chess 2_1280x720.PNG"  alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/World of Chess/World of Chess 3_1280x720.PNG" alt="Third slide">
                  </div>
                </div>
               
              </div> 
              <div class="d-flex justify-content-center">
                <a class="nes-btn" href="https://drive.google.com/file/d/1nNW4j5nbFGZEOOEGfR7azHrdj5Rp2-1K/view" target="_blank"><span class="color_11"><span style="text-decoration:underline;">DEMO!</span></span></a>
              </div> 
          </div>
          <div class="modal-footer">
            <button type="button" class="nes-btn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="fafa6" class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg-12 ">
      <div class="modal-dialog modal-dialog-centered col-lg-12 " role="document">
        <div class="modal-content nes-container is-dark mx-auto  is-rounded">
          <div class="modal-header">
            <h3 class="modal-title text-white font-tertiary" id="exampleModalLongTitle">Pro builder and Cinematic Demo</h3>
            <button type="button" class="close nes-pointer " data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-white font-tertiary">Demo de una torre y un bunker utilizando ProBuilder, ProGrids, PolyBrush and Cinemachine.
              <br>
              <br>
              <img class="d-block w-100" src="images/portfolio/Thumbnailv2_1280x720.PNG" alt="">
              
          </div>
          <div class="modal-footer">
            <button type="button" class="nes-btn " data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>