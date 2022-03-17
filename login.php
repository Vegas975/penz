<?php
session_start(); 
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Дары Пензы - фермерские продукты , свежие продукты от лучших фермеров России">
    <meta name="keywords" content="Фермеры России, Фермерские продукты, Свежие фрукты">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css" rel="stylesheet">
</head>
<body>
    <div class="logo">
    <img class="logodiv" src="/img/logoreg.png">
    </div>
    <div class="registration-form">
        <form action="include/signin.php" method="post">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="login" id="login" placeholder="Введите логин">
                <?php echo $error['login'] ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" name ="register" class="btn btn-block create-account">Создать аккаунт</button>
            <div class="maintextdiv">
            <a href="login.php" class="main-text-dar_link">
               У меня уже есть аккаунт
            </a>
            <?php
            if(isset($_SESSION['message'])){
                echo '<p class="msg">'.$_SESSION['message'] .'</p>';
            }
            unset($_SESSION['message']);
            ?>
            </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
