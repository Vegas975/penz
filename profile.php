
<?php 
session_start();
   include "/openserver/domains/localhost/include/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Дары Пензы - Лучшие продукты , наилучшего качества от топовых ферм России">
    <meta name= "keywords" content="Свежие фрукты, Овощи дешево, Проудкты от фермеров">
    <title>Дары пензы - Авторизация</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Дары пензы</title>
</head>
<body>
    <header class="header">
        <a href="index.html" class="logo">
            <img src="/img/logo.png" alt="logo">
        </a>
        <nav>
            <ul class="nav">
                <li class="nav-item">  
                    <a href="#" class="nav-link--store">Корзина</a>
                </li>
                <li class="nav-item">
                    <a href="/login.php" class="nav-link--profile">Профиль</a>
                </li>
            </ul>
        </nav>
</header>
<div class="wrapper">
    <script src="/js/script.js"></script>
    <div class="main-img">
    <img src="/img/linemenu.png" class="main-img_image">
   </div>
</div>
</selection>
<div class="inform">
    <div class="maintext">
        <p class="LC">Личный профиль</p>
    </div>
</div>
    <div class="bguser">
            <p class="lc2">Добро пожаловать -<span class="hi2"><?php echo $_SESSION['user']['name']?></span></p>
    </div>  
    <div class="styleprofile">
    <P class="storeend">Имя:<span class="logindb"><?php echo $_SESSION['user']['name']?></p>
    <P class="storeend">Фамилия:<span class="logindb"><?php echo $_SESSION['user']['surname']?></p>
    <P class="emailcontact">Почта:<span class="logindb"><?php echo $_SESSION['user']['email']?></p>
    <P class="namecontact">Логин:<span class="logindb"><?php echo $_SESSION['user']['login']?></span></p>
    <P class="phonecontact">Телефон:<span class="logindb"><?php echo $_SESSION['user']['phone']?></p>
    </div>
    <div class="bwal">
           <a href="index.html" class="borderblock"><span class="storetext">Мои покупки</span></a>
           </div>
     </div>
    </div>
</main>
</body>
</html>
