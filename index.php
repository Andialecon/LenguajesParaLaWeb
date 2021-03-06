<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Marketing Digital</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/main.css">
  </head>
  
  <body>
    <!-- BARRA DE NAVEGACIÓN -->
    <?php
      include "header.php";    
    ?>
    
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="imagenes/image.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Páginas Dinamicas</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="imagenes/responsive.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="imagenes/seo.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="imagenes/tienda.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  
                </div>
              </div>
              <div class="carousel-item">
                
                <img src="imagenes/primera.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Tiendas Virtuales</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="imagenes/apps.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  
                </div>
              </div>
            </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>

        </div>
   

    <!-- SERVICIOS -->
    <div class="container py-5" id="servicios" style="margin-bottom: 50px; color: black">

          <div class="row">
              <div class="col">
                <div class="acordion" id="accordionTarjetas"> 
                  <div class="card" style="width: 30rem;">
                      <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBasica" aria-expanded="true" aria-controls="collapseBasica">
                                      ¿Qué es el Marketing Digital? 
                                  </button>                                         
                              </h5>
                      </div>
                      <div id="collapseBasica" class="collapse" aria-labelledby="headingOne" data-parent="#accordionTarjetas"> 
                              <div class="card-body">
                                Es una forma de comercialización que hace uso de plataformas digitales como las redes sociales y paginas webs para comprar y vender en internet.
                              </div>
                      </div>
                  </div>
                  <div class="card" style="width: 30rem;">
                      <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseVip" aria-expanded="true" aria-controls="collapseBasica">
                                      Caracteristicas
                                  </button>                                         
                              </h5>
                      </div>
                      <div id="collapseVip" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionTarjetas"> 
                              <div class="card-body">
                                <u style="text-decoration: none;">
                                  <li>Facil, rapido y Seguro</li>
                                  <li>Economico</li>
                                  <li>Atrayente</li>
                                  <li>Adaptable</li>
                                  <li>Personalizado</li>
                              </u>  
                              </div>
                      </div>
                  </div>
                  <div class="card" style="width: 30rem;">
                      <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBlack" aria-expanded="true" aria-controls="collapseBasica">
                                      Ventajas
                                  </button>                                         
                              </h5>
                      </div>
                      <div id="collapseBlack" class="collapse" aria-labelledby="headingThree" data-parent="#accordionTarjetas"> 
                              <div class="card-body">
                                <u style="text-decoration: none;">
                                  <li>Nuevos clientes</li>
                                  <li>Automatización de ventas</li>
                                  <li>Reducción en costos</li>
                                  <li>Escalamiento del negocio</li>
                                </u> 
                              </div>
                      </div>
                  </div>
              </div>    
            </div>
            
            <div class="col" style="width: 30rem; margin-top: 0px;"> 
                <div class="card">
                    <img src="imagenes/marketing-digital.png" class="card-img-top" alt="...">
                </div>
              
            </div>

          </div>

          <div class="row">
            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem;height:450px">
                <img src="imagenes/tercera.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Aplicaciones Mobiles</h5>
                  <p class="card-text">Aplicaciones para Android: Diseño, mantenimiento y administración.</p>
                  <a href="#" class="btn btn-primary">Leer más</a>
                </div>
              </div>
            </div>

            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem;height:450px">
                <img src="imagenes/violettek-e-store.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Paginas Web</h5>
                      <p class="card-text">
                          Sitios responsives. 
                      </p>
                  <a href="#" class="btn btn-primary">Leer más</a>
                </div>
              </div>
            </div>

            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem; height:450px;">
                  <img src="imagenes/educativas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                      <h5 class="card-title">Plataformas Educativas</h5>
                      <p class="card-text">
                         Paginas web para facilitar el aprendizaje en todo momento. 
                      </p>
                  <a href="#" class="btn btn-primary">Leer más</a>
                </div>
              </div>
            </div>

            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem; height:450px;">
                  <img src="imagenes/posicionamiento.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                      <h5 class="card-title"> SEO posicionamiento web</h5>
                      <p class="card-text">
                          Posicionamos tu pagina web con anuncios impactantes.
                      </p>
                  <a href="#" class="btn btn-primary">Leer más</a>
                </div>
              </div>
            </div>

            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem; height:450px;">
                  <img src="imagenes/administrador.png" class="card-img-top" alt="...">
                <div class="card-body">
                      <h5 class="card-title">Administración de sitios Web</h5>
                      <p class="card-text">
                          Implementamos herramientas que le permitan administrar su pagina web de una manera facil.
                      </p>
                  <a href="#" class="btn btn-primary">Leer más</a>
                </div>
              </div>
            </div>

            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem; height:450px;">
                  <img src="imagenes/marca.png" class="card-img-top" alt="...">
                <div class="card-body">
                      <h5 class="card-title">Construcción De Marca</h5>
                      <p class="card-text">
                          Te ayudamos a mejorar la forma en la que muestras tus productos para conseguir fantasticos resultados.
                      </p>
                  <a href="#" class="btn btn-primary">Leer más</a>
                </div>
              </div>
            </div>
          </div>
    </div>

    <!-- CONOCENOS -->
    <div class="container-fuid conocenos" id="conocenos">
          <div class="row bg-primary align-items-center">
                  
                <div class="col-12 avatars" style="margin-bottom: 50px; margin-top: 80px">
                  <h2>Nuestro Equipo</h2><svg class="bi bi-people-fill" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                  <p><h4>Somos una agencia de Marketing Digital que trabaja dia a dia para la construcción e implementacion de soluciones </h4></p>
                </div>
                  
                <div class="col-md-6 avatars"  style="margin-bottom: 40px">
                  <img src="imagenes/andres.png">
                  <p style="width: 100%">Andrés Alemán</p>
                </div>      
                
                <div class="col-md-6 avatars  style="margin-bottom: 40px>
                  <img src="imagenes/sofia.png">
                  <p style="width: 100%">Sofia de los Rios</p>   
                </div>
          </div>
    </div>  

    <!-- COTIZAR -->
    <div class="container py-5" id="cotizar">
        <div class="row">
            <h1 class="text-center">Elije alguno de nuestros servicios para conocer un precio estimado  <svg class="bi bi-laptop" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
              <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
            </svg></h1>

        </div>
        <div class="row align-items-center">
            <div class="col">
                <img src="imagenes/cotizar.jpg" alt="">
            </div>
            <div class="col">
              <form id="form-cotizar">
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control" id="name" value="">
                </div>
                <div class="form-group">
                  <label for="email">Correo electronico de contacto</label>
                  <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Tipo de solución</label>
                  <select class="form-control" id="solucion">
                    <option>Pagina Web</option>
                    <option>E-comerce</option>
                    <option>Plataforma educativa</option>
                    <option>Aplicacion móvil</option>
                    <option>Campaña de Marketing</option>
                    <option>Administración de sitios</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="cantidad">Cantidad</label>
                  <input type="text" class="form-control" placeholder="Indique el número de productos que requiere" id="cantidad">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Especificaciones</label>
                  <textarea class="form-control" id="especificaciones" rows="1"></textarea>
                </div>
                <button id="enviar" type="button" class="btn btn-outline-dark">Cotizar</button>
              </form>
            </div>
        </div>

        <!-- CONTACTANOS -->
        <div class="row py-5 justify-content-center" id="contactanos">
           <h1 class="text-center">Contactanos</h1>
        </div>
        <div class="row align-items-center">
          
            <div class="col py-2">
                <div class="text-center" style="padding: 20px;">
                    <h4>Escríbenos a traves de: </h4>
                    <p>marketing-digital@gmail.com</p>
                    <p>PBX: 5403231 ext. 107</p>
                    <p>Celular: 301 7802849</p>
                    <p>En nuestras redes sociales</p>
                </div>
            </div>

            <div class="col py-2">
              <iframe src="https://www.google.com/maps/d/embed?mid=1jXmM25htDDT1jVJ8jV84O7tx6hoy4nXA" width="640" height="480"></iframe>
            </div>
        </div>
    </div>
      
          
    <!-- FOOTER -->
    <footer>
        <div class="row footer align-items-center bg-dark">
            <div class="col-md-4 text-white ml-auto">
                <p style="font-size:x-large;"><b>Siguenos en nuestras redes sociales</b> </p>
            </div>
            <div class="col-md-1">
                <a href="https://www.whatsapp.com/"><img src="imagenes/what.png" alt=""></a> 
            </div>
            <div class="col-md-1">
                <a href="https://www.instagram.com/"><img src="imagenes/insta.png" alt=""></a> 
            </div>
            <div class="col-md-1">
                <a href="https://www.facebook.com/"><img src="imagenes/face.png" alt=""></a>
            </div>
        </div>
    </footer>     
    
    <!-- Modal -->
    <div class="modal fade" id="registrarse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">CREA UNA CUENTA</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="controlador/registro.php" method="POST" id="form" >
                      <div class="form-group">
                        <label for="usuario" class="col-form-label" >Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" value="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" id="password" placeholder="Debe contener minimo 8 caracteres">
                      </div>
                      <button type="submit" class="btn btn-success">Enviar</button>
                      <p id="validacion"></p>
                  </form>
                  
              </div>
          </div>
      </div>
    </div>

    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel2">INICIAR SESIÓN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="controlador/login.php" method="POST" id="form2" >
                      <div class="form-group">
                        <label for="usuario2" class="col-form-label" >Usuario</label>
                        <input type="text" name="usuario" class="form-control" id="usuario2" value="">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Contraseña</label>
                        <input type="password" name="contrasena" class="form-control" id="password2" placeholder="Escriba aquí su Contraseña">
                      </div>
                      <button type="submit" class="btn btn-success">Enviar</button>
                  </form>
                  
              </div>
          </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>	
    <script src="js/main.js"></script>
    <script>
      $(function(){
        $('.carousel').carousel({
          interval:2000
        });
      })
    </script>
  </body>

</html>