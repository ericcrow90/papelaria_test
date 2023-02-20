$('#formulario').ready(function(){
  $('#fechar_abrir_form').click(function(){
    $('#formulario1').toggle();
  });
});


//Função de mudar o nome do botão FECHAR E ABRIR FORMULÁRIO
function mudarNome()
{
 if(document.getElementById("fechar_abrir_form").value == "Fechar Formulário")

 {
  document.getElementById("fechar_abrir_form").value = "Abrir Formulário";
 } 
 else
 {
  document.getElementById("fechar_abrir_form").value = "Fechar Formulário";
 }
}
