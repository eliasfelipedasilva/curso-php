<div class="titulo">Valor x Referencia</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// atrivuição ´por valor

$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavelValor = 'novo valor';
echo "$variavelValor";

// atribuiçao por referencia
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br> $variavel $variavelReferencia";