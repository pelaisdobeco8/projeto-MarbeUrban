<?php

function visualizar() {
	$vetor = array();
	$vetor['produto'] = "Moletom";
	$vetor['descricao'] = "Rosa carma";
	$vetor['preco'] = "159,90";
	
    exibir("produtos/visualizar", $vetor);
}

function adicionar () {
	if (ehPost ()) {
		$produto = $_POST ["produto"];
		$descricao = $_POST ["descricao"];
		$preco = $_POST ["preco"];
		
		echo $produto . "<br>" ;
		echo $descricao . "<br>";
		echo $preco ."<br>";	
	}else {
		exibir ("produtos/formulario");
	}
}