<?php
session_start();

if (isset($_POST['nome_Variavel']) && isset($_POST['valor'])) :
    $nome_Variavel = $_POST['nome_Variavel'];
    $valor = $_POST['valor'];

    $_SESSION["$nome_Variavel"] = $valor;
?>

Sucesso ao criar sessão. 
Nome da sessão: <?php echo $nome_Variavel ?> 
Valor da sessão: <?php echo $valor ?> 

<?php
endif;
?>