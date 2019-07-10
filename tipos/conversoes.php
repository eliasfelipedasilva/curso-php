<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float

echo '<br>';
var_dump(PHP_INT_MAX + 1 ); // excede o numero maximo assim passa para float
echo '<br>';
var_dump((float) 3);

// float para int
echo '<p>Float Para int </p>';
var_dump((int) 6.8); // arredonda para baixo, pode perder informação
echo '<br>';
var_dump(intval(2.999)); // arredonda para 2
echo '<br>';
var_dump((int) round(2.999));

// operações com string
echo'<p>Operações com String</p>';
var_dump(3 + "2");
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2); // string por causa da concatenação
echo '<br>', is_string("3" + 2); // valaor interio soma
echo '<br>';
var_dump (1 + "cinco");
echo '<br>';
var_dump( 1 + " 5 cinco");
echo '<br>';
var_dump( 1 + "2+5"); // so vai procurar no começo da string " 1 + 2  = 3 ";

