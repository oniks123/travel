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
        <?php
            require ("./core/database.php");
            require ("./components/head/header.php");
        ?>  
              
    </header>

    <main>    

        <section class="posts">

            <div class="post-cont">

                <div class="slider-wrapper">

                    <div class="slider-slide">

                        <div class="bg-post">
                            <img src="./img/bg-post/maldivs.jpg" alt="">
                        </div>

                        <div class="post-title">
                            <a href="#">Поездка на мальдивы</a>
                        </div>

                    </div>

                    <div class="slider-slide">

                        <div class="bg-post">
                            <img src="./img/bg-post/2.jpg" alt="">
                        </div>

                        <div class="post-title">
                            <a href="#">Поездка в Геленджик</a>
                        </div>

                    </div>

                    <div class="slider-slide">

                        <div class="bg-post">
                            <img src="./img/bg-post/3.jpg" alt="">
                        </div>

                        <div class="post-title">
                            <a href="#">Поездка в сочи</a>
                        </div>

                    </div>

                    <div class="slider-slide">

                        <div class="bg-post">
                            <img src="./img/bg-post/4.jpg" alt="">
                        </div>

                        <div class="post-title">
                            <a href="#">Поездка в Дубай</a>
                        </div>

                    </div>

                </div>

                <button id="prevBtn">&lsaquo;</button>
                <button id="nextBtn">&rsaquo;</button>

            </div>

        </section>

    </main>

    <footer>
        <?require ("./components/footer/footer.php")?>
    </footer>

    <script src="./js/slider.js"></script>
</body>
</html>