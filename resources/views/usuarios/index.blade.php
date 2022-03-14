@extends('layouts.app')
@section('content')
<h2 class="bg-dark text-white">Lista de usuarios</h2>
<a href="{{route('usuario.create')}}" class="btn btn-primary">Nuevo</a>
<table class="table">

<th>#</th>
<th>Nombre</th>
<th>Cedula</th>

@foreach($users as $u)
<tr>

<td>{{$loop->iteration}}</td>
<td>{{$u->usu_nombre}}</td>
<td>{{$u->usu_ruc}}</td>

</tr>
@endforeach
</table>
@endsection