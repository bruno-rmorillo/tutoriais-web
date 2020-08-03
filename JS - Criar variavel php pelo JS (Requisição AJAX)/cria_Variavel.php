<?php
session_start();

if (isset($_POST['valor']) && isset($_POST['nome_Variavel'])) :
    $valor = $_POST['valor'];
    $nome_Variavel = $_POST['nome_Variavel'];

    $_SESSION["$nome_Variavel"] = $valor;
    echo "Sucesso - ";
    echo "Nome Variável: " . $_POST['nome_Variavel'] . " - ";
    echo "Valor: " . $_POST['valor'];
else :
    echo "Erro - ";
    echo "Nome Variável: " . $_POST['nome_Variavel'] . " - ";
    echo "Valor: " . $_POST['valor'];
endif;
