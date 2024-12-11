<?php
session_start(); // Inicia a sessão

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processa os dados do formulário
    $file = 'respostas_responsavel.txt'; // Nome do arquivo onde as respostas do responsável serão salvas
    $data = implode("\n", $_POST) . "\n"; // Converte as respostas em uma string

    // Salva as respostas no arquivo
    if (file_put_contents($file, $data, FILE_APPEND) === false) {
        $_SESSION['message'] = "Erro ao salvar suas respostas.";
    } else {
        $_SESSION['message'] = "Respostas do responsável salvas com sucesso!";
    }

    // Redireciona para a página do aluno ou outra página desejada
    header("Location: pagina-aluno.php");
    exit(); // Para garantir que o script pare após o redirecionamento
}
?>