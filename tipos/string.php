<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br><br>';


// concatenação

echo "Nós também" . " somos";
echo "com" ,  "VIRGULAS";
echo '<br><br>';
echo "'Teste'" . '"teste"' . '\'teste\' ' . "\"teste\" ";


print("<br> Tambem existe a função print");
print"<br> Tambem existe a função print";

// algumas funçoes
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower("Minimizado");
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras ?');
//echo '<br>' . mb_strlen("Eu tambem" ,  "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar issso');