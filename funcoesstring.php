<?php

//Repete string

echo str_repeat("Ola", 10);
echo "<hr>";


#Caixa alta upper-case
$nome = "marcos goncalves";

echo strtoupper($nome);
echo "<hr>";

#lower-Case -- caixa baixa
echo strtolower("PROGRAMACAO");
echo "<hr>";

# trocar texto - str_replace

$texto = "O rei rico de roma";
echo str_replace("rei", "rainha", $texto);

#primeira letra maiuscula ucfirst(texto)
echo "<hr>";
$func = "marcos goncalves";
echo ucfirst($func);
echo "<br>";

#primeira letra de cada palavra em maiúscula
echo ucwords($func);
echo "<hr>";

#padronizando texto escrito de varias formas pelo usuário usando duas funções
$aluno = "Jose CARLOS Almeida";
echo ucwords(strtolower($aluno));
echo "<hr>";

$nome2 = "      marcos";
echo trim($nome2); //função que retira espaços em branco