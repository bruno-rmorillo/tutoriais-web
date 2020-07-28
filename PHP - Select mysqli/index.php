<?php
include "conexao.php";

$query = "SELECT * FROM tb_Login"; /* Query para buscar usuário. */

$result = mysqli_query($conexao, $query) or die("Erro ao utilizar mysqli_query. Contate o administrador do sistema.in/frame/frame_Refeicao_Almoco.php.Query0110204459"); /* Executa a conexão com a query. */
$row = mysqli_num_rows($result);

if ($row == 1) :
    while ($dados = mysqli_fetch_array($result)) :
    endwhile;
endif;
