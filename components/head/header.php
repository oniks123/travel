<div class="header-container">
    <div class="header-menu">
        <ul>
            <li>
                <a href="../index.php">Главная</a>
                <a href="../menu/contacts.php">КОНТАКТЫ</a>
                <a href="../menu/about.php">О БЛОГЕ</a>
                <a href="#">РУБРИКИ</a>
            </li>
        </ul>
    </div>

    <div class="profile-cont">

        <?php

            if ($_SESSION) {
 
                $username = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM `users` WHERE `id` = $_SESSION[uid]"));

                ?>
                    <div class="profile-img">
                        <img draggable="false" src="../img/avatars/1.png" alt="">
                    </div>
                    
                    <div class="username">
                        <p><?=$username["username"]?></p>
                    </div>
                    
                    <div class="profil-menu">

                        <?php 
                        
                            if ($username["role"] == "admin") {
                                ?>
                                <div class="profil-menu-cont">
                                    <img draggable="false" src="../img/svg/admin.svg" alt=""> 
                                    <p>Админ панель</p>
                                </div>
                                <?
                            }

                        ?>

                        <div class="profil-menu-cont">
                            <img draggable="false" src="../img/svg/settings.svg" alt=""> 
                            <p>Настройки</p>
                        </div>
                    
                        <div class="profil-menu-cont">
                            <img draggable="false" src="../img/svg/support.svg" alt="">
                            <p>Помощь</p>
                        </div>
                    
                        <a href="../core/logout.php">
                            <div class="profil-menu-cont">
                                <img draggable="false" src="../img/svg/exit.svg" alt=""> 
                                <p>Выйти</p>
                            </div>
                        </a>
                    
                    </div>

                    <script src="../js/profile-menu.js"></script>
                <?
            }
            else {
                ?>
                    <a href="../menu/login.php">Вход</a>
                    <span>|</span>
                    <a href="../menu/register.php">Регистрация</a>
                <?
            }

        ?>

    </div>

</div>
