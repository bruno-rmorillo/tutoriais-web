<?php

/*
Classe de conexão com o banco.
Criado 22.05.2020
Autor: Bruno R. Morillo - Aux. T.I.
*/

/* Remoto */
//$host = "170.83.121.127:1286";

/* Local */
$host = "192.168.1.253";

$usuario = "rmorillo";
$senha = "xyz";
$db = "eleva";

$conexao = mysqli_connect($host, $usuario, $senha, $db) or die('Erro ao se conectar, php/conexao.php. Query0000000001');
?>