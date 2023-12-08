@extends('layouts.app')

@section('conteudo')
    <div class="content">
        <h1>Tarefas</h1>
        @foreach($tarefas as $item)
        <p>{{$item->description}}</p>
        @endforeach


    </div>
@endsection