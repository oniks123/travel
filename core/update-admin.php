<?
    session_start();
    require ("../core/database.php");

    $user_progile = mysqli_fetch_assoc( mysqli_query($db, "SELECT * FROM `users` WHERE `id` = $_SESSION[uid]"));

    if ($user_progile["role"] != "admin") {
        header("location: ../index.php?error=404");
    };

    $id = $_POST["id"];
    $role = $_POST["role"];
    $username = $_POST["username"];

    $update_role = mysqli_query($db, "UPDATE `users` SET `username` = '$username', `role` = '$role' WHERE `users`.`id` = $id");

    var_dump($_SESSION);

    // $_SESSION["role"] = "$role";
    // $_SESSION["name"] = "$username";  Надо как-то обновлять сессию чела которому обновил должность
    
    header("location: ../admin/users.php");

?>