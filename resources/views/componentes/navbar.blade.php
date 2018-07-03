<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/mdb.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="css/general.css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
</head>
<body class="body-d-01">
  <div class="text-right ">
      <a class="fb-ic">
          <i class="fab fa-facebook-f mr-4 sise-t-19 color-p360-t"></i>
        </a>

        <a class="tw-ic">
          <i class="fab fa-twitter mr-4 sise-t-19 color-p360-t"></i>
        </a>

        <a class="gplus-ic"> 
          <i class="fab fa-youtube mr-4 sise-t-19 color-p360-t"></i>
        </a>

        <a class="li-ic">
          <i class="fab fa-instagram mr-4 sise-t-19 color-p360-t"></i>
        </a>

        <a href="" class="btn bg-p360 btn-rounded  b-01" id="btn-hov" data-toggle="modal" data-target="#modalRegisterForm" >Iniciar Sesión</a>
   
</div>
    <div class="modal fade " id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content ">
                  <div class="modal-header text-center bg-p360 white-text ">
                      <h4 class="modal-title w-100 font-weight-bold">Iniciar Sesión</h4>
                      <button type="button" class="close white-text " data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  
                  <div class="modal-body mx-3">
                      <div class="md-form mb-5">
                            <i class="far fa-envelope prefix grey-text"></i>
                          <input type="email" id="orangeForm-email" class="form-control validate">
                          <label data-error="wrong" data-success="right" for="orangeForm-email">Correo Electrónico</label>
                      </div>
          
                      <div class="md-form mb-4">
                          <i class="fa fa-lock prefix grey-text"></i>
                          <input type="password" id="orangeForm-pass" class="form-control validate">
                          <label data-error="wrong" data-success="right" for="orangeForm-pass">Contraseña</label>
                      </div>
      
                  </div>
                  <div class=" text-center mb-4">
                      <button class="btn bg-p360"><i class="fab fa-telegram-plane mr-2"></i>Enviar</button>
                  </div>
                  
              </div>
          </div>
    </div>
    <div class="modal fade " id="modalSus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header text-center red white-text ">
                        <h4 class="modal-title w-100 font-weight-bold">SUSCRIBIRSE</h4>
                        <button type="button" class="close white-text " data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="far fa-envelope prefix grey-text"></i>
                            <input type="email" id="orangeForm-email" class="form-control validate">
                            <label data-error="Incorrecto" data-success="Correcto" for="orangeForm-email">Correo Electrónico</label>
                        </div>
                        <li class=" l-none text-center">
                                <a class="nav-link red redondear white-text border" href="#"><span class="sise-t-15 m-4 f-360"><i class="fas fa-sign-out-alt"></i> Enviar </span></a>
                        </li>
                        <p class=" f-360 sise-t-19  text-center">ó suscribirse con:</p>
                        <li class=" l-none text-center">
                                <a class="nav-link blue redondear white-text border" href="#"><span class="sise-t-15 m-4 f-360"><i class="fab fa-facebook mr-2"></i>Facebook</span></a>
                        </li>
                        
        
                    </div>
                  
                </div>
            </div>
    </div>


    <ul class="nav justify-content-center bg-p360-inicio lighten-4 py-1">
        <li class="nav-item">
            <a class="nav-link f-360-l  color-p360-t" id="menu-top" href="{{ url('trabajo') }}"><i class="fas fa-child mr-2"></i>Trabaja con nosotros </a> 
        </li>
        <div class="lineav-01 visiblew"></div>
        <li class="nav-item visiblew">
            <a class="nav-link f-360-l color-p360-t" id="menu-top" data-toggle="modal" data-target="#modalSus"><i class="fas fa-address-card mr-2"></i>Suscríbete</a>
        </li>

        <div class="lineav-01 visiblew"></div>
        <li class="nav-item visiblew">
            <a class="nav-link f-360-l color-p360-t" id="menu-top" href="{{ url('nutricion') }}"><i class="fas fa-seedling mr-2"></i>Guia Nutricional</a>
        </li>
    </ul>
    

