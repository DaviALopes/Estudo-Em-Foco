<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $adminUsername = "admin";
    $adminPassword = "admin";

    if ($username === $adminUsername && $password === $adminPassword) {
        if ($role === 'professor') {
            header('Location: pagina-professor.php'); 
            exit();
        } elseif ($role === 'aluno') {
            header('Location: pagina-aluno.php');
            exit();
        }
    } else {
        echo "<script>alert('Usuário ou senha inválidos!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo em Foco - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos da página */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #5db8ff;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Estilo do título */
        h1 {
            font-size: 2.5em;
            color: white;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Estilos do container do formulário */
        .login-container {
            background-color: #e0f2ff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        /* Estilos dos botões de rádio (Professor/Aluno) */
        .role-selector {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .role-selector label {
            font-size: 1em;
            color: #333;
        }

        /* Estilos dos ícones e inputs */
        .input-field {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            background-color: #fff;
            border-radius: 5px;
            padding: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .input-field i {
            font-size: 20px;
            margin-right: 10px;
            color: #333;
        }

        .input-field input {
            border: none;
            outline: none;
            font-size: 1em;
            flex: 1;
        }

        /* Estilo do botão Entrar */
        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #4a4a4a;
            color: #fff;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div>
        <h1>Estudo em Foco</h1>
        <div class="login-container">
            <form method="POST" action="">
                <div class="role-selector">
                    <label><input type="radio" name="role" value="professor" required> Professor</label>
                    <label><input type="radio" name="role" value="aluno" required> Aluno</label>
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Usuário" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Senha" required>
                </div>
                <button class="login-button" type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>