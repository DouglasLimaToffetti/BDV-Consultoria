$(document).ready(function() {
	$('#frmCadastroCliente').on('submit', function(){
		$.ajax({
			method: 'POST',
			url: 'includes/conexao.php',
			data: $('#frmCadastroCliente').serialize(),
			beforeSend: function(){
				$('#alertRetorno').css('display', 'none');
				$('#alertRetorno').html('');
				$('#alertRetorno').removeClass('alert-success');
				$('#alertRetorno').removeClass('alert-danger');
			},
			success: function(response){
				console.log('response: ' + response);

				let jsonRetorno = JSON.parse(response);

				$('#alertRetorno').css('display', 'block');
				$('#alertRetorno').html(jsonRetorno.mensagem);

				if (jsonRetorno.retorno == "sucesso"){
					$('#alertRetorno').addClass('alert-success');
				} else {
					$('#alertRetorno').addClass('alert-danger');
				}
			},
			error: function(){
				$('#alertRetorno').css('display', 'block');
				$('#alertRetorno').html(jsonRetorno.mensagem);
			}
		});

		return false;
	});
});