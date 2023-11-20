<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="login-cont">

        <div class="login-head">
            <p>Приключенческий блог</p>
        </div>

        <div class="login-body">
            <form action="../core/login.php" method="post">

                <div class="username">
                    <input type="text" name="login" placeholder="Имя пользователя">
                </div>

                <div class="password">
                    <input type="password" name="password" placeholder="Пароль">
                </div>

                <?php
                
                    if ($_GET && $_GET["error"] == "login") {
                        ?>
                            <div class="error">
                                <p>Неверный логин или пароль</p>
                            </div>
                        <?
                    }

                ?>

                <button type="submit">Войти</button>

            </form>

            <div class="qustians">
                <a href="register.php">Регистрация</a>
                <span>|</span>
                <a href="#">Забыли пароль?</a>
            </div>
        </div>

    </div>
</body>
</html>