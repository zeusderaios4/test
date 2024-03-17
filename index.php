<?php
// Define as variáveis para o envio do email
$para = "zeusderaios4@gmail.com";
$assunto = "Teste de e-mail";
$mensagem = "Este é um e-mail de teste enviado via PHP.";
$remetente = "zeusderaios4test@gmail.com"; // Endereço de e-mail do remetente

// Configurações adicionais
$headers = "From: $remetente\r\n";
$headers .= "Reply-To: $remetente\r\n";
$headers .= "CC: copia@example.com\r\n"; // Copia carbono
$headers .= "BCC: copia_oculta@example.com\r\n"; // Copia carbono oculta

// Envia o e-mail
if (mail($para, $assunto, $mensagem, $headers)) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Falha ao enviar o e-mail.";
}
?>
