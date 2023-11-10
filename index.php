<?php
// Verificar prazos e enviar e-mail se necessário
function verificarPrazos($vencimento) {
    // Ajuste a lógica conforme necessário para verificar se o prazo foi atingido
    $prazoAtingido = true; // Altere para a lógica real de verificação de prazo

    if ($prazoAtingido) {
        // Configuração das informações do e-mail
        $destinatario = 'destinatario@example.com'; // Substitua pelo endereço de e-mail desejado
        $assunto = 'Prazo Atingido';

        // Corpo do e-mail
        $mensagem = "O prazo foi atingido para o formulário enviado em $vencimento.";

        // Envie o e-mail
        $enviado = mail($destinatario, $assunto, $mensagem);

        // Verifique se o e-mail foi enviado com sucesso
        if ($enviado) {
            echo 'E-mail enviado com sucesso.';
        } else {
            echo 'Erro ao enviar o e-mail.';
        }
    }
}

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["nome"];
    $cliente = $_POST["cliente"];
    $tipo = $_POST["tipo"];
    $numero = $_POST["numero"];
    $protocolar = $_POST["protocolar"];
    $vencimento = $_POST["vencimento"];

    // Valide e processe os dados conforme necessário
    // Por exemplo, você pode armazená-los em um banco de dados

    // Chame a função para verificar prazos e enviar e-mail se necessário
    verificarPrazos($vencimento);

    // Após processar os dados, redirecione o usuário de volta para a página principal
    header("Location: file:///C:/Caminho/Para/Sua/Pagina.php");
    exit();
}
?>
