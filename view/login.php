<?php
session_start();


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
    <!-- Navbar -->
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
                        <a class="btn btn-secondary btn-sm" href="#">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary btn-sm" href="cadastro.php">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    


    <div class="container login-container" style="margin-top: 100px;">
        <div class="row login-card">
            <div class="col-md-6 text-center column-image">
                <h1>Faça o login no MathQuest para começar!</h1>
                <img src="img/study.svg" alt="Imagem de Login">
            </div>

            <div class="col-md-6 column-form">
                <form action="TesteLogin.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha:</label>
                        <input type="password" class="form-control" name="password" id="pass" placeholder="Insira sua senha" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
