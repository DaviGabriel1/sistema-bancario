@extends('home')

@section('conteudo')
<form action="{{route('user.store')}}" method="POST">
    @csrf
    <div class="form-content"> <!--TODO: validações, sweetalerts e páginas de erro -->
        <label for="name">Nome: </label>
        <input type="text" placeholder="digite o seu nome..." name="name" required>
    </div>
    <div class="form-content">
        <label for="email">E-mail: </label>
        <input type="text" placeholder="digite o seu email..." name="email" required>
    </div>
    <div class="form-content">
        <label for="password">Senha: </label>
        <input type="password" placeholder="digite a sua senha..." name="password" required>
    </div>
    <div class="form-content">
        <label for="confirm-senha">Confirmação de senha: </label>
        <input type="password" placeholder="digite a sua confirmação de senha..." name="confirm-senha" required>
    </div>
    <input type="submit" value="Cadastrar">
</form>
@endsection