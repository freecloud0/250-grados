@extends('componentes/navbar')

@section('content')


<div class="container mt-4 ">
        <div class="container03 redondear">
            <p class="text-center f-360 white-text">REGÍSTRATE</p>
        </div>
</div>

<div class="container mt-4">
        <p class="color-p360 f-360 sise-t-25">CREAR CUENTA</p>
        <p class=" f-360 sise-t-19 mn-t-01">INFORMACIÓN DE CONTACTO <span class="red-text sise-t-14">* Campos Obligatorio</span></p>
    <!-- Default form row -->
    <form class="mt-4">
        <!-- Grd row -->
        <div class="form-row">
            <!-- Grid column -->
            <div class="col-md-6 p-4">
                <!-- Default input -->
                <label class="f-360 sise-t-17 color-rg">Apellidos <span class="red-text sise-t-20">*</span></label>
                <input type="text" class="form-control mb-4" placeholder="First name">
                <label class="f-360 sise-t-17 color-rg">Nombres <span class="red-text sise-t-20">*</span></label>
                <input type="text" class="form-control mb-4" placeholder="Last name">
                <label class="f-360 sise-t-17 color-rg">Correo Electrónico <span class="red-text sise-t-20">*</span></label>
                <input type="text" class="form-control mb-4" placeholder="First name">
                <label class="f-360 sise-t-17 color-rg">Dni <span class="red-text sise-t-20">*</span></label>
                <input type="text" class="form-control mb-4" placeholder="First name">
                
                
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-6 p-4">
                <!-- Default input -->
                <p class=" f-360 sise-t-19  color-rg">INFORMACIÓN DE INICIO DE SESION </p>
                <label class="f-360 sise-t-17 color-rg">Nombre de usuario <span class="red-text sise-t-20">*</span></label>
                <input type="text" class="form-control mb-4" placeholder="First name">
                <label class="f-360 sise-t-17 color-rg">Contraseña <span class="red-text sise-t-20">*</span></label>
                <input type="password" class="form-control mb-4" id="inputPassword4" placeholder="Password">
                <li class=" l-none text-center">
                        <a class="nav-link red redondear white-text border" href="#"><span class="sise-t-15 m-4 f-360"><i class="fas fa-sign-out-alt"></i> Enviar </span></a>
                </li>
                <p class=" f-360 sise-t-19  text-center">ó registrate con:</p>
                <li class=" l-none text-center">
                        <a class="nav-link blue redondear white-text border" href="#"><span class="sise-t-15 m-4 f-360"><i class="fab fa-facebook mr-2"></i>Facebook</span></a>
                </li>
            </div>
            <!-- Grid column -->
            
            <!-- Default textarea -->
            
        </div>
       
        
        <!-- Grd row -->
    </form>
    <!-- Default form row -->

  

</div>
@endsection