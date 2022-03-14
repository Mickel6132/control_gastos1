@extends('layouts.app')
@section('content')

<h2 class="bg-dark text-white">Vista de Categorias</h2>
<a href="{{route('categoria.create')}}" class="btn btn-primary">Nuevo</a>
<table class="table">
<th>#</th>
<th>Detalle</th>
@foreach($categorias as $cat)
<tr>

<td>{{$loop->iteration}}</td>
<td>{{$cat->cat_detalle}}</td>
<td>
<a href="{{route('categorias.edit',$cat->cat_id)}}">Editar</a>
<a href="">Eliminar</a>
</td>
</tr>
@endforeach
</table>

@endsection