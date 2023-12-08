@extends("layouts.guest")

@section('form')
<h1>Login</h1>
<form action="{{url('/login')}}" method="POST">
    @csrf
    <label for="email">email</label>
    <input type="text" name="email">
    <label for="password">Senha</label>
    <input type="password" name="password" id="password">
    <button>Enviar</button>
</form>
@endsection