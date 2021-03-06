<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="apple-touch-icon" sizes="180x180" href="./asset/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./asset/favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
</head>
<body class="body">
    <header>
        <div class="js_menu_mobile_hidden">
            <ul>
                <li class="icon_close"> <span class="material-symbols-outlined">
                    close
                    </span>  </li>
                <li><a href="./index.php">Accueil</a></li>
                <li class="dark_li">Mode sombre</li>
                <li class="login_li"><a href="./logout.php">Connexion</a></li>
            </ul>
        </div>


        <h2 class="h2" style="display:none">q</h2>
        <p class="p" style="display:none">q</p>

        <div class="opacity_menu_off">

        </div>
        <img src="./asset/menu_1.png" alt="icone menu" class="icon_show">
        <h1 class="h1"><span>Log</span> In</h1>
         <!-- <ul class="nothing">
          
            <li><a href="#"><img src="./asset/LOGIN_deux.png" alt="icone de connexion"></a></li>
            <li><a href="#"><img src="./asset/moon_png.png" alt="icone de connexion"></a></li>
        </ul>-->
    </header>
    <main>
        <!--
        <section>
            <h2 class="h2">Prêt à la compétition? Remplissez le formulaire proposé dans cette page</h2>
            <p class="p">Tous les mois profitez de toutes les nouveautés et opportunités. A partir du mois
                prochain on vous propose toutes les séance de sport sur vos support préférés</p>-->
        </section>
        <section>

<?php

/*
$mysqli = new mysqli($host, $username, $password, $database);

    if(!empty($_POST['connect'])) {
       
      if(isset($newMail) && isset($newPwd)){

          echo "<p class='warning'>MARCHE PAS </p>";

      }else{

          echo "<p class='success'>MARCHE </p>";
      }

    }

    */

/*
    session_start(); 
    if(isset($_POST['mail_connect']) && isset($_POST['pwd_connect'])){
        $newMail = $_POST['mail_connect'];
        $newPwd = $_POST['pwd_connect'];
        $check = $bdd->prepare('SELECT mail,pwd FROM inscription where mail = ?');
        $check->execute(array($newMail));
        $check = $check->fetch();
        $row = $check->rowCount();


        if($row==1){
            if(filter_var($newMail,FILTER_VALIDATE_EMAIL)){
                $password = hash('sha256',$newPwd);
                if($data['pwd'] === $newPwd{

                    $_SESSION['user'] = $data['pseudo'];
                    echo "<p class='success'>VOUS ETES CONNECTE</p>"

                }
            }
        }




    }else {
        var_dump("FAUX")   ;
    }
    
*/
?>
<?php
require("connexion/from_connexion.php");
?>
    
        </section>
        <ul class="login_ul">
            <li><img src="./asset/1.jpg" alt="affiche sport">
                <div class="show_hover">
                    <a class="btn_primary" href="./login.php">S'inscrire</a>
                    <button
                    data-image="./asset/1.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>

                </div></li>
            <li><img src="./asset/2.jpg" alt="affiche sport">
                <div class="show_hover">
                    <a class="btn_primary" href="./login.php">S'inscrire</a>
                    <button
                    data-image="./asset/2.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li><img src="./asset/3.jpg" alt="affiche sport">
                <div class="show_hover">
                    <a class="btn_primary" href="./login.php">S'inscrire</a>
                    <button
                    data-image="./asset/3.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="./asset/4.jpg" alt="affiche sport">
                <div class="show_hover">
                    <a class="btn_primary" href="./login.php">S'inscrire</a>
                    <button
                    data-image="./asset/4.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>

        </ul>

   

    </main>

    <?php
include_once('src_inc/newsletter_button_form_inc.php');
?>

<?php
include_once('src_inc/modale_inc.php');
?>
    <footer>
        <p class="footer_black">&copy; Oussama DABACHIL</p>
    </footer>


    <script src="./app/app.js"></script>
</body>
</html>




