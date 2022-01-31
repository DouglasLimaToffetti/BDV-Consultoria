<?php

if ((isset($_POST['email']))&&(!empty($_POST['email']))){

   //porta, usuário, senha, nome data base
   //caso não consiga conectar mostra a mensagem de erro mostrada na conexão
   $conexao = mysqli_connect("bdvconsultoria.mysql.dbaas.com.br", "bdvconsultoria", "Be@triz1980", "bdvconsultoria") or die("Erro na conexão com banco de dados " . mysqli_error($conexao));

   mysqli_set_charset($conexao, "utf8");

  //Abaixo atribuímos os valores provenientes do formulário pelo método POST
  $nome = $_POST['nome'];
  $assunto = $_POST['assunto']; 
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];

   $string_sql = "INSERT INTO contato (id,nome,assunto,email,telefone,mensagem) VALUES (null,'$nome','$assunto','$email','$telefone','$mensagem')";

   $insert_member_res = mysqli_query($conexao, $string_sql);
   if(mysqli_affected_rows($conexao)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
       echo "<p>Mensagem de contato enviada!</p>";
       echo '<a href="index.php">Voltar para o Site.</a>'; //Apenas um link para retornar para o formulário de cadastro
   } else {
       echo "Erro, não foi possível inserir no banco de dados";
   }
   mysqli_close($conexao); //fecha conexão com banco de dados
}else{
    echo "<p>Por favor, preencha todos os campos</p>";
    echo '<a href="contato.php">Voltar</a>';
}
?>
