<?php
$arquivo = 'respostas.json';
if (!file_exists($arquivo)) {
    die('Nenhuma resposta encontrada.');
}

$dados = json_decode(file_get_contents($arquivo), true);


$ultimoConjunto = end($dados);


$mensagem = "Solicito a análise dos questionários anexos, preenchidos por um aluno do 6º ano, seus responsáveis e seu professor, visando identificar dificuldades relacionadas ao TDAH. Com base nisso, peço a elaboração de um plano de estudos personalizado que inclua:
	•	Estratégias para melhorar concentração e organização.
	•	Métodos de ensino adaptados às necessidades do aluno.
	•	Sugestões de atividades complementares.
	•	Recomendações para responsáveis e professores.:\n\n";
foreach ($ultimoConjunto['respostas'] as $item) {
    $mensagem .= "Pergunta: {$item['pergunta']}\n";
    $mensagem .= "Resposta: {$item['resposta']}\n\n";
}


$apiKey = "sk-proj-N6IuxAq9zh2YjcO2kzO9bA_QTzDzIjeUwBHFuxMU-YXT_nm3kUJLMXRttIcyEWMQ55whfjGTjDT3BlbkFJ0qKVz0edyo1iFVuaDBvHxkgGOoKFmUIA720TJPWiVfsw86Ccsy2HgVJl8F0anwhxQt1ndmc_0Ai"; 
$url = "https://api.openai.com/v1/chat/completions";

$data = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'system', 'content' => '"Solicito a análise dos questionários anexos, preenchidos por um aluno do 6º ano, seus responsáveis e seu professor, visando identificar dificuldades relacionadas ao TDAH. Com base nisso, peço a elaboração de um plano de estudos personalizado que inclua:
	•	Estratégias para melhorar concentração e organização.
	•	Métodos de ensino adaptados às necessidades do aluno.
	•	Sugestões de atividades complementares.
	•	Recomendações para responsáveis e professores.'],
        ['role' => 'user', 'content' => $mensagem],
    ],
];

$options = [
    'http' => [
        'header' => [
            "Content-Type: application/json",
            "Authorization: Bearer $apiKey"
        ],
        'method' => 'POST',
        'content' => json_encode($data),
    ],
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if ($result === FALSE) {
    die('Erro ao enviar para a API do ChatGPT.');
}

//  resposta 
$response = json_decode($result, true);
echo "Análise do ChatGPT:\n";
echo $response['choices'][0]['message']['content'];
