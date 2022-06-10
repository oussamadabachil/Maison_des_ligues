


<?php
 session_start();

include_once("bdd.php");

// $valid = (boolean) true;


//     if(isset($_POST["mail_connect"]) && isset($_POST["pwd_connect"])) {
//         $email = $_POST["mail_connect"];
//         $passwords = $_POST["pwd_connect"];
        
//         $users = $bdd->prepare('SELECT * FROM `inscription_new` WHERE mail = :mail');
//         $users->execute(array(
//             'mail' => $email,
//         ));

//         if ($users->rowCount() == 0) {
//             echo "Ce mail n'existe pas";
//         } else {
//             $user = $users->fetch();
//             if(password_verify($_POST['pwd_connect'], $user['pwd'])){
//                 $_SESSION['id'] = $user['id'];
//                 $_SESSION['names'] = $user['nom'];
//                 $_SESSION['firstname'] = $user['prenom'];
//                 $_SESSION['mail'] = $user['mail'];
//                 $_SESSION['passwords'] = $user['pwd'];
//                 $_SESSION['country'] = $user['country'];
//                 $_SESSION['city'] = $user['city'];
//                 $users->closeCursor();
//             } else {
//                 echo "Mot de passe incorrect";
//             }
//         }
//     }


    if(isset($_POST['connect'])){


        // if(isset($_POST['mail_connect'])=='root@root.fr' AND isset($_POST['pwd_connect'])=='false'){
        //     echo "CARRÉ";
        // }else{
            
        //     echo "Veuillez remplir tous les champs";
        // }
        //Check if the user filled the form.
        if(!empty($_POST['mail_connect'])  && !empty($_POST['pwd_connect']))
        {



            //User's DATAS.
            $user_pseudo = htmlspecialchars($_POST['mail_connect']);
            $user_passwords = htmlspecialchars($_POST['pwd_connect']);
            
            $checkIfUserExists = $bdd->prepare('SELECT * FROM inscription_new where mail = ?');
            $checkIfUserExists->execute(array($user_pseudo));

            $usersInfos = $checkIfUserExists->fetch();

            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['lastname'] = $usersInfos['nom'];
            $_SESSION['prenom'] =  $usersInfos['prenom'];
            $_SESSION['mail'] = $usersInfos['mail'];
            $_SESSION['city'] = $usersInfos['ville'];
            $_SESSION['pays'] = $usersInfos['country'];


            if(($checkIfUserExists->rowCount() > 0) && ($user_pseudo == $usersInfos['mail']))
            {           
    


                if(password_verify( $user_passwords, $usersInfos['pwd']))

                {   /*
                    var_dump( $_SESSION['auth']);
                    var_dump( $_SESSION['prenom']);
                    var_dump( $_SESSION['mail']);*/
                    header('Location:./pageDeConnexion/connected.php');
                    echo "<p class='success'>Bienvenue dans votre espace </p>";
                }
                else
                {
                    echo "<p class='warning'>Dommage </p>";
                }
            }
            else
            {
                echo "<p class='warning'>Le mot de passe du pseudo est incorrect </p>";
            }

        }
        else
        {
            echo "<p class='warning'>Veuillez completer les champs </p>";
        }
    }



//     $email_co = $_POST['mail_connect'];
//     $pwd_co = $_POST['pwd_connect'];
//     if(empty($email_co)){
//         $valid = false;
//         echo("<p class='warning'>Le mail n'a pas été saisi</p>");
//     }
//     if(empty($pwd_co)){
//         $valid = false;
//         echo("<p class='warning'>Le mot de passe n'a pas été saisi</p>");
//     }
//     if($valid){
//         $q = $_bdd->prepare('SELECT * FROM inscription WHERE mail = ?');
//         $q->execute(array($email_co));
//         $data = $q->fetch();
//         $row = $q->rowCount();
        
        
//         if ($row>0) {
//            if(filter_var($email_co,FILTER_VALIDATE_EMAIL)){

//                 $pwd_co = hash('sha256',$pwd_co );

//                 if($data['pwd']===$pwd_co){
//                     echo("<p class='success'>BIENVENUE DANS VOTRE ESPACE</p>");

//                 }else{

//                     echo("<p class='warning'>BIENVENUE DANS VOTRE ESPACE</p>");

//                 }

//            }
//         }
        
//     }
//     }




?>



<h2>Connectez vous !</h2>
            <fieldset>
                <legend>Remplissez le formulaire</legend>
                    <form action = "logout.php" method="POST">
                        <label for ="email">Votre adresse-mail</label>
                        <input type="email" name = "mail_connect" id="email_co" placeholder="Entrez votre email" aria-required="true" >    
                        <label for ="password">Votre mot de passe</label>
                        <input type="password" name="pwd_connect" id="password_co" placeholder="Entrez votre mot de passe" aria-required="true" >    
                        <input type="submit" name="connect" value= "Valider">
                    </form>


            </fieldset>
    



