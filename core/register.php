<pre>

   <? 

      require ("database.php");

      $tmp_username = $_POST["username"];
      $tmp_number = $_POST["number"];
      $tmp_mail = $_POST["email"];
      $tmp_pass = md5($_POST["password"]);

      $check_username = mysqli_fetch_assoc(mysqli_query ($db, "SELECT * FROM `users` WHERE `username` LIKE '$tmp_username'"));

      if (empty($check_username)) {
         $reg_user = mysqli_query($db,"INSERT INTO `users` (`id`, `username`, `number`, `email`, `password`, `role`) VALUES (NULL, '$tmp_username', '$tmp_number', '$tmp_mail', '$tmp_pass', 'user')");

         $add_profile = mysqli_fetch_assoc( mysqli_query($db,"SELECT * FROM `users` WHERE `username` LIKE '$tmp_username'"));

         session_start();

         $_SESSION["uid"] = $add_profile["id"];
         
         header("location: ../index.php");
      }
      else {
         header("location: ../menu/register.php?error=login");
      }


   ?>

</pre>