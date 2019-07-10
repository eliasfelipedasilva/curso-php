<div class="titulo">Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(true);

// fazer regras de conversoes
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas 0 sera convertido para falso
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.2);
echo '<br>' . var_dump((bool) '');
echo '<br>' . var_dump((bool) 'asdasd');    
echo '<br>' . var_dump((bool) '0');    
echo '<br>' . var_dump(!!'00');    

