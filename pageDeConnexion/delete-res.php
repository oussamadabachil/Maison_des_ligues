<div class="delete-form-res">
   <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
      <label for="sure">Êtes vous sur de vouloir supprimer</label>
      <div class="form-choice-delet">
         <input type="submit" value="Confirmer" name="supprimer">
         <button class="cancelButtonDelete">Annuler</button>
      </div>
   </form>
</div>
<?php
   include_once("./connexion/bdd.php");
   if(isset($_POST["supprimer"])){
    $idDelete = $_GET["id_delete"];
    $idClient = $_SESSION["id"];
    $_req = $bdd->prepare("DELETE FROM reservations WHERE idClient = :idClient AND nomDeLactivite = :nomDeLactivite");
    $_req -> execute(array(
        'idClient' => $idClient,
        'nomDeLactivite' => $idDelete
   ));
   header("Refresh:1");
   }
   
   
   ?>
<script>
   let buttonCancelDelete = document.querySelector(".cancelButtonDelete");
   
   
   let screenbackground = document.querySelector(".screen-back");
   
   let modalDelete = document.querySelector(".delete-form-res");
   
   let liDeleteActivity = document.querySelectorAll(".b ul li");
   buttonCancelDelete.addEventListener("click",()=>{
       modalDelete.classList.remove('show');
   
   })
   let dataiD =function(){
       modalDelete.classList.add('show');
       let dataDelete = this.dataset.delete;
       console.log(dataDelete)
       window.history.pushState(1, "", "./connected.php?id_delete=" + dataDelete );
       screenbackground.classList.add('show');
   }
   
   for(index of liDeleteActivity ){
       index.addEventListener("click",dataiD)
   }
</script>