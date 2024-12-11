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
    <h1>PROFESSOR</h1>
    <form method="POST" action="processar.php">
        <label for="resposta_1">1. Você percebe que o aluno tem dificuldade em manter a atenção durante as aulas? Quais momentos são mais críticos?</label>
        <textarea name="resposta_1" id="resposta_1" required></textarea>

        <label for="resposta_2">2. Ele consegue completar as atividades em sala dentro do tempo estipulado ou costuma precisar de mais tempo?</label>
        <textarea name="resposta_2" id="resposta_2" required></textarea>

        <label for="resposta_3">3. Durante explicações ou tarefas, ele apresenta sinais de distração, como mexer nos materiais, conversar ou olhar para outros lugares?</label>
        <textarea name="resposta_3" id="resposta_3" required></textarea>

        <label for="resposta_4">4. Como ele reage a instruções dadas em sala? Precisa de mais orientações ou repetição para entender o que deve fazer?</label>
        <textarea name="resposta_4" id="resposta_4" required></textarea>

        <label for="resposta_5">5. O aluno tem dificuldades em controlar impulsos, como interromper a fala do professor ou dos colegas?</label>
        <textarea name="resposta_5" id="resposta_5" required></textarea>

        <label for="resposta_6">6. Ele demonstra maior interesse ou foco em alguma matéria ou tipo de atividade?</label>
        <textarea name="resposta_6" id="resposta_6" required></textarea>

        <label for="resposta_7">7. Quais estratégias você já utilizou para ajudá-lo a se concentrar ou concluir tarefas? Elas funcionaram?</label>
        <textarea name="resposta_7" id="resposta_7" required></textarea>

        <label for="resposta_8">8. O aluno consegue se organizar em relação ao material escolar ou precisa de constantes lembretes e ajuda?</label>
        <textarea name="resposta_8" id="resposta_8" required></textarea>

        <label for="resposta_9">9. Como ele interage com os colegas? A impulsividade afeta as relações interpessoais ou o trabalho em grupo?</label>
        <textarea name="resposta_9" id="resposta_9" required></textarea>

        <label for="resposta_10">10. O que você acredita que poderia ser feito para ajudar o aluno a melhorar seu desempenho e engajamento, tanto na sala de aula quanto fora dela?</label>
        <textarea name="resposta_10" id="resposta_10" required></textarea>

        <button type="submit
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
