
<?php
// Simula o plano de estudos gerado pela API
$response = [
    "analysis" => "Com base nos questionários do aluno, dos responsáveis e do professor, foram identificadas dificuldades relacionadas à atenção, organização e impulsividade. O plano de estudos foi personalizado para atender essas necessidades.",
    "plan" => [
        "strategies" => [
            "Dividir atividades longas em partes menores, com intervalos curtos para descanso.",
            "Utilizar cronogramas visuais com cores e ícones para organizar horários e tarefas.",
            "Criar um ambiente de estudo livre de distrações e com materiais organizados.",
            "Implementar um sistema de recompensas para tarefas concluídas."
        ],
        "methods" => [
            "Incorporar jogos educativos e tecnologia em aulas interativas.",
            "Utilizar ensino multissensorial com vídeos, música e materiais manipuláveis.",
            "Introduzir pausas ativas para recarregar a atenção durante as aulas.",
            "Fracionar explicações em passos curtos, verificando a compreensão."
        ],
        "activities" => [
            "Estimular jogos de atenção e memória, como quebra-cabeças.",
            "Promover práticas de relaxamento, como respiração ou yoga infantil.",
            "Incentivar esportes que exigem disciplina e cooperação, como natação ou artes marciais.",
            "Escolher leituras curtas e interessantes para melhorar a compreensão."
        ],
        "recommendations" => [
            "responsibles" => [
                "Estabelecer horários fixos para tarefas e lazer, usando lembretes visuais.",
                "Supervisionar tarefas inicialmente, incentivando gradualmente a autonomia.",
                "Reservar momentos diários para discutir conquistas e aprendizados.",
                "Elogiar os esforços do aluno, independentemente dos resultados."
            ],
            "teachers" => [
                "Oferecer atenção extra durante explicações ou tarefas mais difíceis.",
                "Promover aulas dinâmicas, com discussões em grupo e atividades práticas.",
                "Manter uma lista visível das tarefas do dia na sala de aula.",
                "Fornecer feedback frequente destacando pontos positivos e melhorias."
            ]
        ]
    ],
    "follow_up" => "Recomenda-se avaliação com psicopedagogo ou psicólogo especializado, além de reuniões regulares entre professores e responsáveis para alinhar ações."
];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano de Estudos Personalizado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #007acc;
        }
        .section {
            margin-bottom: 20px;
        }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007acc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            font-size: 16px;
        }
        .button:hover {
            background-color: #005f99;
        }
    </style>
</head>
<body>
        <h1>Plano de Estudos Personalizado</h1>

        <div class="section">
            <h2>Análise</h2>
            <p><?= $response["analysis"] ?></p>
        </div>

        <div class="section">
            <h2>Estratégias</h2>
            <ul>
                <?php foreach ($response["plan"]["strategies"] as $strategy): ?>
                    <li><?= $strategy ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section">
            <h2>Métodos de Ensino</h2>
            <ul>
                <?php foreach ($response["plan"]["methods"] as $method): ?>
                    <li><?= $method ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section">
            <h2>Atividades Complementares</h2>
            <ul>
                <?php foreach ($response["plan"]["activities"] as $activity): ?>
                    <li><?= $activity ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section">
            <h2>Recomendações</h2>
            <h3>Para Responsáveis</h3>
            <ul>
                <?php foreach ($response["plan"]["recommendations"]["responsibles"] as $recommendation): ?>
                    <li><?= $recommendation ?></li>
                <?php endforeach; ?>
            </ul>

            <h3>Para Professores</h3>
            <ul>
                <?php foreach ($response["plan"]["recommendations"]["teachers"] as $recommendation): ?>
                    <li><?= $recommendation ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section">
            <h2>Acompanhamento</h2>
            <p><?= $response["follow_up"] ?></p>
        </div>
</body>
</html>
