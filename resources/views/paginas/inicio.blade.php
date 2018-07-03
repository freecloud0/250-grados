
@extends('componentes/navbar')

@section('content')

<!--Carousel Wrapper-->
<div class="visiblew"><br></div>
<div id="carousel-example-2" class="container09-p carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators--> 

    <!--/.Indicators-->
    <div class="mt-2 visibler"></div>
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active ">
            <div class="view redondear">
                <img class="d-block w-100-p " src="img/poll-01.jpeg" alt="First slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
               
            </div>
        </div>
        <div class="carousel-item ">
            <!--Mask color-->
            <div class="view redondear">
                <img class="d-block w-100-p" src="img/poll-02.jpeg" alt="Second slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                
            </div>
        </div>
        <div class="carousel-item ">
            <!--Mask color-->
            <div class="view redondear">
                <img class="d-block w-100-p" src="img/poll-03.jpeg" alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <div class="po-ca-01 visiblew">
        <ol class="carousel-indicators bg-otros redondear m-4">
            <li data-target="#carousel-example-2 " data-slide-to="0" class="active "></li>
            <li data-target="#carousel-example-2" data-slide-to="1" class=" "></li>
            <li data-target="#carousel-example-2" data-slide-to="2" class=" "></li>
        </ol>
    </div>
    <a class="carousel-control-prev " href="#carousel-example-2" role="button" data-slide="prev">
        <i class="fas fa-angle-left sise-t-50 mt-4"></i>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <i class="fas fa-angle-right sise-t-50 mt-4"></i>
      </a>
    
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<div class="container08 mt-2">
            

</div>
            
        <br class="visiblew">
        <div class="container-f"></div>
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
                            <li class=" l-none text-center pl-4 pr-4 ">
                                    <a class="nav-link bg-p360-b redondear white-text border" id="btn-ordene" href="#"><span class="sise-t-17 m-4 f-360"><i class="fas fa-truck mr-4 fa-2x" id="yourElement"></i> ORDENE AQUI</span></a>
                            </li>
                    </div>
                   
                </div>
                   
            </div>
            
        </div>    

        <div class="container08 mt-2">
                <div class="row">
                        <div class="col-md-4 sm-02 p-2 ">
                            <div class="view overlay zoom">
                                <img src="img/carta-01.jpeg" alt="placeholder" class="ima-pollo p-2 bg-p360">
                                <div class="mask flex-center rgba-black-strong ">
                                        <li class=" l-none text-center pl-4 pr-4 ">
                                                <a class="nav-link  redondear white-text border" id="mask-me" href="#"><span class="sise-t-17 m-4 f-360"><i class="fas fa-utensils mr-4 fa-2x"></i> ORDENE AQUI</span></a>
                                        </li>
                                    
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-4 sm-02 p-2">
                            <div class="view overlay zoom">
                                <img src="img/carta-02.jpeg" alt="placeholder" class="ima-pollo p-2 bg-p360">
                                    <div class="mask flex-center rgba-black-strong ">
                                        <li class=" l-none text-center pl-4 pr-4 ">
                                        <a class="nav-link  redondear white-text border" id="mask-me" href="#"><span class="sise-t-17 m-4 f-360"><i class="fas fa-utensils mr-4 fa-2x"></i> ORDENE AQUI</span></a>
                                    </li>
                                            
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 sm-02 p-2">
                                <div class="view overlay zoom">
                                    <img src="img/carta-03.jpeg" alt="placeholder" class="ima-pollo p-2 bg-p360">
                                        <div class="mask flex-center rgba-black-strong ">
                                            <li class=" l-none text-center pl-4 pr-4 ">
                                            <a class="nav-link  redondear white-text border" id="mask-me" href="#"><span class="sise-t-17 m-4 f-360"><i class="fas fa-utensils mr-4 fa-2x"></i> ORDENE AQUI</span></a>
                                        </li>
                                                
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4 sm-02 p-2">
                                <div class="view overlay zoom">
                                    <img src="img/carta-04.png" alt="placeholder" class="ima-pollo p-2 bg-p360">
                                        <div class="mask flex-center rgba-black-strong ">
                                            <li class=" l-none text-center pl-4 pr-4 ">
                                            <a class="nav-link  redondear white-text border" id="mask-me" href="#"><span class="sise-t-17 m-4 f-360"><i class="fas fa-utensils mr-4 fa-2x"></i> ORDENE AQUI</span></a>
                                        </li>
                                                
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4 sm-02 p-2">
                                <div class="view overlay zoom">
                                    <img src="img/carta-02.jpeg" alt="placeholder" class="ima-pollo p-2 bg-p360">
                                        <div class="mask flex-center rgba-black-strong ">
                                            <li class=" l-none text-center pl-4 pr-4 ">
                                            <a class="nav-link  redondear white-text border" id="mask-me" href="#"><span class="sise-t-17 m-4 f-360"><i class="fas fa-utensils mr-4 fa-2x"></i> ORDENE AQUI</span></a>
                                        </li>
                                                
                                    </div>
                                </div>
                        </div>

                        <div class="col-md-4 sm-02 p-2 ">
                                <div class="view overlay zoom">
                                        <img src="img/carta-01.jpeg" alt="placeholder" class="ima-pollo p-2 bg-p360">
                                            <div class="mask flex-center rgba-black-strong ">
                                                <li class=" l-none text-center pl-4 pr-4 ">
                                                <a class="nav-link  redondear white-text border" id="mask-me" href="#"><span class="sise-t-17 m-4 f-360"><i class="fas fa-utensils mr-4 fa-2x"></i> ORDENE AQUI</span></a>
                                            </li>
                                                    
                                        </div>
                                </div>
                                
                        </div>

                </div>
        </div>


@endsection