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
    <h1>ALUNO</h1>
    <form method="POST" action="processar.php">
        <label for="resposta_1">1. Você acha difícil prestar atenção na aula o tempo todo? O que te distrai mais?</label>
        <textarea name="resposta_1" id="resposta_1" required></textarea>

        <label for="resposta_2">2. Quando você começa a estudar, o que acontece? Você consegue se concentrar ou desiste rápido?</label>
        <textarea name="resposta_2" id="resposta_2" required></textarea>

        <label for="resposta_3">3. Tem alguma matéria que você acha mais difícil? Por quê?</label>
        <textarea name="resposta_3" id="resposta_3" required></textarea>

        <label for="resposta_4">4. Quando a professora explica algo, você sente que entende ou precisa de mais tempo?</label>
        <textarea name="resposta_4" id="resposta_4" required></textarea>

        <label for="resposta_5">5. O que te ajuda a lembrar do que precisa fazer na escola, como lição de casa ou estudar para provas?</label>
        <textarea name="resposta_5" id="resposta_5" required></textarea>

        <label for="resposta_6">6. Em qual(s) você sente mais dificuldade para aprender?</label>
        <textarea name="resposta_6" id="resposta_6" required></textarea>

        <label for="resposta_7">7. Imagine que você está jogando um jogo com seus amigos e tem que esperar sua vez para jogar. O que você faz enquanto espera?</label>
        <textarea name="resposta_7" id="resposta_7" required></textarea>

        <label for="resposta_8">8. Um menino chamado João tem uma lista de tarefas para fazer: lavar a louça, arrumar a cama e fazer o dever de casa. Ele começa a lavar a louça, mas lembra que tem algo legal na TV e vai assistir. O que você acha que João deveria fazer?</label>
        <textarea name="resposta_8" id="resposta_8" required></textarea>

        <label for="resposta_9">9. Ana tem uma prova importante amanhã. Ela tenta estudar, mas lembra do celular e começa a mexer nele. Depois, fica preocupada porque o tempo passou. O que você faria no lugar de Ana?</label>
        <textarea name="resposta_9" id="resposta_9" required></textarea>

        <label for="resposta_10">10. O que você acha que poderia te ajudar a estudar melhor e aprender mais fácil?</label>
        <textarea name="resposta_9" id="resposta_9" required></textarea>
        <button type="submit
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>