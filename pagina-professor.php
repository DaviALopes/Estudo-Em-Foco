<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #00a2ff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            width: 80%;
            max-width: 800px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            background-color: #00a2ff;
            padding: 10px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .header a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            margin-right: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        .status-green {
            background-color: #ccf5d1;
            color: #2e8b57;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .status-blue {
            background-color: #d0e7ff;
            color: #1e90ff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .status-orange {
            background-color: #ffe4b3;
            color: #ff8c00;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .send-button {
            background-color: #4CAF50; /* Verde */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            text-align: center;
        }

        .send-button:hover {
            background-color: #45a049; /* Verde escuro ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="adicionar-aluno.php">Adicionar aluno <i class="fas fa-plus"></i></a>
        </div>

        <?php if (isset($_GET['success'])) echo "<p style='color: green;'>Aluno cadastrado com sucesso!</p>"; ?>

        <table>
            <thead>
                <tr>
                    <th>Alunos</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Simulação de dados de alunos.
                $alunos = [
                    ['nome' => 'Teste', 'status' => 'Pronto para Análise']
                ];

                if (isset($alunos) && is_array($alunos) && count($alunos) > 0): 
                    foreach ($alunos as $aluno): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($aluno['nome']); ?></td>
                            <td>
                                <span class="status-<?php 
                                    if ($aluno['status'] == 'Plano gerado') echo 'green';
                                    else if ($aluno['status'] == 'Pronto para Análise') echo 'blue';
                                    else echo 'orange';
                                ?>">
                                    <?php echo htmlspecialchars($aluno['status']); ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; 
                else: ?>
                    <tr>
                        <td colspan="2" style="text-align: center;">Nenhum aluno cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Botão para enviar respostas para o ChatGPT -->
        <form action="send-to-chatgpt.php" method="POST">
            <button type="submit" class="send-button">
                Enviar Respostas para o ChatGPT <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>
</body>
</html>
