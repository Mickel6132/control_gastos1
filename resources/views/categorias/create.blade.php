@extends('layouts.app')
@section('content')
<h1 class="bg-dark text-white">Formulario de categorias</h1>
<form action="{{route('categoria.store')}}" method="POST">
    @csrf
 <label for="">Detalle de categoria</label>
 <input type="text" name="cat_detalle" id="cat_detalle">
 <button type="submit" class="btn btn-success">Guardar</button>


</form>
@endsection