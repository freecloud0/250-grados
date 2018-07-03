@extends('componentes/navbar')

@section('content')


<div class="container08 mt-4 ">
        <img class="d-block w-100" src="img/reservas.jpg" alt="First slide">
</div>

<div class="container08 mt-4">
        <p class="color-p360 f-360 sise-t-25">CONTÁCTENOS</p>
        <p class=" f-360 sise-t-19 mn-t-01">INFORMACIÓN DE CONTACTO <span class="red-text sise-t-14">* Campos Obligatorio</span></p>
    <!-- Default form row -->
    <form class="mt-4">
        <!-- Grd row -->
        <div class="form-row">
            <!-- Grid column -->
            <div class="col-md-6">
                <!-- Default input -->
                <label class="f-360 sise-t-17">Apellidos y Nombres <span class="red-text sise-t-20">*</span></label>
                <input type="text" class="form-control mb-4" placeholder="First name">
                <label class="f-360 sise-t-17">Correo electónico <span class="red-text sise-t-20">*</span></label>
                <input type="text" class="form-control mb-4" placeholder="First name">
                <label class="f-360 sise-t-17">Direción <span class="red-text sise-t-20">*</span></label>
                <input type="text" class="form-control mb-4" placeholder="First name">
                
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-6">
                <!-- Default input -->
                <label class="f-360 sise-t-17">Teléfono <span class="red-text sise-t-20">*</span></label>
                <input type="text" class="form-control mb-4" placeholder="Last name">
                <label class="f-360 sise-t-17">Empresa</label>
                <input type="text" class="form-control mb-4" placeholder="First name">
                <label class="f-360 sise-t-17">Servicio Requerido <span class="red-text sise-t-20">*</span></label>
                <input type="text" class="form-control mb-4" placeholder="First name">
            </div>
            <!-- Grid column -->
            
            <!-- Default textarea -->
            
        </div>
        <div class="form-group">
                <label class="f-360 sise-t-17">Comentario <span class="red-text sise-t-20">*</span></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>
        <li class=" l-none text-center pl-4 pr-4 ">
                <a class="nav-link red redondear white-text border" href="#"><span class="sise-t-15 m-4 f-360"><i class="fas fa-sign-out-alt"></i> Enviar </span></a>
        </li>
        <!-- Grd row -->
    </form>
    <!-- Default form row -->

  

</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62430.86002698645!2d-75.23765868258806!3d-12.04842317370424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e964104fb82f1%3A0xf8e45b61c55982fa!2sHuancayo!5e0!3m2!1ses!2spe!4v1529301784176" width="100%" height="450" frameborder="0" class="mt-4" style="border:0" allowfullscreen></iframe>






@endsection