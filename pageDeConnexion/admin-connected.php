<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentifcator</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>


</head>
<body>
    <header class="headerAdmin">
        <h1>Bienvenue l'admin dans votre<span> espace de contrôle</span></h1>
        <h2>Ici vous disposerez tous les droits sur vos membres</h2>

        <img src="../asset/adminjpg.jpg" alt="Adminimg">
    </header>

    <form action="#" class="Adminform" method="POST">
        <label for="">Quelle action voulez vous effectuez?</label>
        <div class="choice" role="region">
            <input type="submit" value="Voir les activités" name="showEvent">
            <input type="submit" value="Voir les activités" name="showEvent">
            <input type="submit" value="Voir les activités" name="showEvent">

        </div>
    </form>
    <main>

        <div class="modale-show">
            <?php
              session_start();
         
              try{
                  $_host = "localhost";
                  $_dbname = "PPE-slk";
                  $_user = "root";
                  $_password = "root";
                  $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;    
                  $bdd = new PDO("mysql:host={$_host};dbname={$_dbname};", $_user, $_password);
                  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options);
              }
              catch(Exception $e)
              {
                  die('Erreur : '.$e->getMessage());
              }
             $_req = $bdd->prepare("SELECT * FROM reservations 
             INNER JOIN Event ON reservations.nomDeLactivite = Event.id
             WHERE idClient = :idClient
             LIMIT 5");
             $_req -> execute(array(

                 'idClient' => 48
             ));
                $reservations = $_req->fetchAll();
                echo '<ul>';
                
                if($_req->rowCount() > 0){
                foreach($reservations as $reservation){
                    echo '<li>'.$reservation['NomDeLEvent'].'</li>';
                    echo '<li>'.$reservation['Date_inscription_resa'].'</li>';
    
                }
            }else{
                echo '<li>Il n\'avez pas de réservation</li>';
            }
                echo '</ul>';
            ?>


        </div>


        <div class="modale-delete">
            <form action="#" method="POST" name="AdminDelete">
                <label for="">Etes vous sur de supprimer cette personne</label>
                <div>
                    <input type="submit" value="Supprimer" name="deleteUser">
                    <button>Annuler</button>
                </div>
            </form>
<?php
            if(isset($_POST['deleteUser'])){
                $_req = $bdd->prepare("DELETE FROM inscription_new WHERE id = :id");
                $_req -> execute(array(
                    'id' => 48
                ));
                if($deleteUser){
                    echo '<p>Votre compte a bien été supprimé</p>';
                }
            }

           
            ?>
        </div>



        <a href="deconnexion.php">Se déconnecter</a>

        <ul>
            <ul>
                <li>L'activité la plus répandue</li>
                <?php

                    $theMosSubscribedEvent = $bdd->prepare('SELECT COUNT(*) AS nb, nomDeLactivite FROM reservations GROUP BY nomDeLactivite ORDER BY nb DESC LIMIT 1');
                    $theMosSubscribedEvent->execute();
                    $theMosSubscribedEvent = $theMosSubscribedEvent->fetch();
                    echo '<li>'.$theMosSubscribedEvent['nomDeLactivite'].'</li>';

                ?>

            </ul>

            <ul>
                <li>La personne la plus active</li>
                <?php
                    $theMostActiveUser = $bdd->prepare('SELECT COUNT(*) AS nb, idClient FROM reservations GROUP BY idClient ORDER BY nb DESC LIMIT 1');
                    $theMostActiveUser->execute();
                    $theMostActiveUser = $theMostActiveUser->fetch();
                    echo '<li>'.$theMostActiveUser['idClient'].'</li>';
                ?>
            </ul>

            <ul>
                <li>Nombre de personnes inscirtes auourd'hui</li>
                <?php
                    $theNumberOfSubscribedToday = $bdd->prepare('SELECT COUNT(*) AS nb FROM reservations WHERE Date_inscription_resa = CURDATE()');
                    $theNumberOfSubscribedToday->execute();
                    $theNumberOfSubscribedToday = $theNumberOfSubscribedToday->fetch();
                    echo '<li>'.$theNumberOfSubscribedToday['nb'].'</li>';
                ?>

            </ul>

            <ul>
                <li>Nombre d'inscrits</li>
                <?php
                    $theNumberOfSubscribed = $bdd->prepare('SELECT COUNT(*) AS nb FROM inscription_new');
                    $theNumberOfSubscribed->execute();
                    $theNumberOfSubscribed = $theNumberOfSubscribed->fetch();
                    echo '<li>'.$theNumberOfSubscribed['nb'].'</li>';
                ?>
            </ul>
        </ul>

        <?php
          


            $IdUser = $_SESSION['id'];
            $printAllUsers = $bdd->query('SELECT * FROM inscription_new');
            $printAllUsers->execute();
            $printAllUsers = $printAllUsers->fetchAll();
            
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nom</th>";
            echo "<th>Prénom</th>";
            echo "<th>Mail</th>";
            echo "<th>Date d'inscription</th>";
            echo "<th>Pays</th>";
            echo "<th>Ville</th>";
            echo "</th>";
            echo "</tr>";
            echo "</thead>";
             
            foreach($printAllUsers as $printAllUsers){
            
                echo "<tr class='trdata' data-id=" . $printAllUsers['id'] . ">";
                echo "<td>".$printAllUsers['id']."</td>";
                echo "<td>".$printAllUsers['nom']."</td>";
                echo "<td>".$printAllUsers['prenom']."</td>";
                echo "<td>".$printAllUsers['mail']."</td>";
                echo "<td>".$printAllUsers['date_inscription']."</td>";
                echo "<td>".$printAllUsers['country']."</td>";
                echo "<td>".$printAllUsers['ville']."</td>";
                echo "</tr>";
    

            }
       
            echo "</table>";


        ?>


            se
    </main>
</body>
</html>

<script>
    var table = document.getElementsByTagName('table')[0];
    var rows = table.getElementsByTagName('tr');
    var i;
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function () {
            var id = this.getAttribute('data-id');
            window.location.href = "admin-connected.php?id=" + id;
        };
    }
</script>



