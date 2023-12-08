@extends("layouts.guest")

@section('form')
<h1>Cadastro</h1>
<form action="{{url('/register')}}" method="POST">
    @csrf
    <label for="email">email</label>
    <input type="text" name="email">
    <label for="name">Nome</label>
    <input type="text" name="name">
    <label for="password">Senha</label>
    <input type="password" name="password" id="password">
    <label for="password">Confirmação de senha</label>
    <input type="password" name="password_confirmation" > 
    <button>Enviar</button>
</form>
@endsection