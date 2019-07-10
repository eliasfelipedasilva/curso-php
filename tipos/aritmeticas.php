<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';

var_dump(1 + 1.0);
echo '<br>';

echo 1 + 2, '<br';
echo 10 - 2, '<br>';
echo 2 * 2, '<br>';
echo 7 / 2, '<br>';
echo intdiv(7 , 4 ), '<br>';
echo round( 7 , 4 ), '<br>';
echo 7 % 4, '<br>';
// echo 7 / 0 , '<br>'; // infinito 
echo 4 ** 2, '<br>';

// precedencia de operadores

// () -> ** -> / * % -> + - 

echo '<p>Precedencia</p> <br>';
echo 2 + 4 * 3 , '<br>';
echo ((2 + 4 ) * 4 ) ** 3 ;
?>