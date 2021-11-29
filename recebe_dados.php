<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Usuario</title>
</head>
<body>
    <?php
        $user = $_POST["user"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];

        $erro = 0;

        if(strlen($user) < 5){
            echo "O nome de usuário deve possuir no mínimo 5 caracteres. <br>";
            $erro = 1;
        }
        if(strlen($senha) < 6){
            echo "A senha deve possuir no mínimo 6 caracteres. <br>";
            $erro = 1;

        }
        if($user == $senha){
            echo "Usuário e senha dever ser diferentes.<br>";
            $erro = 1;
        }
        if(empty($nome) OR strstr($nome, ' ') == FALSE){
            echo "Por favor digite seu nome corretamente.<br>";
            $erro = 1;
        }
        if(strlen($email) < 8 || strstr($email, '@') == FALSE){
            echo "Digite seu email corretamente.<br>";
            $erro = 1;
        }
        if(empty($cidade)){
            echo "Preencha o campo com a sua cidade.<br>";
            $erro = 1;
        }
        if(strlen($estado) != 2){
            echo "Preencha o campo de seu estado.";
            $erro = 1;
        }

        #Verifica se não houve erro
        if($erro == 0){
            echo "Todos os dados foram digitados corretamente!";
        }
    
    
    ?>
    
</body>
</html>