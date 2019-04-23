<?php

function adicionar () {
	if (ehPost ()) {
		$nome = $_POST ["nome"];
		$sobnome = $_POST ["sobnome"];
		$emailn = $_POST ["emailn"];
		$senha = $_POST ["senha"];
		$confirma = $_POST ["confirma"];
		$sexo = $_POST ["sexo"];
		
		echo $nome . "<br>" ;
		echo $sobnome . "<br>";
		echo $emailn ."<br>";	
		echo $senha ."<br>";
		echo $confirma . "<br>";
	}else {
		exibir ("cliente/formulario");
	}
}