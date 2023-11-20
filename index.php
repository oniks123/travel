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

                <div class="post">
                    <div class="post-img">
                        <img draggable="false" src="./img/post-img/2.png" alt="">
                    </div>

                    <div class="post-title">
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="post-subtitle">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto fugiat sunt modi hic esse in ad explicabo, dignissimos nisi aut atque nostrum, molestias, pariatur totam rerum ea distinctio? Eos, tenetur.</p>
                    </div>

                    <div class="post-more">
                        <a href="#">Читать далее &rarr;</a>
                        <p>12.11.2023</p>
                    </div>
                </div>

                <div class="post">
                    <div class="post-img">
                        <img draggable="false" src="./img/post-img/1.png" alt="">
                    </div>

                    <div class="post-title">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, maxime eligendi necessitatibus facilis perspiciatis repudiandae. Modi facere ab laborum incidunt id temporibus quod harum deleniti esse, tempore ex necessitatibus. Ipsam.</p>
                    </div>

                    <div class="post-subtitle">
                        <p>QQ</p>
                    </div>

                    <div class="post-more">
                        <a href="#">Читать далее &rarr;</a>
                        <p>12.11.2023</p>
                    </div>
                </div>

                <div class="post">
                    <div class="post-img">
                        <img draggable="false" src="./img/post-img/3.png" alt="">
                    </div>

                    <div class="post-title">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nobis quidem laudantium nam neque fugiat! Quasi ex non animi. Similique saepe consequuntur at itaque? Adipisci laborum aperiam voluptatibus nam odio!</p>
                    </div>

                    <div class="post-subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore minima voluptate maxime voluptatum nesciunt rerum temporibus. Ipsam ad mollitia rerum optio. Dignissimos ex, laboriosam neque aspernatur quod consequuntur cupiditate odit?</p>
                    </div>

                    <div class="post-more">
                        <a href="#">Читать далее &rarr;</a>
                        <p>12.11.2023</p>
                    </div>
                </div>

                <div class="post">
                    <div class="post-img">
                        <img draggable="false" src="./img/post-img/1.png" alt="">
                    </div>

                    <div class="post-title">
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="post-subtitle">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, officiis?</p>
                    </div>

                    <div class="post-more">
                        <a href="#">Читать далее &rarr;</a>
                        <p>12.11.2023</p>
                    </div>
                </div>

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