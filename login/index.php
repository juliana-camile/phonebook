<?php
// Inicializar a sessão (se não estiver iniciada)
session_start();

// Verificar se o usuário já está logado, redirecionar para a página principal se estiver
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Verificar se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar as credenciais (você deve implementar a lógica de autenticação adequada)
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificação fictícia (substitua pela autenticação real)
    if ($email == 'usuario@example.com' && $senha == 'senha123') {
        // Autenticação bem-sucedida, redirecionar para a página principal
        $_SESSION['user_id'] = 1; // Você pode armazenar informações do usuário na sessão
        header("Location: index.php");
        exit();
    } else {
        // Exibir mensagem de erro se as credenciais forem inválidas
        $erro = "Credenciais inválidas. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    
    <style>
        body {
            background-image: url(' imagem/fundo-azul (1).jpg'); /* Substitua 'fundo.jpg' pelo caminho da sua imagem de fundo */
           
            background-size: cover;
            font-family: Arial, sans-serif;
            
        
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: 
            padding: 20px;
            border-radius: 10px;
        }
        .user-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        
        
        .form-group {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .login-btn {
            background-color: #4CAF50;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .criar-conta {
            color: black;
            text-align: center;
            margin-top: 20px;
        }
        h1 {
            color: <?php echo isset($_GET['cor']) ? $_GET['cor'] : 'white'; ?>;
        }
        h1 {
  border-bottom: 6px solid white;
        }

    </style>
</head>
<body>
    
<div>

<h1 style="text-align:center;"><i>MY PHONEBOOK</i>


</div>

<div class="container">
<img class="user-image" src="imagem/downloadm.png" alt="Imagem do Usuário"> <!-- Substitua 'usuario.jpg' pelo caminho da imagem do usuário -->
        <h2>Login</h2>
        <?php if (isset($erro)) { ?>
            <p style="color: red;"><?php echo $erro; ?></p>
        <?php } ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <div class="criar-conta">
            <p><b></b>Não tem uma conta? <a href="criar_conta.php"><b></b>Criar Conta</a></p>
        <div class="esqueci-senha">
        <p><b></b>Esqueci minha senha! <a href="esqueci_senha.php"><b></b>Esqueci a senha
    </div>
</body>
</html>
