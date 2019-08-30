$('input[type="checkbox"]').click(function () {
    if($(this).is(':checked') ){
        $(this).addClass('clicado');
        $('#painel_numero').html($(this).val());
    } else {
        $('#painel_numero').html(" ");
        $(this).removeClass("clicado");
    }
  });