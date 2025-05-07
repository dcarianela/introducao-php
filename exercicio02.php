<?php
/* Condicionais: se, então, senão, fim-se */

/* Protótipo de Chatbot */

echo "\n*** Chatbot de empresa Hawthorne ***\n";
echo "\nOpções disponíveis: \n\n";
echo "1 -> Informações\n";
echo "2 -> Reclamação\n";
echo "3 -> Elogios\n";
echo "4 -> Status\n";

echo "\n";

$opcao = readline ("Digite uma opção: ");

// teste de entrada
// echo "\n".$opcao;

// Condicional Encadeada
switch($opcao){
	case 1:
		"Legal, o que deseja saber? 😸"
		break;
	case 2:
		"Poxa, que pena... O que houve? 😿"
		break;
	case 3:
		"Bacana! Pode falar 😼"
		break;
	case 4:
		"Ok, um momento... ⏳"
		break;
	default
		"Não entendi... vou chamar um atendente. 😺"
		break;
}

echo "\n---------------------\n";
echo $opcao;
echo "\n---------------------\n";