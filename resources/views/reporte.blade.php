@extends('layout.menu')
  @section('content')
  
  <br>
    
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Imagen</th>
      <th scope="col">Pokémon</th>
      <th scope="col">Tipo</th>
      <th scope="col">Daño</th>
    </tr>
  </thead>
  <tbody>
    @foreach($consulta as $p)
    <tr class="table-active">
      <th scope="row"><img src="{{asset('img/'. $p->img)}}" heigth="80px" width="80px"></th>
      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$p->nombre}}</font></font></td>
      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$p->tipo}}</font></font></td>
      <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$p->dano}}</font></font></td>
      <td>.</td>
    </tr>
    @endforeach
</tbody>
</table>
@stop