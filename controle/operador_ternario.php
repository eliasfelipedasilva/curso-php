<div class="titulo">Operador Ternario</div>
<form action="#" method="post">
<input type="text" id="1" name="idade" required
        size="10">
       <button>Executar</button>
       </form>
<?php

$idade = $_POST['idade'];
$status;

$status = $idade >= 18 ? 'Maior Idade' : 'Menor idade';
echo $status;
