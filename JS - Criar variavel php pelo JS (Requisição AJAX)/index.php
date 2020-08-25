<h3>Será criado a sessão $_SESSION['variavel']</h3>
<BR /><BR />
<label>Valor da variável: </label>
<input type="text" id="valor" />
<input type="button" value="Criar" id="criar" />

<script src="../js/jquery.js"></script>

<script>
    //Cria função onclick no botão input#criar. # = ID.
    $("input#criar").click(function() {
        // Valor da sessão.
        var valor = $("input#valor").val();
        // Nome da sessão.
        var nome_Variavel = "variavel";

        //Chama a função que faz a requisição em AJAX.
        cria_Variavel(nome_Variavel, valor);
    });

    function cria_Variavel(nome_Variavel, valor) {
        $.ajax({
            url: 'exe/cria_Sessao.php', //Pagina php que possui 'metodos'
            type: 'POST', //simula um submit usando o metodo post
            data: {
                'nome_Variavel': nome_Variavel, //passa o nome da sessão.
                'valor': valor, //passa valor da sessão.
            },
            success: function(valor_Return) //Função que recebe o retorno.
            {
                console.log(valor_Return);
            }
        });
    }
</script>