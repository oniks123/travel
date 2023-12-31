<?php  
    require ("database.php");
    session_start();
    $posts = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `posts` WHERE `id` = ($_GET[id]) "));  
    if (empty($_GET["id"])) {
        header ("../index.php?error=404");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$posts["title"]?></title>
    <link rel="stylesheet" href="../css/posts.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">

    <link rel="stylesheet" href="../css/media/head-media.css">
    <link rel="stylesheet" href="../css/media/post-media.css">
    <link rel="stylesheet" href="../css/media/footer-media.css">
</head>
<body>
    <header>
        <?php require ("../components/head/header.php"); ?>
    </header>

    <main>
        <div class="post">
            <div class="post-img">
                <img draggable="false" src="../img/post-img/<?=$posts["img"]?>" alt="">
            </div>

            <div class="post-title">

                <?php 
                
                    if ($_SESSION) {
                        $role_user = mysqli_fetch_assoc ( mysqli_query ($db,"SELECT * FROM `users` WHERE `id` = $_SESSION[uid]"));

                        if ($role_user["role"] == "admin") {
                            ?>
                                <form action="./update-title.php" method="post">
                                    <input type="hidden" name="post_id" value="<?=$posts["id"]?>">
                                    <input onchange="submit();" name="title" value="<?=$posts["title"]?>"></input>
                                </form>                                    
                            <?
                        }
                        else {
                            ?><p><?=$posts["title"]?></p><?
                        }
                    }
                    else {
                        ?><p><?=$posts["title"]?></p><?
                    }

                ?>

            </div>

            <div class="post-subtitle">
                <?php 
                
                    if ($_SESSION) {

                        if ($role_user["role"] == "admin") {
                            ?>
                                <form action="./update-subtitle.php" method="post">
                                    <input type="hidden" name="post_id" value="<?=$posts["id"]?>">
                                    <textarea onchange="submit();" oninput="autoResize()" id="myTextarea" name="subtitle"><?=$posts["subtitle"]?></textarea>
                                </form>    
                                
                                <script>
                                    function submit() {
                                        FormUser = document.querySelector(".form-user").submit();
                                    }

                                    document.addEventListener('DOMContentLoaded', function() {
                                        autoResize(); // Вызываем autoResize при загрузке страницы
                                    });

                                    function autoResize() {
                                        const textarea = document.getElementById('myTextarea');
                                        textarea.style.height = 'auto'; // Сбрасываем предыдущую высоту
                                        textarea.style.height = textarea.scrollHeight + 'px'; // Устанавливаем высоту равной высоте содержимого
                                    }
                                </script> 
                            <?
                        }
                        else {
                            ?><p><?=$posts["subtitle"]?></p><?
                        }
                    }
                    else {
                        ?><p><?=$posts["subtitle"]?></p><?
                    }

                ?>
            </div>
        </div>
    </main>

    <footer>
        <?require ("../components/footer/footer.php")?>
    </footer>
</body>
</html>


