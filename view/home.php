
<?php
session_start();

if (isset($_SESSION['user_email'])) {
    header('Location: Principal.php');
    exit();
}
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MathQuest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png">

</head>

<body>
     
    <nav class="navbar  fixed-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Bootstrap" width="40" height="40">
                <img src="img/logoNome.png" alt="Bootstrap" width="130" height="30">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-secondary btn-sm" href="login.php">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary btn-sm" href="cadastro.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">

                </ul>
            </div>
        </div>
    </nav>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text">
                        <p>Faça parte da nossa plataforma!</p>
                        <p id="frase">Aprenda e pratique Matemática para o <span class="enem">ENEM</span></p>
                    </div>
                    <div class="buttons">
                        <a class="btn btn-secondary btn-sm" href="cadastro.php">Começar</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="img/blackboard.svg" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>
    <section class="setup">
        <div class="container">
            <div class="text-header text-center">
                <h3>Conheça os principais pontos do nosso site</h3>
            </div>

            <div class="items text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class="icons">
                            <img src="img/study.png" alt="">
                        </div>
                        <div class="desc">
                            <h5>Aprendizagem no Ritmo do Aluno</h5>
                            <p>Os alunos aprendem no próprio ritmo, superando dificuldades e acelerando o progresso
                                conforme
                                dominam os conteúdos, garantindo uma experiência personalizada.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icons">
                            <img src="img/book.png" alt="">
                        </div>
                        <div class="desc">
                            <h5>Conteúdo Adaptado ao ENEM</h5>
                            <p>O conteúdo da MathQuest cobre os principais tópicos de matemática do ENEM, oferecendo
                                lições
                                e exercícios interativos essenciais para o sucesso.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icons">
                            <img src="img/xp.png" alt="">
                        </div>
                        <div class="desc">
                            <h5>Engajamento e Recompensas</h5>
                            <p>Ao completar exercícios e quizzes, os alunos ganham pontos de experiência (XP) e sobem de
                                nível, criando uma experiência de aprendizado envolvente, que estimula o progresso e o
                                sucesso acadêmico.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>