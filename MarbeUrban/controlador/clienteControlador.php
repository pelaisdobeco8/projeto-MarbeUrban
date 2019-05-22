<?php

function adicionar () {
	if (ehPost ()) {
		$nome = $_POST ["nome"];
		$sobnome = $_POST ["sobnome"];
		$emailn = $_POST ["emailn"];
		$senha = $_POST ["senha"];
		$confirma = $_POST ["confirma"];
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
            
            if (strlen(trim($_POST['emailn'])) == 0){
               echo "Você precisa registrar seu e-mail. <br>"; 
            }else {
                echo $emailn ."<br>";
            }
            
            if (strlen(trim($_POST['senha'])) == 0){
                echo "Você precisa criar uma senha. <br>";
            }else{
                echo $senha ."<br>";
            }
            
             if (strlen(trim($_POST['confirma'])) != 'senha'){
                 echo "A senha não é compatível. <br>";
             }else{
                 echo $confirma . "<br>";
             }
		
		echo $sexo;
	}else {
		exibir ("cliente/formulario");
	}
}
