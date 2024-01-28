<?php

// Recebendo dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$menssagem = $_POST['menssagem'];

$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "Formulário da página de contato <br>";
$corpo .= "Nome: " . $nome . " <br>";
$corpo .= "E-mail: " . $email . " <br>";
$corpo .= "Mensagem: " . $menssagem . " <br>";

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'talis.oliveira@hotmail.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($assunto, "utf-8"), $corpo, $headers);
// $status = true;

// Status E-mail
if ($status):
  // Enviada com sucesso
  header('location:index.php?status=sucesso');
else:
  // Se der erro
  header('location:index.php?status=erro');
endif;
?>