@extends('layouts.app')

@section('conteudo')

<h1>Cadastro de Tarefas</h1>
<form action="{{route('tasks.store')}}" method="POST">
    @csrf
    <label for="description">Descrição</label>
    <input type="text" name="description" value="{{old('description')}}">
    <button>Enviar</button>
    @error('description')
    <span style="color: red; font-weight:bold">
        {{$message}}
    </span>
    @enderror
</form>
@endsection