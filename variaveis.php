<?php

#Variáveis são espaços na memória onde armazenamos valores de variáveis
#inicia-se com o símbolo $ seguindo do nome que eu quero refereniar.

$texto = 5;
$inteiro = 9;
$casaDecimal = 10.56;
$carros = ["fiat", "uno", "onix"];

#DEBUGAR - verificar o que está acontecendo no código.
#var_dump();

var_dump ($texto);
echo "<br>";
var_dump($inteiro);
echo "<br>";
var_dump($casaDecimal);
echo "<br>";
var_dump($carros);

/*
* O PHP não necessita da declaração do tipo da variável.
* Alguns programadores (principalmente os que usam JAVA) falam que o PHP é FRACAMENTE TIPADO
 */
