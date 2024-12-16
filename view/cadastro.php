<?php
require_once '../controller/UserController.php';

// Crie uma instância do controlador
$userController = new UserController();

// Inicialize variáveis para armazenar mensagens de erro e sucesso
$error_message = '';
$success_message = '';

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date_birth = $_POST['date_birth'];
    $password = $_POST['password'];

    // Validação dos campos
    if (empty($name) || empty($email) || empty($phone) || empty($date_birth) || empty($password)) {
        $error_message = "Todos os campos são obrigatórios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "O email fornecido não é válido.";
    } else {
        // Crie um novo usuário e obtenha o resultado
        $result = $userController->createUser($name, $email, $phone, $date_birth, $password);
        if ($result === "User created successfully.") {
            $success_message = "Cadastro realizado com sucesso.";
        } else {
            $error_message = $result; // Mensagem retornada pelo controlador
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="background: #F5F5F5;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="img/logo.png" alt="Logo" width="40" height="40">
                <img src="img/logoNome.png" alt="Nome da Logo" width="130" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-secondary btn-sm" href="login.php">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary btn-sm" href="#">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container login-container">
        <div class="row login-card">
            <div class="col-md-6 text-center column-image">
                <h1>Crie sua conta no MathQuest e aprenda conosco!</h1>
                <img src="img/sign.svg" alt="Imagem de Login">
            </div>

            <div class="col-md-6 column-form">
                <form action="cadastro.php" method="POST">
                    <?php if ($error_message): ?>
                        <script>
                            alert("<?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?>");
                        </script>
                    <?php endif; ?>
                    <?php if ($success_message): ?>
                        <script>
                            alert("<?php echo htmlspecialchars($success_message, ENT_QUOTES, 'UTF-8'); ?>");
                            window.location.href = "login.php"; // Redireciona após o sucesso
                        </script>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="Nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome"
                        name="name" placeholder="Insira seu nome">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu email">
                    </div>
                    <div class="mb-3">
                        <label for="Telefone" class="form-label">Telefone:</label>
                        <input type="tel" class="form-control" name="phone" id="tel" placeholder="Insira seu telefone">
                    </div>
                    <div class="mb-3">
                        <label for="Data de nascimento" class="form-label">Data de nascimento:</label>
                        <input type="date" class="form-control" name="date_birth" id="data_nasc" >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Insira sua senha">
                    </div>
                    <div class="text-center">
                        <button  type="submit" name="submit" id="Cadastrar" class="btn  btn-sm">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
