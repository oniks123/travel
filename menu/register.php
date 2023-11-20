<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="login-cont">

        <div class="login-head">
            <p>Приключенческий блог</p>
        </div>

        <div class="login-body">
            <form action="../core/register.php" method="post">

                <div class="username">
                    <input type="text" name="username" placeholder="Имя пользователя">
                </div>

                <div class="together">
                    <div class="number">
                        <input type="number" name="number" placeholder="Номер телефона" maxlength="15">
                    </div>
    
                    <div class="email">
                        <input type="email" name="email" placeholder="Почта">
                    </div>
                </div>

                <div class="password">
                    <input type="password" name="password" placeholder="Пароль">
                </div>

                <?php
                
                    if ($_GET && $_GET["error"] == "login") {
                        ?>
                            <div class="error">
                                <p>Имя пользователя уже существует</p>
                            </div>
                        <?
                    }

                ?>

                <button type="submit">Зарегистрироваться</button>

            </form>

            <div class="qustians">
                <a href="login.php">Уже есть аккаунт?</a>
            </div>
        </div>

    </div>
</body>
</html>