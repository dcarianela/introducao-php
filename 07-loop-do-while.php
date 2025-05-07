<?php
/* Loop DO/WHILE (semelhante ao REPITA) */

$i = 1;

echo "\n";

do {
	$numero = readline("Informe o número: ");
	
	$resultado = $numero * 3;
	
	echo "\n".$resultado."\n\n";
	
	$i++;
	
} while($i <= 3);