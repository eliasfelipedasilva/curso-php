<div class="titulo">Variaveis</div>

<?php
$numeroA = 13;  
echo $numeroA , '<br>';
var_dump($numeroA);
echo '<br>';

$a = 13;
$b =  10;

$somaDosNumeros = $a + $b;
echo $somaDosNumeros;
echo '<br>';    
echo isset($somaDosNumeros);
echo '<br>';

unset($somaDosNumeros);
var_dump($somaDosNumeros);
echo !isset($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

echo '<br>';

$variavel = "agora sou uma string";
echo '<br>' .  $variavel;

// nomeclatura de variaveis

$var = 'valida';
$var2 = 'valida';
$VAR = 'valida';
$_var = 'valida';
// $6var = invalido ... começar com numero
// $%var = invalida
// %var% = invalida

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
