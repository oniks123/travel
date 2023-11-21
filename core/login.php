<?
   session_start();
   
   require ("database.php");

   $tmp_login = $_POST["login"];
   $tmp_pass =  md5($_POST["password"]);

   $check = mysqli_fetch_assoc( mysqli_query($db,"SELECT * FROM `users` WHERE `username` LIKE '$tmp_login' AND `password` LIKE '$tmp_pass'"));
   
   if (!empty($check)){
      $_SESSION["uid"] = $check["id"];

      header("location: ../index.php");
   }
   else
      header("location: ../menu/login.php?error=login");
?>

