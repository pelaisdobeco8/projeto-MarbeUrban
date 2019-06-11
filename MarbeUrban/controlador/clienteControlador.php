<?php

require_once "modelo/clienteModelo.php";

function adicionar () {
	if (ehPost ()) {
		$nome = $_POST ["nome"];
		$sobnome = $_POST ["sobnome"];
		$email = $_POST ["email"];
		$senha = $_POST ["senha"];
		//$confirma = $_POST ["confirma"];
		$sexo = $_POST ["sexo"];
		
		if (strlen(trim($_POST['nome'])) == 0){
                echo "Você precisa registrar seu nome. <br>";
            }else {
                echo $nome . "<br>" ;
            }
            
            if (strlen(trim($_POST['sobnome'])) == 0){
               echo "Você precisa informar seu sobrenome. <br>";
            }else {
                echo $sobnome . "<br>";
            }
            
            if (strlen(trim($_POST['email'])) == 0){
               echo "Você precisa registrar seu e-mail. <br>"; 
            }else {
                echo $email ."<br>";
            }
            
            if (strlen(trim($_POST['senha'])) == 0){
                echo "Você precisa criar uma senha. <br>";
            }else{
                echo $senha ."<br>";
            }

	}else {
		exibir ("cliente/formulario");
	}
}
