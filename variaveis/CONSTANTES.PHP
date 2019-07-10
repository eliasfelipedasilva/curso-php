<DIV class="TITULO">Constantes</DIV>


<?php
define("TAXA_DE_JUROS", 5.9);
echo TAXA_DE_JUROS;
// echo '<br>' . $TAXA_DE_JUROS . '!';
// TAXA_DE_JUROS = 2.5 dara erro pq nao pode alterar uma constante

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
// const NOVISSIMA_TAXA = $valorVariavel nao funciona
// defube('NOVISSIMA_TAXA', $valorVariavel); funciona
 
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;

echo '<br>' . 'linha' .  __LINE__;
echo '<br>' . 'arquivo' .  __FILE__;
echo '<br>' . 'diretorio' .  __DIR__;

?>