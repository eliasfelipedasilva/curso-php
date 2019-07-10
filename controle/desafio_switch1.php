<div class="titulo">Desafio Switch 1</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Kilometro para Milha</option>
        <option value="milha-km"> Milha para Kilometro </option>
        <option value="metro-km">  Metros para Kilometros </option>
        <option value="km-metro">  Kilometros para metros </option>
        <option value="cel-far">  Celsius para Fahrenheit </option>
        <option value="far-cel">  Fahrenheit para Celsius </option>

    </select><br><br>


<button>Executar Conversão</button>
</form>

<style>
    input, button,select{
        font-size: 1.8rem;
    }
</style>    

<?php

$valor = $_POST['param'];
$conversao= $_POST['conversao'];
const _FATOR_KM_MILHA = 0.621371;

switch ($conversao) {
    case 'km-milha':
     $valor = $valor *_FATOR_KM_MILHA; number_format($valor, 2,',', '.');
     echo "$valor milhas";
    break;

    case 'milha-km':
    $valor=$valor / _FATOR_KM_MILHA; number_format($valor, 2,',', '.');
    echo "$valor Kilometros";
    break;

    case 'metro-km':
    $valor = $valor / 1000; number_format($valor, 2,',', '.');
    echo "$valor Kilometros";
    break;

    case 'km-metro':
    $valor = $valor * 1000; number_format($valor, 2,',', '.');
    echo "$valor Metros";
    break;

    case 'cel-far':
    $valor =  ($valor * 9/5) + 32; number_format($valor, 2,',', '.');
    echo "$valor F°";
    break;

    case 'far-cel' :
    $valor = ($valor -   32) * 5/9 ;  number_format($valor, 2,',', '.');
    echo "$valor C°";
    break;
}
?>

