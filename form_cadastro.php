<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <h1>Formulário de Inscrição do Aluno</h1>

    <form action="">
        <fieldset>
            <legend>DADOS PESSOAIS</legend>
                <label>Nome: <input type="text" name="nome">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data de Nascimento: <input type="date" name="dtn">
                </label><br><br>
            <label>Sexo:
                <select name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </label><br><br>
            <label>CPF: <input type="text" name="cpf">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RG: <input type="text" name="rg"></label><br><br>
            <label>Telefone: <input type="tel" name="telefone"></label>
            <label>E-mail: <input type="email" name="email"></label><br><br>
        </fieldset><br>
        
        <fieldset>
            <legend>
                ENDEREÇO DO ALUNO
            </legend>
                <label>Endereço: <input type="text" name="endereco"></label>
                <label>Cidade: 
                    <select name="ciddade">
                        <option value="opcao1">Selecione sua Cidade</option>
                        <option value="opcao2">Barra do Corda</option>
                        <option value="opcao3">Grajaú</option>
                        <option value="opcao4">Presidente Dutra</option>
                        <option value="opcao5">Sítio Novo</option>
                        <option value="opcao6">Zé Doca</option>
                    </select>
                </label>
                <label>Estado: 
                    <select name="estado">
                        <option value="estado">Selecione seu Estado</option>
                        <option value="al">Alagoas</option>
                        <option value="ce">Ceará</option>
                        <option value="ba">Bahia</option>
                        <option value="ma">Maranhão</option>
                        <option value="pa">Pará</option>
                        <option value="sp">São Paulo</option>
                        <option value="to">Tocantins</option>
                        
                    </select>
                </label>

        </fieldset><br>

        <fieldset>
            <legend>DADOS DA ESCOLA</legend>
            <label>Escola: <input type="text" name="escola" maxlength="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Código INEP: <input type="text"></label><br><br>
            <label>Nível de Ensino:
                <select name="ensino">
                    <option value="edi">Educação Infanti</option>
                    <option value="efm">Ensino Fundamental 1º ao 5º Ano</option>
                    <option value="efma">Ensino Fundamental 6º ao 9º Ano</option>
                    <option value="em">Ensino Médio</option>
                </select>
            </label><br><br>
            <label>Turno: <input type="checkbox">Matutino &nbsp; <input type="checkbox"> Vespertino &nbsp; <input type="checkbox"> Noturno</label>
        </fieldset><br>

        <fieldset>
            <legend>ENDEREÇO DA ESCOLA</legend>
            <label>Logradouro: <input type="text" name="end-escola"></label>
            <label>Telefone: <input type="tel" name="tel-escola"></label>
            <label>E-mail: <input type="email" name="email-escola"></label>
            <label>Cidade: <input type="text" name="city-escola">&nbsp;&nbsp;&nbsp; Estado: <input type="text" name="etd-escola"></label>
        </fieldset>
        <p>
           <input type="button" value="FINALIZAR">
        </p>
        
    </form>
</body>
</html>