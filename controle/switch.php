<div class="titulo">Switch</div>



<form     action="#" method="post">
    Categoria : <br>
<input  type="text" name="categoria"><br>
<button>Executar</button>
</form>

<?php

$categoria = $_POST['categoria'];
$preco = 0.0;
$carro = '';

// if ($categoria === 'Luxo'){
//     $carro= 'Mercedes';
//     $preco = 250000;
// }elseif( $categoria === "Suv"){
//     $carro = 'Renegade';
//     $preco = 80000;
// }else {
//     $carro= 'Mobi';
//     $preco = 33000;
// }

// $precoFormatado = number_format($preco, 2, ',' , '.');

// echo "$carro e R$$preco"; 


switch(strtolower($categoria)){
    case 'luxo':
    $carro = 'Mercedes';
    $preco = 250000;
    break;

    case 'suv' :
    $carro= 'Renegade';
    $preco=80000;
    break;

    case 'sedan':
    $carro = 'Etios';
    $preco = 55000;
    break;

    default :
    $carro= 'Mobi';
    $preco= 33000;
    break;
    
}


$precoFormatado = number_format($preco, 2, ',' , '.');

echo "<br><hr>$carro e R$$preco"; 

?>

<style>
    button, input {
        font-size: 1.8rem;
    }

</style>