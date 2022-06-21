<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<div class="container">
    <form action="{{ route('LocalComercial.store') }}" method="POST">
        {{ csrf_field() }}
        <center>
            <h2>Registro Local Comercial</h2>
        </center>
        <div class="mb-3 mx-5 px-5">
            <label for="" class="form-label">Nombre del Local Comercial</label>
            <input type="text" class="form-control" name="razon_social">
        </div>


        <div class="mb-3 mx-5 px-5">
            tipo identificacion comercial
            <select class="form-control" name="id_tipo_identificacion_comercial">
                <option selected ="true" disabled="disabled"></option>
                @foreach ($tipo as $localcomercial)
                    <option value ="{{ $localcomercial->id_tipo_identificacion_comercial}}">
                        {{ $localcomercial->tipo_identificacion_comercial }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-3 mx-5 px-5">
            <label for="" class="form-label">Identificacion</label>
            <input type="text" class="form-control" name="identificacion_local_comercial">
        </div>
        <div class="mb-3  mx-5 px-5">
            <label for="" class="form-label">Direccion Local comercial</label>
            <input type="text" class="form-control" name="direccion_local_comercial">
        </div>
        <div class="mb-3  mx-5 px-5">
            <label for="" class="form-label">telefono fijo</label>
            <input type="number" class="form-control" name="telefono_fijo">
        </div>
        <div class="mb-3  mx-5 px-5">
            <label for="" class="form-label">Telefono Movil</label>
            <input type="number" class="form-control" name="telefono_movil">
        </div>
        <div class="mb-3  mx-5 px-5">
            <label for="" class="form-label">Correo electronico</label>
            <input type="text" class="form-control" name="email_local_comercial">
        </div>
        <div class="mb-3  mx-5 px-5">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="pass">
        </div>
        <center>
            <button type="submit" class="btn btn-primary " value="resgistrar">Registrar</button>
        </center>
        <br>
    </form>

</div>
