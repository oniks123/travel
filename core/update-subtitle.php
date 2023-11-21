<?
    session_start();
    require ("../core/database.php");

    $user_profile = mysqli_fetch_assoc( mysqli_query($db, "SELECT * FROM `users` WHERE `id` = $_SESSION[uid]"));

    if ($user_profile["role"] != "admin") {
        header("location: ../index.php?error=404");
    };

    var_dump ($_POST);

    $update_subtitle = mysqli_query($db, "UPDATE `posts` SET `subtitle` = '$_POST[subtitle]' WHERE `posts`.`id` = $_POST[post_id]");
    
    header("location: ./post.php?id=$_POST[post_id]");

?>