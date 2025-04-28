<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
    </head>
    <body>
        @if (!empty($sucesso))
            <h2>Registro cadastrado com sucesso!</h2>
        @endif
        <form method="post" action="{{ url('/cadastro/save') }}"  name="formCadastrar" >
            @csrf
            <label>Nome</label>
            <input name="nome" value="">
            <label>Sobrenome</label>
            <input name="sobrenome" value="" >
            <button type="submit" name="Cadastrar">Cadastrar</button>
        </form>

    </body>
</html>
