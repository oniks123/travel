<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приключенческий блог</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <?require ("./components/head/header.php")?>
    </header>

    <main>
        
        <section class="posts">

            <div class="post-cont">
                <div class="post-head">
                    
                    <div class="post-title">
                        <h3><a href="#">Поездка на Мальдивы</a></h3>
                    </div>

                    <span class="date">15.11.2023</span>
                    
                </div>

                <div class="post-body">

                    <div class="description">
                        <p>
                            Друзья, сегодня я хочу рассказать вам о нашей незабываемой поездке на Мальдивы. Это было настоящее путешествие мечты для меня и моего партнера. <br>
                            Наша приключенческая история началась с волнующего перелета в Международный аэропорт Мале. С первых минут мы ощутили атмосферу роскоши и умиротворения, которая окружала нас на этом роскошном острове.
                        </p>
                    </div>

                    <div class="post-info">

                        <p><strong>Информация о поездке</strong></p>

                        <ul>
                            <li>Количество людей в поездке: <strong>2</strong></li>
                            <li>Дней в путишествии: <strong>20</strong></li>
                            <li>Транспорт: <strong>Самолет, скоростной катер, лодка</strong></li>
                            <li>Сумма поездки: <strong>12.300.000</strong></li>
                        </ul>
                    </div>
                </div>

                <div class="read-more">
                    <a href="#">Читать далее...</a>
                </div>
            </div>

            <div class="post-cont">
                <div class="post-head">
                    
                    <div class="post-title">
                        <h3><a href="#">Поездка на Мальдивы</a></h3>
                    </div>

                    <span class="date">15.11.2023</span>
                    
                </div>

                <div class="post-body">

                    <div class="description">
                        <p>
                            Друзья, сегодня я хочу рассказать вам о нашей незабываемой поездке на Мальдивы. Это было настоящее путешествие мечты для меня и моего партнера. <br>
                            Наша приключенческая история началась с волнующего перелета в Международный аэропорт Мале. С первых минут мы ощутили атмосферу роскоши и умиротворения, которая окружала нас на этом роскошном острове.
                        </p>
                    </div>

                    <div class="post-info">

                        <p><strong>Информация о поездке</strong></p>

                        <ul>
                            <li>Количество людей в поездке: <strong>2</strong></li>
                            <li>Дней в путишествии: <strong>20</strong></li>
                            <li>Транспорт: <strong>Самолет, скоростной катер, лодка</strong></li>
                            <li>Сумма поездки: <strong>12.300.000</strong></li>
                        </ul>
                    </div>
                </div>

                <div class="read-more">
                    <a href="#">Читать далее...</a>
                </div>
            </div>

        </section>
        
        <section class="info">
            <?require ("./components/info/info.php")?>
        </section>

    </main>

    <footer>
        <?require ("./components/footer/footer.php")?>
    </footer>
</body>
</html>