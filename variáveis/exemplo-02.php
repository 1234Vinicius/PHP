<?php
/*
$anoNascimento = 1990;
$nomeCompleto = ""; */
// Na inha de baixo temos uma variável com número no nome
$nome1 = "Vinicius";

$sobrenome = "Cordeiro";

$nomeCompleto = $nome1 . " " .  $sobrenome;

echo $nomeCompleto;
exit;

echo $nome1;

echo "<br/>";
//unsat($nome1);

if (isset($nome1)) {
	echo $nome1;
}

?>