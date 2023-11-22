<?session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приключенческий блог</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/media/head-media.css">
    <link rel="stylesheet" href="./css/media/media.css">
    <link rel="stylesheet" href="./css/media/footer-media.css">
</head>
<body>

    <header>
        <?php
            require ("./core/database.php");
            require ("./components/head/header.php");
        ?>  
              
    </header>

    <main>    

        <section class="welcome">
            <div class="welcome-title"><p>Приключенческий блог</p></div>
        </section>

        <section class="info">
            <div class="info-text">
                <p>
                    Приключенческий блог был запущен в 2007 году как блог-сайт и превратился в веб-сайт с преданными подписчиками и социальным сообществом с некоторыми из самых известных имен в скалолазании, пешем туризме, альпинизме, езде на велосипеде, каякинге, путешествиях и любых других бесстрашных занятиях на свежем воздухе! 
                    <br> 
                    <br> 
                    Это сообщество веб-сайта и его коллекция мудрости, экспертных знаний и опыта были созданы для вас...
                    Итак, какой бы ни была ваша склонность к приключениям или внешнее любопытство... добро пожаловать!
                </p>
            </div>
        </section>

        <section class="posts">
            <div class="posts-title"><p>Наши путешествия</p></div>

            <div class="postos-cont">

                <?php 

                $post = mysqli_fetch_all(mysqli_query($db, "SELECT * FROM `posts`"));             

                    foreach ($post as $post) {
                        ?>
                        
                            <div class="post">
                                <div class="post-img">
                                    <img draggable="false" src="./img/post-img/<?=$post["1"]?>" alt="">
                                </div>
            
                                <div class="post-title">
                                    <p><?=$post["2"]?></p>
                                </div>
            
                                <div class="post-subtitle">
                                    <p><?=$post["3"]?></p>
                                </div>
            
                                <div class="post-more">
                                    <a draggable="false" href="./core/post.php?id=<?=$post["0"]?>">Читать далее &rarr;</a>
                                    <p><?=$post["4"]?></p>
                                </div>
                            </div>

                        <?
                    }
                
                ?>
                
            </div>
        </section>

        <section class="author">

            <div class="author-left">
                <div class="author-title">
                    <p>Kirill Oniks</p>
                </div>
                <div class="author-quality">
                    <p>Организованность</p>
                    <p>Креативность</p>
                    <p>Стиль письма</p>
                    <p>Отвага</p>
                    <p>Интуиция</p>
                </div>
                
            </div>
            <div class="author-right">
                <img draggable="false" src="./img/author/11.png" alt="">
            </div>

        </section>

    </main>

    <footer>
        <?require ("./components/footer/footer.php")?>
    </footer>
</body>
</html>