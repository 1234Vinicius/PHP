<?php

$nome = " Vinicius ";
function teste() {
	global $nome;
	echo $nome;
}

function teste2() {
	$nome = " Rocha ";
	echo $nome. " agora no teste 2 ";

}


teste();
teste2();



?>