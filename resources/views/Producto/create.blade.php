@extends('Template.Template')
@section('plantillaweb')


<div class="container">
<form action="{{route('Producto.store')}}" method="POST">
    {{ csrf_field() }}
    <center><h2>Registro Productos</h2></center>
    <div class="mb-3 mx-5 px-5">
      <label for="" class="form-label">Nombre del producto</label>
      <input type="text" class="form-control" id="nombre_producto">
    </div>
    <div class="mb-3 mx-5 px-5">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion_producto">
    </div>
    <div class="mb-3  mx-5 px-5">
        <label for="" class="form-label">Historia del Producto</label>
        <input type="text" class="form-control" id="historia_producto">
    </div>
    <div class="mb-3  mx-5 px-5">
        <label for="" class="form-label">Imagen</label>
        <input  type="file" max="2" class="form-control" id="imagen_producto">
    </div>
    <div class="mb-3  mx-5 px-5">
        <label for="" class="form-label">Fecha de producci&oacute;n</label>
        <input type="text" class="form-control" id="fecha_produccion">
    </div>
    <div class="mb-3  mx-5 px-5">
        <label for="" class="form-label">fecha de vencimiento</label>
        <input type="text" class="form-control" id="fecha_vencimiento">
    </div>
    <div class="mb-3  mx-5 px-5">
        <label for="" class="form-label">Estado Producto</label>
        <select class="form-select" name="estado_producto" id="estado_producto" >
            <option value="activo">ACTIVO</option>
            <option value="inactivo">INACTIVO</option>
    </div>
   <br>
  </form>

</div>

@endsection

