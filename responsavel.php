<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #e0f2ff;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
        .form-container {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            max-width: 800px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        textarea {
            width: 100%;
            height: 80px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
            margin-bottom: 15px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>RESPONSÁVEL</h1>
    <form method="POST" action="processar.php">
        <label for="resposta_1">1. Em casa, você percebe se seu filho tem dificuldade em se concentrar nas tarefas escolares? O que ele costuma fazer durante essas atividades?</label>
        <textarea name="resposta_1" id="resposta_1" required></textarea>

        <label for="resposta_2">2. Como seu filho reage quando tem que começar algo que não gosta, como lição de casa ou estudar?</label>
        <textarea name="resposta_2" id="resposta_2" required></textarea>

        <label for="resposta_3">3. Você nota se ele costuma deixar as tarefas pela metade ou se esquece de terminá-las?</label>
        <textarea name="resposta_3" id="resposta_3" required></textarea>

        <label for="resposta_4">4. Existe alguma matéria ou atividade em que ele pareça mais motivado ou interessado?</label>
        <textarea name="resposta_4" id="resposta_4" required></textarea>

        <label for="resposta_5">5. Como ele lida com horários e rotinas? Precisa de ajuda para lembrar o que fazer ou seguir o que foi planejado?</label>
        <textarea name="resposta_5" id="resposta_5" required></textarea>

        <label for="resposta_6">6. Quando ele está brincando ou fazendo algo de que gosta, você percebe se ele também se distrai ou esquece do que estava fazendo?</label>
        <textarea name="resposta_6" id="resposta_6" required></textarea>

        <label for="resposta_7">7. Você já percebeu se ele tem dificuldade para organizar materiais escolares, como cadernos, livros ou mochila?</label>
        <textarea name="resposta_7" id="resposta_7" required></textarea>

        <label for="resposta_8">8. Na sua opinião, o que mais dificulta o aprendizado dele: falta de atenção, impulsividade ou dificuldade em seguir instruções?</label>
        <textarea name="resposta_8" id="resposta_8" required></textarea>

        <label for="resposta_9">9. Você já tentou alguma estratégia em casa para ajudá-lo a estudar ou se concentrar? Funcionou?</label>
        <textarea name="resposta_9" id="resposta_9" required></textarea>

        <label for="resposta_10">10. O que você acredita que a escola ou a família poderia fazer para melhorar o desempenho e a confiança dele nos estudos?</label>
        <textarea name="resposta_10" id="resposta_10" required></textarea>

        <
<button type="submit
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>