<!-- Modal -->
<div class="modal fade" id="modalReserva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="color-p360 f-360 sise-t-25">RESERVA <span class=" black-text sise-t-20">del Local</span> </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> Cerrar
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container08 mn-t-01">
                    <div class="row">
                            <div class="col-md-4 sm-02 p-2 ">
                                <div class="view overlay zoom">
                                    <img src="img/reserva-01.jpg" alt="placeholder" class="ima-pollo p-2 bg-p360">
                                    <div class="mask flex-center rgba-black-strong ">
                                            <li class=" l-none text-center pl-4 pr-4 ">
                                                    <a class="nav-link  redondear white-text border" id="mask-me" href="{{ url('reserva') }}"><span class="sise-t-17 m-4 f-360"> Reservar</span></a>
                                            </li>
                                        
                                    </div>
                                </div> 
                                <p class="color-p360 f-360 sise-t-20 text-center">Reserva <span class=" black-text sise-t-20">del Local</span> </p> 
                            </div>
                            <div class="col-md-4 sm-02 p-2">
                                <div class="view overlay zoom">
                                    <img src="img/reserva-03.jpg" alt="placeholder" class="ima-pollo p-2 bg-p360">
                                        <div class="mask flex-center rgba-black-strong ">
                                            <li class=" l-none text-center pl-4 pr-4 ">
                                            <a class="nav-link  redondear white-text border" id="mask-me" href="{{ url('reserva') }}"><span class="sise-t-17 m-4 f-360"> Reservar</span></a>
                                        </li>
                                                
                                    </div>
                                </div>
                                <p class="color-p360 f-360 sise-t-20 text-center">Fiesta <span class=" black-text sise-t-20">infantil</span> </p>
                            </div>
                            <div class="col-md-4 sm-02 p-2">
                                    <div class="view overlay zoom">
                                        <img src="img/reserva-02.jpg" alt="placeholder" class="ima-pollo p-2 bg-p360">
                                            <div class="mask flex-center rgba-black-strong ">
                                                <li class=" l-none text-center pl-4 pr-4 ">
                                                <a class="nav-link  redondear white-text border" id="mask-me" href="{{ url('reserva') }}"><span class="sise-t-17 m-4 f-360"> Reservar</span></a>
                                            </li>
                                                    
                                        </div>
                                    </div>
                                    <p class="color-p360 f-360 sise-t-20 text-center">Vales<span class=" black-text sise-t-20">corporativos</span> </p>
                            </div>

                    </div>
                </div>
                <div class="container-comu bg-p360  ">
                    <div class="container08">
                        <div class="row">
                            <div class="col-md-6 bg-p360-nav">
                                <ul class="list-unstyled text-center ">
                                        <li class="f-360 color-p360-titulo sise-t-18  pl-4 ">DELIVERY</li>
                                        <hr class="red mt-0  mb-0 " style="width: 60px; height:2px">
                                        <li class="b-01 ml-2 sise-t-25 f-360  mt-0 black-text"><i class="fa fa-phone mr-2 "></i>Lima 611-500</li>
                                        <li class="f-360 color-p360-titulo sise-t-18  pl-4 ">RESERVAS</li>
                                        <hr class="red mt-0  mb-0" style="width: 60px; height:2px">
                                        <li class="b-01 ml-2 sise-t-25 f-360 black-text "><i class="fa fa-phone mr-2"></i>611-500 OPCION 3</li>
                                </ul> 
                            </div>
                            <div class="col-md-6 mt-4 encargo  black-text">
                                    <ul class="list-unstyled text-center">
                                            <li class="f-360 sise-t-17  pl-4">Horario de Atención DELIVERY: 12:00 PM a 10:30 PM</li>
                                            <li class="f-360  sise-t-17  pl-4">Horario de Atención de los LOCALES: 12:00 PM a 11:00 PM</li>
                                    </ul> 
                                    <li class=" l-none text-center pl-2 pr-2 ">
                                            <a class="nav-link bg-p360-b redondear white-text border" href="#"><span class="sise-t-15 m-4 f-360"><i class="fas fa-truck mr-4 "></i> ORDENE AQUI</span></a>
                                    </li>
                            </div>
                           
                        </div>
                           
                    </div>
                    
                </div> 
            </div>

        </div>
    </div>
