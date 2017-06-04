<div id="header">
   <div class="logo">
      <a href="index.php"><img src="images/logotip.png"></a>
   </div>
   <div id="basket" class="float-right">
      <?php
         if (isset($_SESSION['login'])) {
             if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
                 $orderscount = file('files/ordersitems8Qi2kd3GD38Smq9Fs2.txt', FILE_IGNORE_NEW_LINES);
                 echo '<a href="new_orders.php">  Новые заказы: ', count($orderscount), '</a>
                  ';
             } else {
                 echo ' <a href="basket.php"> Товаров в корзине: ', $_SESSION['basketcounter'], '</a>
                  ';
             }
         } else
             echo '<a href="basket.php"> Товаров в корзине: ', $_SESSION['basketcounter'], '</a>
                  ';
         ?>
   </div>
   <div class="header_info">
      <div class="daynews">
         <?
            $daynews = file('files/daynews.txt', FILE_IGNORE_NEW_LINES);
            for ($i = 0; $i < count($daynews); $i++) {
                echo $daynews[$i];
            }
         ?>
      </div>
      <div class="reg">
         <?php
            if (isset($_SESSION['login'])) {
                if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
                    echo '<p>Здравствуйте, ', $_SESSION['login'], '  Роль: администратор <a href="exit.php">Выйти</a>  <a href="cabinet.php">Панель управления</a> </p>';
                } else {
                    echo '<p>Здравствуйте, ', $_SESSION['login'], '  Роль: пользователь <a href="exit.php">Выйти</a></p>';
                }
            }

            else
                echo '<p>Авторизация <form method="post" action="login.php">
                        <input type="text" placeholder="Логин" name="login" required>
                        <input type="password" placeholder="Пароль" name="password" required>
                        <input type="submit" value="Войти">
                        </form><a href="registration.php">Зарегистрироваться</a></p>';
            ?>
      </div>
   </div>
   <div class="clear-both"></div>
</div>
<div class="menu">
   <ul id="menu">
      <li>
         <a href="index.php">ГЛАВНАЯ</a>
      </li>
      <li>
         <a href="about.php">О НАС</a>
      </li>
      <li>
         <a href="shipping.php">ДОСТАВКА</a>
      </li>
      <li>
         <a href="pay.php">ОПЛАТА</a>
      </li>
      <li>
         <a href="contacts.php">КОНТАКТЫ</a>
      </li>
      <li>
         <a href="quest.php">ГОСТЕВАЯ</a>
      </li>
   </ul>
</div>
