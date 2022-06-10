<!-- <button aria-label="closed"> -->
<?php  

/* PHP */     

     $_emailUser = $_SESSION['mail'];
     $_req = $bdd->prepare("SELECT nom, prenom, mail, country, ville , date_inscription FROM inscription_new WHERE mail = :email");
     $_req -> execute(array(
         'email' => $_emailUser
     ));
     if ($_req)
     {
         $_donnees = $_req->fetchAll();
 
         foreach ($_donnees as $_user) 
         {
                    echo'<li class="Upnom"><span>Nom : </span>'.htmlspecialchars($_user['nom']).'</li>';
                    echo'<li class="Upprenom"><span>Prenom : </span>'.htmlspecialchars($_user['prenom']).'</li>';
                    echo'<li><span>Email : </span>'.htmlspecialchars($_user['mail']).'</li>';
                    echo'<li class="Uppays"><span>Pays : </span>'.htmlspecialchars($_user['country']).'</li>';
                    echo'<li class="Upville"><span>Ville : </span>'.htmlspecialchars($_user['ville']).'</li>';
                    echo'<li><span>Date d inscription : </span>'.htmlspecialchars($_user['date_inscription']).'</li>';
         }



        
     
    //  $_reqS= $bdd->prepare("SELECT nom,prenom,mail,country,ville,date_inscription from inscription_new WHERE mail = ?");
    //  $_reqS -> execute(array(
    //     'mail' => $mailUser
    // ));
    //  if ($_req)
    // {
    //     $_donnees = $_req->fetchAll();

    //      foreach ($_donnees as $_user) 
    //     {

    //         echo'<li><span>Nom : </span>'.htmlspecialchars($_user['nom']).'</li>';

    //         echo'<li><span>Prenom : </span>'.htmlspecialchars($_user['prenom']).'</li>';
    //         echo'<li><span>Email : </span>'.htmlspecialchars($_user['mail']).'</li>';
    //         echo'<li><span>Pays : </span>'.htmlspecialchars($_user['country']).'</li>';
    //         echo'<li><span>Ville : </span>'.htmlspecialchars($_user['ville']).'</li>';
    //         echo'<li><span>Date d inscription : </span>'.htmlspecialchars($_user['date_inscription']).'</li>';
    //     }


    // }  

     }
     

?>