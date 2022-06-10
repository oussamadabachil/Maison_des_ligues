<?php

session_start();
$IdUser = $_SESSION['id'];



setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
$date = date('d-m-y h:i:s');

if (isset($_POST["submit_update_nom"])) {

if(isset( $_POST['nameC']) ){
 $_nom = $_POST['nameC'];

//  $_SESSION["firstname"] = $_nom;
//  $_prenom = $_POST['preC'];
//  $_country = $_POST['countryC'];
//  $_ville = $_POST['villeC'];

$_reqs = $bdd->prepare("UPDATE inscription_new SET nom = :nom WHERE id = $IdUser");

$_reqs -> execute(array(
 'nom' => $_nom,  


));





if ($_reqs) {
    print "<section>
    <p class=\"success\"> Vos informations ont bien été modifiées </p>        </section>";
}

}else{
print "<section>";
print "<p class=\"warning\"> Vous n'aviez rien saisi </p>";
print"</section>";

}
}


if (isset($_POST["submit_update_prenom"])) {

if(isset( $_POST['preC']) ){
 $_prenom = $_POST['preC'];
//  $_prenom = $_POST['preC'];
//  $_country = $_POST['countryC'];
//  $_ville = $_POST['villeC'];

$_reqsa = $bdd->prepare("UPDATE inscription_new SET prenom = :prenom WHERE id = $IdUser");

$_reqsa -> execute(array(
 'prenom' => $_prenom,  


));

if ($_reqsa) {

    print "<section>
    <p class=\"success\"> Vos informations ont bien été modifiées </p>        </section>";
}

}else{
print "<section>";
print "<p class=\"warning\"> Vous n'aviez rien saisi </p>";
print"</section>";

}




}

if (isset($_POST["submit_update_ville"])) {

if(isset( $_POST['villeC']) ){
 $_ville = $_POST['villeC'];
//  $_prenom = $_POST['preC'];
//  $_country = $_POST['countryC'];
//  $_ville = $_POST['villeC'];

$_reqsa = $bdd->prepare("UPDATE inscription_new SET ville = :ville WHERE id = $IdUser");

$_reqsa -> execute(array(
 'ville' => $_ville,  


));

if ($_reqsa) {

    print "<section>
    <p class=\"success\"> Vos informations ont bien été modifiées </p>        </section>";
}

}else{
print "<section>";
print "<p class=\"warning\"> Vous n'aviez rien saisi </p>";
print"</section>";

}




}

if (isset($_POST["submit_update_pays"])) {

if(isset( $_POST['countryC']) ){
 $_pays = $_POST['countryC'];


$_reqsa = $bdd->prepare("UPDATE inscription_new SET country = :pays WHERE id = $IdUser");

$_reqsa -> execute(array(
 'pays' => $_pays,  


));

if ($_reqsa) {

    print "<section>
    <p class=\"success\"> Vos informations ont bien été modifiées </p>        </section>";
}

}else{
print "<section>";
print "<p class=\"warning\"> Vous n'aviez rien saisi </p>";
print"</section>";

}




}


?>






<form action="#" method="POST" class="modiForm upnom">
    <label for ="name">Nom</label>
    <input type="name" name ="nameC" id="name" value="<?=$_SESSION['lastname']?>" aria-required="true">
    <input type="submit" value= "Valider" name="submit_update_nom">
    </form>


    <form action="#" method="POST" class="modiForm upprenom">
    <label for ="prenom">Prenom</label>
    <input type="name" name ="preC" id="prenom" value="<?=$_SESSION['prenom']?>" aria-required="true">
    <input type="submit" value= "Valider" name="submit_update_prenom">
    </form>


    <form action="#" method="POST" class="modiForm upcity">
    <label for ="name">Ville</label>
    <input type="name" name ="villeC" id="name" value="<?=$_SESSION['ville']?>" aria-required="true">
    <input type="submit" value= "Valider" name="submit_update_ville">
    </form>


    <form action="#" method="POST" class="modiForm upcountry">
    <label for ="name">Pays</label>
    <input type="name" name ="countryC" id="name" value="<?=$_SESSION['pays']?>" aria-required="true">
    <input type="submit" value= "Valider" name="submit_update_pays">
    </form>

        