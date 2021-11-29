<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Formulário</title>
</head>
<body>

    <form action="recebe_dados.php" method="POST">
        <h4>O que achou do site?</h4>
        <dl>
            <dd>
                <input type="radio" name="avaliacao" value="muitobom" checked>Muito Bom
                <input type="radio" name="avaliacao" value="bom">Bom
                <input type="radio" name="avaliacao" value="regular">Regular
                <input type="radio" name="avaliacao" value="umlixo">Um lixo
            </dd>
        </dl>
        <p><strong>Qual a seção que você mais gostou?</strong></p>
        <dl>
            <dd>
                <select name="secao" size="1">
                    <option value="emcartaz">Em Cartaz</option>
                    <option value="trilhassonora">Trilha Sonora</option>
                    <option value="fotos">Galeria de Fotos</option>
                    <option value="bilheteria">Bilheteria</option>
                    <option value="outra">Outra</option>
                </select>
                Outra: <input type="text" size="26" maxlength="256" name="outra">
            </dd>
        </dl>

        <p><strong>Digite sues comentários no espaço abaixo</strong></p>
        <dl>
            <dd>
                <textarea name="Comentarios" cols="42" rows="5"></textarea>
            </dd>
        </dl>

        <p><strong>Diga-nos como entrar em contato com você:</strong></p>
        <dl>
            <dd>
                <pre>
                    Nome <input type="text" size="35" maxlength="256" name="nome">
                    E-mail <input type="text" size="35" maxlength="256" name="email">
                    Fone <input type="text" size="35" maxlength="256" name="fone">
                    Fax <input type="text" size="35" maxlength="256" name="fax">
                </pre>
            </dd>
        </dl>

        <dl>
            <dd>
                <input type="checkbox" name="novidades" value="nov">
                Quero receber as novidades do site por email
            </dd>
        </dl>

        <p><input type="submit" value="Enviar Dados">
        <input type="reset" value="Limpar Formulário"></p>
    </form>
    
</body>
</html>