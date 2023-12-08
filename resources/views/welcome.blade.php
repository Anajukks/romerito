
@extends('layout-copia.auth')

@section('titulo-documento')
Inicio
@endsection

@section('titulo-pagina')
@endsection

@section('conteudo')
<div class="container">
    <h1>Auth</h1>
        <a style="color:white;" href="{{url('login')}}">Login</a>
        <a style="color:white;" href="{{url('register')}}">Register</a>
    </div>
@endsection