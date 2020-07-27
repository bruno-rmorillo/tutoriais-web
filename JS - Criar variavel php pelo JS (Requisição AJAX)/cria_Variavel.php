<?php
session_start();

if (isset($_POST['valor'])) :
    $valor = $_POST['valor'];
    $nome_Variavel = $_POST['nome_Variavel'];

    $_SESSION["$nome_Variavel"] = $valor;
    echo $valor;

else :
    echo "0";
endif;
?>