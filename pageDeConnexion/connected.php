<!DOCTYPE html>
<html lang="fr">
   <head>

   <?php
   session_start();
   $title="Bonjour ".$_SESSION['prenom']." ".$_SESSION['lastname'];
   ?>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?=$title?></title>
      <link rel="stylesheet" href="../css/reset.css">
      <link rel="stylesheet" href="../css/responsive.css">
      <link rel="stylesheet" href="../css/main.css">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
      <link rel="apple-touch-icon" sizes="180x180" href="./asset/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="./asset/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="./asset/favicon-16x16.png">
      <link rel="manifest" href="./site.webmanifest">
   </head>
   <?php
      // session_start();
      $IdUser = $_SESSION['id'];
      try {
          // On se connecte à MySQL
              $_host = "172.190.1.52";
              $_dbname = "odabachil";
              $_user = "odabachil";
              $_password = "Ipozoxvo123";
              $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;    
              $bdd = new PDO("mysql:host={$_host};dbname={$_dbname};", $_user, $_password);
              array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options);
          }
          catch(Exception $e)
          {
             die('Erreur : '.$e->getMessage());
          }



          if($IdUser==51){

               header('Location: admin-connected.php ');

          }  

      

         $nom = $bdd->query('SELECT * FROM inscription_new WHERE mail = "'.$_SESSION['mail'].'"');
         $nom->execute();
         $nom = $nom->fetchAll();
         $nom = $nom[0]['nom'];
         $prenom = $bdd->query('SELECT * FROM inscription_new WHERE mail = "'.$_SESSION['mail'].'"');
         $prenom->execute();
         $prenom = $prenom->fetchAll();
         $prenom = $prenom[0]['prenom'];
         // $mail = $bdd->query('SELECT * FROM inscription_new WHERE id = "'.$_SESSION['id'].'"');
         // $mail->execute();
         // $mail = $mail->fetchAll();
         // $mail = $mail[0]['mail'];
         $link_img= "../asset/pngLogin.png";
      

      if($_SESSION["lastname"]==NULL || $_SESSION["prenom"]==NULL){
         header("location:deconnexion.php");
      }  
 
      // echo "<script>alert('.$_SESSION["mail"].')</script>";


      if($mail=='root@root.fr'){
         echo"<script>alert('Vous n\'avez pas le droit d\'accéder à cette page');</script>";
      }

       ?>


<h2 class="h2_welcome  animate__animated animate__bounceInDown ">Bonjour<span class=""> <?=$prenom?>   <?=$nom?> </span></h2>

   <div class="opacity_menu_off">
   </div>
   <div class="grid_inline animate__animated animate__fadeInUp">
      <div class="a">
         <h2>Données de connexion</h2>
         <ul>
            <?php
               include_once("User_info.php");
               ?>
         </ul>
         <a  class="a_modifier" href="#"> Modifiers ses informations</a>
      </div>
      <div class="b">
         <h2>Vos réservations</h2>
         <ul>
            <?php
               $_req = $bdd->prepare("SELECT * FROM reservations 
               INNER JOIN Event ON reservations.nomDeLactivite = Event.id
               WHERE idClient = :idClient
               LIMIT 5");
               $_req -> execute(array(

                   'idClient' => $IdUser
               ));


               if($_req->rowCount() > 0){
                   while($_donnees = $_req->fetch()){
                     print "<li class='resa' data-delete='{$_donnees['idE']}'>Nom de l'activité : {$_donnees['NomDeLEvent']}<img src='../asset/1200px-Flat_cross_icon.svg.png' alt='cross'></li>\n";

                     }
                  }else{
                     print "<li class='noresa'><img src='../asset/noRESA.png'</li>";
                     print "<li class='noresa'>Vous n'avez pas de réservation</li>\n";
                  }
               // $_donnees = $_req->fetchAll();
               //         foreach ($_donnees as $_user) {
               //             print "<li data-delete='{$_user['idE']}'>Nom de l'activité : {$_user['NomDeLEvent']}</li>\n";
               //     }
               
               
               ?>
         </ul>
         <a  class="a_deconnect" href="deconnexion.php"> Déconnexion</a>
      </div>
   </div>
   <?php
      include_once("screenBack.php");
      include('../src_inc/modale_inc.php');
      include('main-connexion.php');
      include("update-forms.php");    
      include("../src_inc/newsletter_button_form_inc.php");    
      include("../src_inc/footer_inc.php");
      include("../src_inc/script_inc.php");
      include("js-connected-features.php");
      include("modale-resa-confirm.php");
      include("delete-res.php");
      
      $linkJs = "../app/app.js";
      
      
      ?>
   <style>
      html{
      zoom: 125%;
      }
      *{
      font-family: Montserrat;
      }

      
      
   </style>