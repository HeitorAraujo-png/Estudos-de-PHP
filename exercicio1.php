<?php


$primeiroNome = 'Heitor';
$ultimoNome = 'Araujo';
$nomeCompleto = $primeiroNome . ' ' . $ultimoNome;
$profissao = "QA";
$anosExperiencia = 0.4;
$linguagensConhecidas = ["TS", "PYTHON", "JAVA"];
$salarioExpectativa = 3500;

echo "Olá! Meu nome é " . $nomeCompleto . 
    "\nTenho " . $anosExperiencia . " Anos de experiencia" .
    "\nconheço: " . implode(', ', $linguagensConhecidas) . 
    "\nMeu salário esperado é: R$ " . $salarioExpectativa .
    "\nTipos de dados: " . gettype($linguagensConhecidas) . " " . gettype($salarioExpectativa) . "\n";

/*

checklist
[ ] Entendi que variáveis em PHP começam com $
[ ] Sei os 6 tipos de dados básicos
[ ] Entendo como concatenar com .
[ ] Usei echo para exibir valores
[ ] Acessei posições de arrays
[ ] Testei gettype() em diferentes variáveis
[ ] Consegui criar o exercício independente */
  