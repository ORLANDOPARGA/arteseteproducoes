if (typeof PagSeguroDirectPayment === 'undefined') {
	console.error("❌ PagSeguroDirectPayment não foi carregado!");
} else {
  console.log("✅ PagSeguroDirectPayment carregado com sucesso.");
  pagamento();
}

function pagamento(){
    var endereco = jQuery('.endereco').attr("data-endereco");
    $.ajax({
        url: endereco + "pagamento.php",
        type: 'POST',
        dataType: 'json',
        success: function (retorno) {
		     console.log(retorno)
            //console.log(retorno);
            PagSeguroDirectPayment.setSessionId(retorno.id);
        }
    });
}


