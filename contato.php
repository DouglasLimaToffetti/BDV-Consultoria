<?php
include('includes/topo.php');
include('includes/navbar.php');
?>  
<br><br>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-1 col-sm-12"></div>

		<div class="col-md-4 col-sm-12">
			<h2 class="text-center text-primary" style="font-family:Calibri">Contato</h2>
				<form method="POST" action="processa.php">

						<input type="text" name="nome" placeholder="Nome*" value="" class="form-control"/><br>
						<input type="text" name="email" placeholder="E-Mail*" value="" class="form-control"/><br>
						<input type="text" name="telefone" placeholder="Telefone (somente numeros)" value="" class="form-control"/><br>
						<input type="text" name="assunto" placeholder="Assunto" value="" class="form-control"/><br>
						<textarea name="mensagem" placeholder="Mensagem*" class="form-control" style="height: 100px"></textarea>
						<input type="submit" value="Enviar" name="Enviar" class="btn btn-primary form-control mt-3 mb-1" />
					
				</form>
		</div>

		<div class="col-md-6 col-sm-12">
            <img src="img/conteudo/contato.jpg" style="height: 100%; width: 100%">
        </div>
	</div>
</div>


<?php
include('includes/footer.php');
?>