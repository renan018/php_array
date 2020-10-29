<?php
$siglas = array('ES', 'MG', 'RJ', 'SP');
$estados = array('São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo');
$estados_reverse = array_reverse($estados);
$novo_array = array_combine($siglas, $estados_reverse);

foreach ($novo_array as $key => $value) {
    echo "{$key} - {$value} ";
    echo "<br>";
}