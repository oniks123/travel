<?php 

?>
<div class="info-block" id="autoriz">
    <?php 
    
        if (!$_SESSION) {
            ?>
                <div class="enter-cont">
                    <div class="enter-head">
                        <h3>Войти</h3>
                    </div>

                    <div class="enter-body">
                        
                        <div class="enter-form">

                            <form action="../core/login.php" method="post">

                                <div class="login">
                                    <p>Имя пользователя</p>
                                    <input type="text" name="login">
                                </div>

                                <div class="password">
                                    <p>Пароль</p>
                                    <input type="password" name="password">
                                </div>

                                <?php
                                    if ($_GET && $_GET["error"] == "login") {
                                       ?><p class="error-text">Неверный логин или пароль</p><? 
                                    }
                                ?>

                                <button type="submit" class="enter-btn">Войти</button>

                            </form>

                        </div>

                        <div class="register">
                            <a href="">Регистраиция</a>
                            <span>|</span>
                            <a href="">Забыли пароль?</a>
                        </div>

                    </div>
                </div>
            <?
        }

        else {
            
            ?>
                <div class="enter-cont">
                    <div class="enter-head">
                        <h3>Профиль</h3>
                    </div>

                    <div class="enter-body">
                        
                        <div class="profil">
                            <div class="photo">
                                <img src="../img/avatars/1а.png" alt="">
                            </div>

                            <div class="username">
                                <p><?=$username["username"]?></p>
                            </div>
                        </div>

                    </div>

                    <div class="logout">
                        <a href="../core/logout.php">Выход</a>
                    </div>
                </div>
            <?
        }
        
    ?>            
</div>

<div class="info-block">
    <div class="enter-cont">
        <div class="enter-head">
            <h3>Заметки</h3>
        </div>

        <div class="enter-body">
            
           <div class="notes">
                <p>Сделать слайдер с путеществиями</p>
                <p>Поменять дизайн шапки</p>
           </div>

        </div>
    </div>
</div>