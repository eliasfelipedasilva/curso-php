<div class="titulo">Desafio Equação</div>

<?php
echo '<p> Desafio equação</p>';

$parentese1 = (6*(3+2))**2;
$baixo_parentese1 = 3 * 2;

$parentese1 = 1 - 5;
$parentese2 = 2 - 7;
$parentese3 = $parentese1 * $parentese2;
$parentese4 = ($parentese3 / 2)**2;
// echo $parentese4;

$p1 = (6*(3+2))**2;
$p2 = 3 * 2;
$r1 = $p1 / $p2;
// echo $r1 ;

$cima = ($r1 - $parentese4)**3;
$baixo = 10 ** 3 ;
$result = $cima / $baixo;
echo 'O resultado é ' . $result;