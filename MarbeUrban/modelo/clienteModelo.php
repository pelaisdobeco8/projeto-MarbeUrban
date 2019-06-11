<?php

function dadosCliente () {
    $comando = "INSERT INTO cliente (nome, sobnome, email, senha, sexo) VALUES ($nome, $sobnome, $email, $senha, $sexo)"; 
    $resultado = mysql_query ($conexao, $comando);
    
    if ($resultado == true) {
        echo "Registro inserido com sucesso!";
    }else {
        die("Erro ao inserir registro" . mysql_error($conexao));
    }
}
