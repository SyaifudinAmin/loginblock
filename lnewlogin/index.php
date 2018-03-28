<?php
  session_start();
  if(isset($_SESSION['salah'])){
    if($_SESSION['salah']>=3){
      echo '<h1> Anda Diblokir </h1>';
      echo $_SESSION['salah'];
      exit();
    }
  }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-widht,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="asset/css/Style.css">

    </head>
    <body>

        <div class="container">
            <img src="asset/img/banner_login.png">

            <form id="login" action="login.php" method="post">

                <div class="form-input">
                    <!--pada fungsi input harus diberi id agar terbaca di javascript-->
                    <input type="text" name="username" id="username" placeholder="Username" >
                </div>
                <div class="form-input">
                    <input type="password" name="password" id="password" placeholder="Password" >
                </div>

                <input onClick="clicked();" type="submit" name="submit" value="LOG IN" class="btn-login" >

            </form><br>
             <a href="$"> Forget password?</a>
        </div>

        <footer>
            <p>login form<a class="footer-text" href="$">Syaifudin </a>
        </footer>

    </body>
</html>
