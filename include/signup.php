<?php
session_start();
   include "/openserver/domains/localhost/include/connect.php";
    $error = [];
    $flag = 0;


   if(isset($_POST['register']))
   {
       $login = $_POST['login'];
       $password = $_POST['password'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $name = $_POST['name'];
       $surname = $_POST['surname'];
   }
 if(!$login || !$password || !$email || !$phone) 
      { 
        $_SESSION['message'] = 'Введите данные в пустые поля';
        header('location:../register.php'); 
        exit;
      }
        $password = md5($password);
         $query = "INSERT INTO `users`(`login`, `password`, `email`, `phone`, `name`, `surname`) VALUES ('$login','$password','$email','$phone','$name','$surname')";
          mysqli_query($link, $query);
          $_SESSION['message'] = 'Вы успешно зарегистрировались';
          header('location:../login.php');
   ?>