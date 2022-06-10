
   <?php // $_activite_msg ="' activité";
     $_req = $bdd->prepare("SELECT NomDeLEvent from Events INNER JOIN reservations on
      id=nomDeLactivite INNER JOIN inscription_new on 
      inscription_new.id = :idClient");
     $_req -> execute(array(
         'idClient' => $IdUser
     ));
      if ($_req)
     {
          $_donnees = $_req->fetchAll();
          foreach ($_donnees as $_user) 
         {
            echo'<li data-delete='.htmlspecialchars($_user['nomDeLactivite']).'><span>Nom de l activité</span> :  '.htmlspecialchars($_user['NomDeLEvent']).'</li>';
         }
     }else{
        echo'<li class="no_reservation">Aucune réservation encore enregistrée ...</li>';
         }
      
     ?>

