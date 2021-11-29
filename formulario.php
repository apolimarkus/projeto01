<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!--tags são os comandos em HTML-->
    <h1>Meu primeiro Formulário</h1>
    <hr>
    
    <form action="#">
        Nome: <input type="text" required><br><br>
        Idade: <input type="number" required><br><br>
        Data de Inscriçã: <input type="date"><br><br>
        Email: <input type="email" required><br><br>
        
        <h4>Cursos</h4>
        <select>
            <option>Excel</option>
            <option>Programador Web</option>
            <option>Banco de Dados</option>
        </select><br><br>
        <input type="submit" value="Cadastrar Curso">
    </form>
</body>
</html>