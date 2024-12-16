<?php
require_once '../model/User.php';  
require_once '../config/DataBase.php';
require_once '../config/session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header('Location: login.php?error=empty_fields');
        exit();
    }

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);
    $user->email = $email;

    $stmt = $user->read();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $stored_password = $row['password'];

        if ($password === $stored_password) {
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['ID'];


            
            header('Location: Principal.php');

        } else {
            header('Location: login.php?error=incorrect_password');
            exit();
        }
    } else {
        header('Location: login.php?error=email_not_found');
        exit();
    }
} 
else {
    header('Location: login.php?error=invalid_access');
    exit();
}
?>
