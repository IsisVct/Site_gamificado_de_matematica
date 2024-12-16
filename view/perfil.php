<?php
session_start(); 

require_once '../config/DataBase.php';
require_once '../model/User.php';
require_once '../controller/UserController.php';
require_once '../model/Achievement.php'; 

$controller = new UserController();
$achievementModel = new Achievement(); 

if (!isset($_SESSION['user_email'])) {
    echo "Erro: Usuário não autenticado.";
    exit;
}

$userEmail = $_SESSION['user_email'];
$userData = $controller->getUserByEmail($userEmail);

if (!$userData) {
    echo "Erro: Usuário não encontrado.";
    exit;
}

$userName = $userData['name'];
$userXP = $userData['XP'];
$userLevel = $userData['level'];

$userId = $userData['ID']; 
$userAchievements = $achievementModel->getUserAchievements($userId); 

$userStreak = $userData['days_streak'];
$foguinhoImg = $userStreak > 0 ? "foguinho_aceso.png" : "foguinho_apagado.png";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MathQuest - Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh;
    margin: 0;
    padding-top: 56px; 
}

.main-container {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
    max-width: 500px;
    width: 100%;
    margin-top: 20px; 
}


        .profile-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .info-container {
            margin-top: 40px;
            background-color: #5f15b3;
            border-radius: 15px;
            padding: 20px;
            color: white;
        }

        .info-icons {
            display: flex;
            justify-content: space-between;
            text-align: center;
        }

        .info-icons div {
            flex: 1;
        }

        .info-icons i {
            font-size: 30px;
            margin-bottom: 5px;
        }

        .info-container p {
            font-weight: 400;
            font-size: 14px;
            line-height: 22px;
            max-width: 284px;
            margin: 0 auto;
        }

        .btn-edit-profile {
            padding: 6px 15px;
            font-size: 14px;
        }

        .navbar {
            background-color: #f8f9fa;
        }

        .achievements {
            margin-top: 20px;
        }

        .achievement-item {
            border: 1px solid #5f15b3;
            border-radius: 8px;
            padding: 10px;
            margin: 5px 0;
            display: flex;
            align-items: center;
        }

        .achievement-img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Bootstrap" width="40" height="40">
                <img src="img/logoNome.png" alt="Bootstrap" width="130" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto">
                    <ul class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Minha conta
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Principal.php">Materias</a></li>
                            <li><a class="dropdown-item" href="ranking.php">Ranking</a></li>
                            <li>
                            <li><a class="dropdown-item" href="performance_graph.php">Proguesso</a></li>

                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../config/logout.php">Sair</a></li>
                        </ul>
                    </ul>

                </form>
            </div>
        </div>
    </nav>

    <div class="main-container">
        <div class="profile-section">
            <img src="img/FotoPerfil.png" alt="Perfil" class="profile-img">
            <h5><?php echo $userName; ?></h5>
            <p><?php echo $userEmail; ?></p>
        </div>

        <div class="info-container">
            <div class="info-icons">
                <div>
                    <i class="fas fa-coins"></i>
                    <p><?php echo $userXP; ?></p>
                    <p>Pontuação</p>
                </div>
                <div>
                    <i class="fa-solid fa-turn-up"></i>
                    <p><?php echo $userLevel; ?></p>
                    <p>Nível</p>
                </div>
                <div>
                    <img src="img/<?php echo $foguinhoImg; ?>" alt="Foguinho" style="width: 50px; height: auto;">
                    <p>Dias de ofensiva: <?php echo $userStreak; ?></p>

                </div>

            </div>
        </div>
        <div class="achievements">
            <h5>Conquistas</h5>
            <?php if (count($userAchievements) > 0): ?>
                <?php foreach ($userAchievements as $achievement): ?>
                    <div class="achievement-item">
                        <img src="<?php echo $achievement['badge_image']; ?>" alt="Badge" class="achievement-img">
                        <div>
                            <strong><?php echo $achievement['achievement_name']; ?></strong>
                            <p><?php echo $achievement['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Você ainda não conquistou nada.</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>