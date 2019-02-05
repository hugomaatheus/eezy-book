<?php
     
    require_once '../service/my_service.php';
 
    // resgata variáveis do formulário
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    if (empty($email) || empty($password)) {
        header('Location: ../view/user/login.html');
        exit;
    }

    $s = new MyService();
    $users = $s->login($email, $password); 

    if (count($users) <= 0) {
        header('Location: ../view/user/login.html');
        exit;
    }
    
    // pega o primeiro usuário
    $user = $users[0];
 
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    header('Location: ../view/menu/index.php');
