function autoCompleteClubes(id){
  var idLabel = id + "-label";
  return {
    minLength: 2,
    source: function( request, response ) {
      $.ajax({
        url: "autocomplete.php",
        type: "POST",
        dataType : "json",
        data: {
          acao: 'autocomplete',
          parametro: $(idLabel).val()
        },
        success: function(data) {
         response(data);
       }
     });
    },
    focus: function( event, ui ) {
      $(idLabel).val( ui.item.label );
      return false;
    },
    select: function( event, ui ) {
      $(id).val( ui.item.value );
      $(idLabel).val( ui.item.label );
      return false;
    }
  }
}

function submitForm(formID) {
  var url = $(formID).attr("action");
  var formData = $(formID).serializeArray();
  console.log(formData);
  $.post(url, formData).done(function(data) {
        console.log(data); //resultado do envio para o servidor
      });
}

function logout(){
  $.post("logout.php", "").done(function(data) {
    location.reload();
  })
}