<html>
<head>
    <title>Formulario Pendentes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to bottom right, #00a2ff, #007acc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-size: 48px;
            margin-top: 50px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
            gap: 40px;
            flex-wrap: wrap;
        }
        .card {
            background-color: white;
            border-radius: 20px;
            width: 150px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            color: black;
            margin: 20px;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        .card i {
            font-size: 48px;
            margin-bottom: 10px;
            color: #007acc;
        }
        .card p {
            font-size: 16px;
            margin: 0;
            font-weight: bold;
        }
        .logout-card {
            background-color: #ff4d4d; /* Cor para o botão de deslogar */
        }
        .logout-card:hover {
            background-color: #ff1a1a; /* Cor ao passar o mouse */
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 36px;
                margin-top: 30px;
            }
            .container {
                margin-top: 50px;
                gap: 20px;
            }
            .card {
                width: 120px;
                height: 120px;
            }
            .card i {
                font-size: 36px;
            }
            .card p {
                font-size: 14px;
            }
        }
        @media (max-width: 480px) {
            h1 {
                font-size: 28px;
                margin-top: 20px;
            }
            .container {
                margin-top: 30px;
                gap: 10px;
            }
            .card {
                width: 100px;
                height: 100px;
            }
            .card i {
                font-size: 28px;
            }
            .card p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <h1>Formulario pendentes</h1>
    <div class="container">
        <div class="card">
            <a href="aluno.php" style="text-decoration: none; color: inherit;">
                <i class="fas fa-file-alt"></i>
                <p>Aluno</p>
            </a>
        </div>
        <div class="card">
            <a href="responsavel.php" style="text-decoration: none; color: inherit;">
                <i class="fas fa-file-alt"></i>
                <p>Responsável 1</p>
            </a>
        </div>
        <div class="card logout-card">
            <a href="index.php" style="text-decoration: none; color: inherit;">
                <i class="fas fa-sign-out-alt"></i>
                <p>Deslogar</p>
            </a>
        </div>
    </div>
</body>
</html>