@extends('layouts.plantilla')

@section('title','inicio')

@section('Contenido-Principal')
</script>
    <div class="container mt-5 formulario">
        <div class="row">
            <div class="col" id="map">
                <!--Logo-->
            </div>


            <div class="col">
                <h2 class="fw-bolt text-center py-5">Bienvenido</h2>

                <form action="{{route('iniciarSecion')}}" method="POST" >

                    @csrf


                    <div class="mb-4">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    
                    @error('message')
                        <p class="alert alert-danger" role="alert">* {{$message}}</p>
                    @enderror


                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" id="enviar">Iniciar Sesión</button>
                    </div>

                    <div class="my-3 text-center">
                        <span>¿No tienes una cuenta? <a href="{{route('crearCuenta')}}">Registrate</a></span>
                    </div>
                </form>
            </div>
        </div>


    </div>

    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALjQTgoFokHyZj7fo4EYQExbFmlC2jpJ8&callback=initMap"></script>
@endsection

@extends('layouts.Us')