<?php
// Entradas
$curso = readline("Informe o curso: ");
$cargaHoraria = readline("Informe a carga horaria: ");

// Processamento
$faltasPermitidas = $cargaHoraria * 0.25;

// Saída concatenada
//echo "O curso de ".$curso." possui carga horária de ".$cargaHoraria. "h com limite de faltas de " .$faltasPermitidas."h faltas.";

// Saída concatenada por partes
echo "\nCurso: ".$curso."\n";
echo "\nCarga horária: ".$cargaHoraria."h \n";
echo "Limite de faltas: ".$faltasPermitidas."h";

// \n é usado para criar "quebras", ou "novas linhas" dentro de uma saída de texto.