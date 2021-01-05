$('#formulario').submit(function(){

    var cod = $('#ccodigserv').val();
    var nome = $('#nomeserv').val();
    var qtd = $('#quantserv').val();
    var valorunit = $('#valorserv').val();

    $.ajax({

            url:'index_papelaria.php',
            method:'POST',
            data: dados,
            datatype: "html"
    }).done(function(result){

    console.log(result);
    });
});

$(document).ready(function(){
    $("#formulario").click(function(){
      $("#fechar").hide();
    });
  
  });