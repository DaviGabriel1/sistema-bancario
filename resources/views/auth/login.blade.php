@extends('home')

@section('conteudo')
<form action="{{route('auth.loginPost')}}" method="POST">
    @csrf<!--TODO: validações, sweetalerts e páginas de erro -->
    <div class="form-content">
        <label for="email">E-mail: </label>
        <input type="text" placeholder="digite o seu email..." name="email" required>
    </div>
    <div class="form-content">
        <label for="password">Senha: </label>
        <input type="password" placeholder="digite a sua senha..." name="password" required>
    </div>
    <div class="form-content">
        <input type="checkbox" name="lembrar_senha">
        <label for="lembra_senha">Lembre me</label>
    </div>
    <a href="/user/esqueci-senha">esqueci a senha</a> <br>
    <input type="submit" value="Entrar">
</form>
@endsection