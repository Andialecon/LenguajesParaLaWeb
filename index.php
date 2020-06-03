<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pagina con Boostrap integrado</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/main.css">
  </head>
  
  <body>
    <!-- BARRA DE NAVEGACIÓN -->
    <nav class="sticky-top navbar navbar-expand-lg navbar-dark bg-dark">
      
      <a class="navbar-brand" href="index.html"> <b>Marketing Digital</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#conocenos">Conócenos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#cotizar">Cotizar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactanos">Contactanos</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#registrarse">Registrarse</button>
          </li>
        </ul>
      </div>

      

    </nav>
    
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="imagenes/primera.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Tiendas Virtuales</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="imagenes/responsive.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            
            <img src="imagenes/cuarta.jpg" class="d-block w-100" alt="...">
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
    <div class="container py-5" id="servicios" style="margin-bottom: 50px;">

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
            
            <div class="col" style="width: 30rem; margin-top: 30px;"> 
                <div class="card">
                    <img src="imagenes/web.jpg" class="card-img-top" alt="...">
                </div>
              
            </div>

          </div>

          <div class="row">
            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem;height:450px">
                <img src="imagenes/tercera.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Aplicaciones Mobiles</h5>
                  <p class="card-text">Aplicaciones para Android: Diseño, mantenimiento y administración</p>
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
                          Sitios responsives 
                      </p>
                  <a href="#" class="btn btn-primary">Leer más</a>
                </div>
              </div>
            </div>

            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem; height:450px;">
                  <img src="imagenes/tienda.png" class="card-img-top" alt="...">
                <div class="card-body">
                      <h5 class="card-title">e-Comerce</h5>
                      <p class="card-text">
                          
                      </p>
                  <a href="#" class="btn btn-primary">Leer más</a>
                </div>
              </div>
            </div>

            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem; height:450px;">
                  <img src="imagenes/tienda.png" class="card-img-top" alt="...">
                <div class="card-body">
                      <h5 class="card-title">e-Comerce</h5>
                      <p class="card-text">
                          
                      </p>
                  <a href="#" class="btn btn-primary">Leer más</a>
                </div>
              </div>
            </div>

            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem; height:450px;">
                  <img src="imagenes/tienda.png" class="card-img-top" alt="...">
                <div class="card-body">
                      <h5 class="card-title">e-Comerce</h5>
                      <p class="card-text">
                          
                      </p>
                  <a href="#" class="btn btn-primary">Leer más</a>
                </div>
              </div>
            </div>

            <div class="col" style="margin-top: 50px;">
              <div class="card" style="width: 18rem; height:450px;">
                  <img src="imagenes/tienda.png" class="card-img-top" alt="...">
                <div class="card-body">
                      <h5 class="card-title">e-Comerce</h5>
                      <p class="card-text">
                          
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
                  <h2>Nuestro Equipo</h2>
                  <p><h4>Somos una agencia de Marketing Digital que trabaja dia a dia para la construcción e implementacion de soluciones </h4></p>
                </div>
                  
                <div class="col-md-6 avatars"  style="margin-bottom: 40px">
                  <img src="imagenes/andres.png">
                  <p style="width: 100%">Andrés Alemán</p>
                </div>      
                
                <div class="col-md-6 avatars  style="margin-bottom: 40px" ">
                  <img src="imagenes/sofia.png">
                  <p style="width: 100%">Sofia de los Rios</p>   
                </div>
          </div>
    </div>  

    <!-- COTIZAR -->
    <div class="container py-5" id="cotizar">
        <div class="row">
            <h1 class="text-center">Elije alguno de nuestros servicios para conocer un precio estimado</h1>
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
    </div>

    <!-- CONTACTANOS-->
    <div class="container-fluid contactanos"  id="contactanos">
      <div  class="row align-items-center" style="height:650px">

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
                  <form action="" method="POST" id="form" >
                      <div class="form-group">
                        <label for="usuario" class="col-form-label" >Usuario</label>
                        <input type="text" class="form-control" id="usuario" value="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Debe contener minimo 8 caracteres">
                      </div>
                      <button type="submit" class="btn btn-success">Enviar</button>
                      <p id="validacion"></p>
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