<h3>Exibe o valor do campo de texto.</h3>
<BR /><BR />


<label>Valor da variável: </label>
<input type="text" id="valor" />
<input type="button" value="Exibir" id="exibir" />

<script src="../js/jquery.js"></script>

<script>
    // Função onclick.
    $("input#exibir").click(function() {
        // Pega o valor do input.
        var valor = $("input#valor").val();
        // Exibe o valor do input.
        alert(valor);
    });
</script>