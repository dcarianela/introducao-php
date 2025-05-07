<?php
/* Loop WHILE (ENQUANTO) */

// Exemplo 1: contagem de 1 até 10

$i = 1; // variável de controle de iteração/repetição

// while ($i <= 10) {
	// echo $i."\n";
	// $i = $i + 1;
	// $i++; // operador de incremento ++
// } 


echo "\n";

// Exemplo 2: obter/exibir nome e idade de 3 pessoas

while ($i <= 3){
	
	// Entradas
	$nome = readline("Qual o nome? ");
	$idade = readline("Qual a idade? ");
	
	// Saídas
	echo "\n";
	echo $nome." tem ".$idade." anos.\n\n";
	
	$i++;
}

