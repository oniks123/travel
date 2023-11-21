<?
    session_start();
    require ("../core/database.php");

    $user_profile = mysqli_fetch_assoc( mysqli_query($db, "SELECT * FROM `users` WHERE `id` = $_SESSION[uid]"));

    if ($user_profile["role"] != "admin") {
        header("location: ../index.php?error=404");
    };

    var_dump ($_POST);

    

    // $update_post = mysqli_query($db, "UPDATE `users` SET `username` = '$username', `role` = '$role' WHERE `users`.`id` = $id");

    
    header("location: ../admin/users.php");

?>