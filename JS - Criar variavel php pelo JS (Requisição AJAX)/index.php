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
        nome_Variavel = "variavel";

        //Chama a função que faz a requisição em AJAX.
        cria_Variavel(valor, nome_Variavel);
    });

    function cria_Variavel(valor, nome_Variavel) {
        $.ajax({
            url: 'cria_Variavel.php', //Pagina php que possui 'metodos'
            type: 'POST', //simula um submit usando o metodo post
            data: {
                'valor': valor, //passa valor da sessão.
                'nome_Variavel': nome_Variavel, //passa o nome da sessão.
            },
            success: function(valor_Return) //Função que recebe o retorno.
            {
                if (valor_Return != "0") {
                    console.log(valor_Return);
                } else {
                    console.log("Erro");
                }
            }
        });
    }
</script>