</div>
 



        <a href="{{ url('/') }}">
            <div  style="left: 40px; width: 139px; position: absolute; top: 10px; z-index: 1200;" class="visiblew animated fadeInDown txtNew " >
                <img class="d-block ima-logo border-01 white redondear" src="img/pollo-logo.jpg">     
            </div>
        </a>
        
        
        <nav class="navbar navbar-expand-lg bg-p360 white-text  ">
            
          <div class="container10">

              

            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars white-text"></i>
            </button>

            <a href="{{ url('/') }}">
                <div  style="right:0px; position: absolute; top: -20px; z-index: 1200;" class="visibler animated fadeInDown txtNew " >
                    <img class="d-block ima-logo  white redondear" src="img/pollo-logo.jpg">     
                </div>
            </a>

            <div class="collapse navbar-collapse container08" id="navbarResponsive">
                
              <ul class="navbar-nav ml-auto m-1 mt-2 mb-2">
                   
                    <li class="nav-item active bg-p360-nav">   
                       <a class="nav-link " href="{{ url('/') }}"><span class="sise-t-17 m-2 f-360-l white-text"><i class="fas fa-home mr-2"></i> INICIO</span>
                        </a>
                    </li>    
                    <li class="nav-item dropdown ">
                      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sise-t-17 m-2 f-360-l white-text"><i class="fas fa-clipboard-list mr-2"></i> CARTA</span></a>
                      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{ url('carta') }}"><span class="sise-t-17 m-2 f-360-l black-text"><i class="fas fa-utensils mr-2"></i> Pollo a la Brasa</span></a>
                          <a class="dropdown-item" href="{{ url('carta') }}"><span class="sise-t-17 m-2 f-360-l black-text"><i class="fas fa-utensils mr-2"></i> Parrilla</span></a>
                          <a class="dropdown-item" href="{{ url('carta') }}"><span class="sise-t-17 m-2 f-360-l black-text"><i class="fas fa-glass-martini mr-2"></i> Bebidas</span></a>
                      </div>
                  </li>
                    <li class="nav-item  ">
                      <a class="nav-link" data-toggle="modal" data-target="#modalReserva"><span class="sise-t-17 m-2 f-360-l white-text"><i class="far fa-edit mr-2"></i> RESERVA</span></a>
                    </li>
                    <li class="nav-item  ">
                      <a class="nav-link" href="{{ url('nosotros') }}"><span class="sise-t-17 m-2 f-360-l white-text"><i class="fas fa-users mr-2"></i> NOSOTROS</span></a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link  " href="{{ url('contactanos') }}"><span class="sise-t-17 m-2 f-360-l white-text"><i class="fas fa-user-tie mr-2"></i> CONTÁCTANOS</span></a>
                    </li>
                    
                </ul>
                 
              
            </div>
            
          </div>

        </nav>
        <div class="container-f"></div>
   <!-- contenido -->     
   @yield('content')
    <!-- fin de contenido -->   
          
</body>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark mt-4">

        <div class="red">
          <div class="container">
      
            <!-- Grid row-->
            <div class="row py-2 d-flex align-items-center">
      
              <!-- Grid column -->
              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <h6 class="mb-0">¡Conéctese con nosotros en las redes sociales!</h6>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-6 col-lg-7 text-center text-md-right">
      

                <a class="fb-ic">
                  <i class="fab fa-facebook-f mr-4"></i>
                </a>

                <a class="tw-ic">
                  <i class="fab fa-twitter mr-4"></i>
                </a>

                <a class="gplus-ic">
                  <i class="fab fa-youtube mr-4"></i>
                </a>

                <a class="li-ic">
                  <i class="fab fa-instagram mr-4"></i>
                </a>
      
              </div>
              <!-- Grid column -->
      
            </div>
            <!-- Grid row-->
      
          </div>
        </div>
      
        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">
      
          <!-- Grid row -->
          <div class="row mt-3">
      
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
      
              <!-- Content -->
              <h6 class="text-uppercase font-weight-bold">250 GRADOS</h6>
              <hr class="red accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p> Tengamos cuidado con las cantidades de pollo que se consumen, pues, el pollo que se debe servir siempre tiene que ser del día, no de ayer no de antes de ayer.</p>
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
      
              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">Productoss</h6>
              <hr class="red accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a href="#!">POLLOS A LA BRASA</a>
              </p>
              <p>
                <a href="#!">POLLOS A LA PARRILLA</a>
              </p>
              <p>
                <a href="#!">ASADOS</a>
              </p>
              <p>
                <a href="#!">BEBIDAS</a>
              </p>
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
      
              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">Enlaces Útiles</h6>
              <hr class="red accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a href="#!">Su cuenta</a>
              </p>
              <p>
                <a href="#!">Conviértase en un Afiliado</a>
              </p>
              <p>
                <a href="#!">Trabaje con nosotros</a>
              </p>
              <p>
                <a href="#!">Ayuda</a>
              </p>
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
      
              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">Contácteno</h6>
              <hr class="red accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <i class="fa fa-home mr-3"></i> Lima, N° 1122, Metropolitano</p>
              <p>
                <i class="fa fa-envelope mr-3"></i> docientos_50_grados@gmail.com</p>
              <p>
                <i class="fa fa-phone mr-3"></i>  934 567 88</p>
              <p>
                <i class="fa fa-print mr-3"></i>  934 550 11</p>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 ">© 2018 Copyright:
          <a href="https://www.facebook.com/freecloud.pe/" class="blue-text"><i class="fas fa-cloud ml-4 mr-2 "></i> FreeCloud.com</a>
        </div>
        <!-- Copyright -->
      
</footer>
      <!-- Footer -->

</html>

<script src="js/jquery-3.2.1.min.js">

</script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/mdb.js"></script>
<!--     conten    
<script>

    $("#hn").click(function () {
        $("#zhifubaoDiv").toggle()
        // $("#").show();   
    });

 <a class="menu_jyclass" id="hn" >arriba</a>
        
      
      <div id="zhifubaoDiv"  style="display: none;">1111111111111</div>


</script>-->
 
<script>
        new WOW().init();   
        $('#yourElement').addClass('animated fadeInLeft infinite');
        $('#yourElement').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
        
 </script>

 

<!-- -Carosuel fullpantalla- -->

