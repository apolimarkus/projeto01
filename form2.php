<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>

    
</head>
<body>

    <form action="recebe_dados.php" method="POST">
        <div>
            <p>Usuário: <input type="text" name="user" size="10">&nbsp; &nbsp; &nbsp; Senha: <input type="password" name="senha" size="10"></P>
            
        </div>

        <div>
            <p>Nome: <input type="text" name="nome" size="20"></p>
        </div>

        <div>
            <p>E-mail: <input type="email" name="email" size="20"></p>
        </div>

        <div>
            <p>Cidade: <input type="text" name="cidade" size="20">&nbsp; &nbsp; &nbsp; Estado: <input type="text" name="estado" size="2" maxlength="2"></p>
        </div>
        <div>
            <p><input type="submit" value="Enviar" name="enviar"></p>
        </div>
    </form>
    
</body>
</html>