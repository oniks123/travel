<?php  
    require ("database.php");
    $posts = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `posts` WHERE `id` = ($_GET[id]) "));     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$posts["title"]?></title>
    <link rel="stylesheet" href="../css/posts.css">
</head>
<body>
    
</body>
</html>

<div class="post">
    <div class="post-img">
        <img draggable="false" src="../img/post-img/<?=$posts["img"]?>" alt="">
    </div>

    <div class="post-title">
        <p><?=$posts["title"]?></p>
    </div>

    <div class="post-subtitle">
        <p><?=$posts["subtitle"]?></p>
    </div>
</div>
