<div class="titulo">Operadores Relacionais</div>

<?php

var_dump( 1 == 1); // true
var_dump( 1 > 1); // false
var_dump( 1 >= 1); // true
var_dump( 4 < 23); // true
var_dump( 1 <= 7 ); //true
var_dump( 1 != 1); //false
var_dump( 1 <> 1); // false

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false estritamente pribido por serem tipos diferentes
var_dump(111 !== '111'); // true tipos diferentes

echo"<p > Relacionais No IF/Else</p><hr>";

$idade = 15;

if ($idade < 18 ){
    echo "Menor de idade = $idade anos<br>";
} else if ($idade <= 65){
    echo "Adulto = $idade anos <br>";
} else {
    echo "Terceira Idade = $idade anos";
}

echo '<p>Spaceship</p><hr>';
var_dump(500<=> 3);
var_dump( 50 <=> 50);
var_dump( 1 <=> 30);

echo "<br> Valores podem ser V ou F<br>";
var_dump(!!5);


?>
<style>
    p{
    margin-bottom: -7px;
}
hr{
    margin-top: 0px;
}
</style>