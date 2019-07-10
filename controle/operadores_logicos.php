<div class="titulo">Operadores Logicos</div>

<?php
echo "<p class ='divisao'> V ouy F </p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true);
echo "<p class ='divisao'> Tabela Verdade 'AND' (e) </p><hr>";
var_dump(true && true); echo '<br>';
var_dump(true && false); echo '<br>';
var_dump(false && true); echo '<br>';
var_dump(false && false); echo '<br>';

var_dump(true and true); echo '<br>';
var_dump(true and false); echo '<br>';
var_dump(false and true); echo '<br>';
var_dump(false and false); echo '<br>';

var_dump(TRUE && 3 > 2 && 7 <= 7 && 3 === "3"); echo '<br>';
echo "<p class ='divisao'> Tabela Verdade 'OR' (ou) </p><hr>";
var_dump(true || true); echo '<br>';
var_dump(true || false); echo '<br>';
var_dump(false || true); echo '<br>';
var_dump(false || false); echo '<br>';

var_dump(true or true); echo '<br>';
var_dump(true or false); echo '<br>';
var_dump(false or true); echo '<br>';
var_dump(false or false); echo '<br>';

echo "<p class ='divisao'> Tabela Verdade 'XOR' (ou exclusivo) </p><hr>";
var_dump(true xor true); echo '<br>';
var_dump(true xor false); echo '<br>';
var_dump(false xor true); echo '<br>';
var_dump(false xor false); echo '<br>';


echo "<p class = 'divisao'>Exemplo aposentadoria</p>";

$idade = 18;
$sexo = 'F';

$pagouPrevidencia = true;
$criterioHomem= ($idade >= 65 && $sexo === 'M');
$criterioMulher= ($idade >= 60 && $sexo === 'F');
$atingiuCriterio=$criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "pode se aposentar -> $podeSeAposentar.<br>";

if($idade >= 60 && $sexo === 'F'){
    echo "Aposenta";

}elseif($idade >= 65 && $sexo === 'M'){
    echo "  Aposenta";

}else {
    echo "Nao Aposenta";
}

?>
