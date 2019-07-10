<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero -1 ;
echo '<br>' . $numero;
$numero = $numero  + 1.3 ;
echo '<br>' . $numero;
$numero--;
echo '<br>' . $numero;
$numero++;
echo '<br>' . $numero;
$numero = 20;
$numero -= 5;
echo '<br>' . $numero;
$numero *= 5;
echo '<br>' . $numero;
$numero /= 5;
echo '<br>' . $numero;

$numero %= 5;
echo '<br>' . $numero;

$numero **= 5;
echo '<br>' . $numero;


$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . 'qualquer';
$texto .= 'de verdade';
echo '<br>' . $texto;


// $variavelInexistente = 'valor existente;
echo '<br>';
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;
