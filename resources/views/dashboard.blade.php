@extends('layouts.app')

@section('conteudo')

@auth
    <h1>Bem vindo, {{Auth::user()->name}}</h1>
@endauth

<form action="{{url('/logout')}}" method="post">
    @csrf
    <button>Sair</button>
</form>

@endsection