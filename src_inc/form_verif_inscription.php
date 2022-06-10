<section>
<?php

include_once("./connexion/bdd.php");

// $citySession = 2;
// $countrySession = 2;
$date = date('d-m-y h:i:s');
if(isset($_POST['submit_inscription_form']))
{
 

    //Check if the user filled the form.
    if(!empty($_POST['name']) && !empty($_POST['pre']) && !empty($_POST['email']) && !empty($_POST['pwd'] && !empty($_POST['ville']) && !empty($_POST['country'])))
    {
        //User's DATAS.
        $user_name = htmlspecialchars($_POST['name']);
        $user_lastname = htmlspecialchars($_POST['pre']);
        $user_mail = htmlspecialchars($_POST['email']);
        $user_password = password_hash($_POST['pwd'] , PASSWORD_DEFAULT);
        $user_city = htmlspecialchars($_POST['ville']);
        $user_country = htmlspecialchars($_POST['country']);
       


        $checkIfUserAlreadyExists = $bdd->prepare('SELECT mail from inscription_new where mail = ?');
        $checkIfUserAlreadyExists->execute(array($user_mail));
        if($checkIfUserAlreadyExists->rowCount() == 0)
        {
            $InsertUserOnWebsite = $bdd->prepare('INSERT INTO inscription_new(nom, prenom, mail, pwd,country,ville,date_inscription) VALUES(?,?,?,?,?,?,?)');
   
            $InsertUserOnWebsite->execute(array($user_name, $user_lastname, $user_mail, $user_password,$user_city,$user_country,$date));
                    echo"<p class='success'>Inscription effectuee</p>";
                }
                else
                {
                    echo"<p class='warning'>L'utilisateur existe déja sur le site </p>";
                }
                }
                else
                {
                    echo"<p class='warning'>Veuillez completer tous les champs...</p>";
                }
                }

         

                
                
  ?>



 <h2>Inscription</h2>
        <fieldset id="subscribe_form">
            <legend>Remplissez le formulaire</legend>
               
                <form action = "login.php" method="POST" >
                    <label for ="name">Nom</label>
                    <input type="name" name ="name" id="name" placeholder="Nom" aria-required="true" autofocus>
                    <label for ="prenom">Prénom</label>
                    <input type="prenom" name="pre" id="prenom" placeholder="Prénom" aria-required="true" >
                    <label for ="email">Email</label>
                    <input type="email" name = "email" id="email" placeholder="Email" aria-required="true" >
                    <label for ="pwd">Mot de passe</label>
                    <input type="password" name="pwd" id="pwd" placeholder="Password" aria-required="true" >
                    <input type="checkbox" onclick="myFunction()" class="showPwd">Montrer le mot de passe
                    <label for="select-city">Ville </label>
                    <input type="text" name="ville" aria-required="true" placeholder="Insérer votre ville">
                    <!-- <select id="select-city" name="ville" aria-required="true">
                        <option value="1">Choisir sa ville</option>
                        <option value="Agadir">Agadir</option>
                        <option value="Fés">Fés</option>
                        <option value="Tanger">Tanger</option>
                        <option value="Meknes">Meknes</option>

                    </select> -->

                    <label for="country">Pays </label>

                    <input name="country" id="country" aria-required="true" placeholder="Insérer votre pays">                    
                    <input type="submit" value= "Valider" name="submit_inscription_form">
                </form>
        </fieldset>

        <span class="already_account">Vous avez déja un compte ? <a href="./logout.php">Se connecter</a></span>


    </section>


<script>
    function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>