<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    // Define o endereço de e-mail que receberá a mensagem
    $para = "lallapotiraoficial@gmail.com"; // Substitua com seu e-mail real
    $assunto = "Nova mensagem de contato";
    
    // Monta a mensagem
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "WhatsApp: $telefone\n";
    $corpo .= "Mensagem: $mensagem\n";

    // Define os cabeçalhos do e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envia o e-mail
    if (mail($para, $assunto, $corpo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem. Tente novamente mais tarde.";
    }
}
?>
