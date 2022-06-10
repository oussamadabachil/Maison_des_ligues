<div class="modale-confirm">
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <label for="reserve">Êtes vous sur de réserver ?</label>
      <div class="form-group-choice">
         <input type="submit" value="S'inscrire" id="reserve" name="reserve">
         <button class="cancelButton">Annuler</button>
      </div>
   </form>
</div>
<?php
   include_once("./connexion/bdd.php");
    if(isset($_POST["reserve"])){
       $idEvenement = $_GET["id_event"];
       $idClient = $_SESSION["id"];
       $dateRes = new DateTime();
       $dateRes = $dateRes->format('Y-m-d H:i:s');
   
   $_req = $bdd->prepare("SELECT * FROM reservations WHERE `nomDeLactivite` = :nomDeLactivite AND `idClient` = :idClient");
   $_req->execute(array('idClient' => $idClient,
                     'nomDeLactivite' => $idEvenement
   ));
   var_dump($_req->rowCount());
   
    if ($_req->rowCount()== 0)
    {
      //  echo "<p class=\"success\">L'evenement est disponible</p>";
       $_reqs = $bdd->prepare("INSERT into reservations (idClient , nomDeLactivite,Date_inscription_resa) values(?,?,?)");
       $_reqs -> execute(array(
       $idClient,
       $idEvenement,
       $dateRes
   ));
       
   }
   else if ($_req->rowCount() != 0)
   {
   echo "<script>alert('Vous avez déjà réservé cet événement')</script>";
   }
   }

   ?>
<script>
   let ep = function() {
    window.history.pushState(1, "", "./connected.php");
    }
    let modaleConfirmDiv = document.querySelector(".modale-confirm");
    let modaleConfirmDivButt = document.querySelector(".cancelButton");
    let modaleConfirmDivInput = document.querySelector(".modale-confirm form div input");

    modaleConfirmDivButt.addEventListener("click", () => {
        modaleConfirmDiv.classList.remove("show")
    })



    modaleConfirmDivInput.addEventListener("click", () => {
        modaleConfirmDiv.classList.remove("show")

            Swal.fire(
                'Réservation effectuée !',
                'Merci!',
                'success')
        });
   
</script>