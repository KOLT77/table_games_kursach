<?require 'head.php';?>
<body>
   <div class="main-block">
      <div class="container paper">
         <?require 'header.php';?>
         <div id="main">
            <div id="catalog">
               <h2><a class="post_ttl">УСПЕШНАЯ РЕГИСТРАЦИЯ</a></h2>
               <div id="basket" style="background:none;">
                  <?php 
                     if (isset($_SESSION['login'])) {
				echo '<script>location.href="index.php"</script>';
			}
			else {
				$login=htmlspecialchars($_POST['login']);
				$password=htmlspecialchars($_POST['password']);
				$logins=file('files/logins3Fd2D093F23d5FQ2O2.txt', FILE_IGNORE_NEW_LINES);

				for ($i=0; $i<count($logins); $i++)
				{
				   if ($login==$logins[$i])
				   {
				      $_SESSION['login_already_exist']=true;
				      echo '<script>location.href="registration.php"</script>';
				      exit;
				   }
				}

				file_put_contents('files/logins3Fd2D093F23d5FQ2O2.txt', $login."\n", FILE_APPEND);
				file_put_contents('files/passwords9Y79Hqyd83JNBX8Q12.txt', $password."\n", FILE_APPEND);
				$_SESSION['login']=$login;
				echo '<p align="center" style="font-size:28px;color:#000;font-weight:bold;"> Вы успешно зарегистрированы!</p>';
			     }      
                  ?>
               </div>
            </div>
         </div>
         <div class="clear-both"></div>
      </div>
   </div>
   <?require 'footer.php';?>
   </div>
</body>
</html>
