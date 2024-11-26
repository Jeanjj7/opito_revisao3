$(document).ready(function(){
    $("#carregando").hide();
    $("#formCadProduto").hide();
    $("#formCadCategoria").hide();
    $.get('consultarCategorias.php', function (resposta) {
        $('#caixaCategoria2').html(resposta);
     });

    $("#btnNovaCat").click(function(){
        $("#formCadCategoria").show();
    });

    $("#btnNovoProduto").click(function(){
        $("#formCadProduto").show();
    });

    $("#btnFecharPro").click(function(){
        $("#formCadProduto").hide();
    });

    $("#btnFecharCat").click(function(){
        $("#formCadCategoria").hide();
    });
});