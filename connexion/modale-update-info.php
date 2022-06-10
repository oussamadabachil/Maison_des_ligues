

<div class='modal-update-info'>
<fieldset id="subscribe_form">
            <legend>Remplissez le formulaire</legend>
               
                <form action = "#" method="POST" >
                    <label for ="name">Nom</label>
                    <input type="name" name ="nameC" id="name" placeholder= <?= $row["prenom"]?> aria-required="true" autofocus>
                    <label for ="prenom">Prénom</label>
                    <input type="prenom" name="pre" id="prenomC" placeholder=<?= $row["nom"]?> aria-required="true" >
                    <label for ="email">Email</label>
                    <input type="email" name = "emailC" id="email" placeholder=<?= $row["mail"]?> aria-required="true" >
                    <label for ="pwd">Mot de passe</label>
                    <input type="password" name="pwdC" id="pwd" placeholder="Password" aria-required="true" >
                    <input type="checkbox" onclick="myFunction()" class="showPwd">Montrer le mot de passe
                    <label for="select-city">Ville </label>
                    <input type="text" name="villeC" aria-required="true" placeholder="Insérer votre ville">
                    <label for="country">Pays </label>
                    <input name="countryC" id="select-country" aria-required="true" placeholder="Insérer votre pays">                    
                    <input type="submit" value= "Modifier" name="submit_update_form">
                </form>
        </fieldset>
</div>
