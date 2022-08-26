@extends('layout.menu')
  @section('content')


    <br>
    <center><img src="img/portada.png" alt="">
    <p>Encuentra tus Pokemones favoritos</p>
    </center>

    <center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Añadir Pokemones
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Pokemones</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="{{route('alta')}}" method="post" enctype="multipart/form-data">
       {{csrf_field()}}
       <div class="form-group">
      <label for="formFile" class="form-label mt-4">Añade la imagen del Pokemon</label>
      <input class="form-control" type="file" name="img" id="formFile">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Nombre del Pokémon</label>
      <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribelo aqui">
      <small id="emailHelp" class="form-text text-muted">No olvides verificar si el nombre es correcto.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Tipo de Pokemon</label>
      <input type="text" name="tipo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribelo aqui">
      <small id="emailHelp" class="form-text text-muted">No olvides escribir el tipo de Pokemon.</small>
    </div>
    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Daño del Pokemon</label>
      <select class="form-select" id="exampleSelect1" name="dano">
        <option >Seleccione una opción</option>
        <option value="100%">100%</option>
        <option value="150%">150%</option>
        <option value="200%">200%</option>
        <option value="250%">250%</option>
        <option value="300%">300%</option>
      </select>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <input class="btn btn-success" type="submit" value="Guardar">
      </div>
    </div>
  </div>
</div>
</form>
<a href=""><button type="button" class="btn btn-outline-secondary">Mostrar Pokémon</button></a>
<a href="{{route('reporte')}}"><button type="button" class="btn btn-outline-warning">Mostrar Pokémones Guardados </button></a>
    </center>
    <br>
    <center>
    <fieldset>
    <legend><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pokémon</font></font></legend>
    <div class="form-group">
      @foreach($con as $c)
      <p><img src="{{asset('img/'. $c->img)}}" heigth="80px" width="80px"></p>
    <p>Nombre:&nbsp;&nbsp;{{$c->nombre}}</p>
    <p>Tipo:&nbsp;&nbsp;{{$c->tipo}}</p>
    <p>Porcentaje de Daño:&nbsp;&nbsp;{{$c->dano}}</p>
    </div>
    @endforeach
  </fieldset>
    </center>

    
@stop