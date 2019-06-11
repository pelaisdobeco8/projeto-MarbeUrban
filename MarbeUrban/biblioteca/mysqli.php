<?php

function conn() {
    $conexao = mysqli_connect("localhost", "root", "", "MarbeUrban");
    if (!$conexao) die('Deu errado a conexao!');
    return $conexao;
}