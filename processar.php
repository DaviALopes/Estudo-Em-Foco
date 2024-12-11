<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar as perguntas e respostas
    $dados = [];
    for ($i = 1; $i <= 10; $i++) {
        $dados[] = [
            'pergunta' => $_POST["pergunta_$i"] ?? "Pergunta $i", // Nomeie a pergunta ou receba dinamicamente
            'resposta' => $_POST["resposta_$i"] ?? '',
        ];
    }

    // Caminho do arquivo JSON onde os dados serão salvos
    $arquivo = 'respostas.json';

    // Verificar se o arquivo já existe e carregar os dados antigos
    if (file_exists($arquivo)) {
        $dadosExistentes = json_decode(file_get_contents($arquivo), true) ?? [];
    } else {
        $dadosExistentes = [];
    }

    // Adicionar os novos dados ao arquivo existente
    $dadosExistentes[] = [
        'timestamp' => date('Y-m-d H:i:s'),
        'respostas' => $dados,
    ];

    // Salvar os dados no arquivo JSON
    file_put_contents($arquivo, json_encode($dadosExistentes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

  
    header('Location: pagina-aluno.php?success=Respostas salvas com sucesso!');
    exit;
} else {
    
    header('Location: index.php');
    exit;
}
