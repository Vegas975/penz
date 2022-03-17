<?php
/*/ $_SESSION['message'] = 'Введите данные в пустые поля';
        header('location:../register.php');/*/
        session_start();
   include "/openserver/domains/localhost/include/connect.php";
    $login = $_POST['login'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $password = md5($_POST['password']);
    $check_users = mysqli_query($link,"SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    if(mysqli_num_rows($check_users) > 0) 
    {
        $user = mysqli_fetch_assoc($check_users);
        $_SESSION['user'] = [
            "login" => $user['login'],
            "name" => $user['name'],
            "surname" => $user['surname'],
            "email" => $user['email'],
            "phone" => $user['phone'],
        ];
        header('location:../profile.php');
    }
    else{
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('location:../login.php');
    }
   ?>
