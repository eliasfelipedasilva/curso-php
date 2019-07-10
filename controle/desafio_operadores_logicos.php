<div class="titulo">Desafio Operadores Logicos</div>

<form action="#" method="post">
<div>
    <label for="t1">Trabalho 1</label>
    <select name="t1" id="t1">
        <option value="1">Executado</option>
        <option value="0">Nao Executado</option>
    </select>   
</div>

<div>
    <label for="t2">Trabalho 2</label>
    <select name="t2" id="t2">
        <option value="1">Executado</option>
        <option value="0">Nao Executado</option>
    </select>    
</div>
<button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }

</style>
<?php
/* Se os dois trabalhos derem certo entao compra tv 50 e toma sorvete
   Se um trabalho der certo toma sorvete e tv 32
   Se nehum der certo Familia ficara em casa e ficara saudavel
 */

$trabalho1 = $_POST['t1'];
$trabalho2 = $_POST['t2'];

if ($trabalho1 && $trabalho2){
    echo "Tv 50 e Sorvete <br>";
}elseif( $trabalho1 || $trabalho2){
    echo "Tv 32 e sorvete<br>";
    }
    else{
        echo "Familia Ficara em casa<br>";
    }
?>
