<?php

session_start();


$user_reservation = "array_rese[count-1]";

header("Refresh:1000; url=../logout.php");


if(($_SESSION["lastname"])==""){
    session_destroy();
    header('Location:../logout.php');
    exit();}
$title = 'Bienvenue '.$_SESSION["lastname"];
$link_a= "../css/main.css";
$link_b= "../css/reset.css";
$link_c= "../css/responsive.css";
$link_img= "../asset/pngLogin.png";
if(isset($_POST["testphp"])){
    echo "<h2>s,;ds,dsk,dnsk</h2>";
}

include("../src_inc/head_inc.php");



?>
<h2 class="h2"></h2>
<p class="p"></p>
<div class="modale">
    <img src="" alt="" style="display:none">
<button></button>
</div>

<?php
include("../src_inc/header_logged_inc.php");
//  $host = 'localhost';
//  $dbname = 'PPE-slk';
//  $username = 'root';
//  $password = 'root';
try{
    $bdd = new PDO('mysql:host=localhost;dbname=PPE-slk;charset=utf8;','root','root'); 
}
catch(Exception $e)
    {
        die('DATABSE ERROR!' .$e->getMessage());
        echo "<script>alert('DATABASE ERROR')</script>";
        
    } 


$mailUser = $_SESSION["mail"];

// $dsn = "mysql:host=$host;dbname=$dbname"; 
// récupérer tous les utilisateurs

// $sql = "SELECT * FROM inscription_new where mail = '$mailUser'";



// $sql_res = "INSERT INTO inscription_new(reservations) where mail = '$mailUser'";
// VALUES ('oioio')";
// $sql_join = "SELECT *FROM inscription INNER JOIN newsletter ON inscription.mail = newsletter.mail";

// try{
//  $pdo = new PDO($dsn, $username, $password);
//  $stmt = $pdo->query($sql);

//  if($stmt === false){
//   die("Erreur");
//  }
// }catch (PDOException $e){
//   echo $e->getMessage();
// }


$_changedname = $_POST["changename"];
    
if(isset($_POST['change'])){

    var_dump($_changedname);
    $sqla->prepare("UPDATE inscription_new SET nom = :nom  where mail = :mail");
     $sqla->execute(array(
        'nom' => $_changedname,
         'mail'=> $mailUser
     ));



 }


?>
        

<div class="change">
    <form action="#" method="POST">
        <label for="changed_name"></label>
        <input type="name" placeholder="ooussamaa" name="changename">
     <input type="submit" value="Changer" name="change">
    </form>
</div>

<h2 class="h2_welcome">Bonjour <?=$_SESSION["lastname"]?>   <?=$_SESSION["prenom"]?></h2>


<div class="grid_inline">
    <div class="a">
    <h2>Données de connexion</h2>
    <!-- <button aria-label="closed"> -->
            <!-- <span class="material-symbols-outlined">
                close
                </span>        </button> -->

            
    <!-- <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?> -->


       <?php  
       $stmt = $pdo->query("SELECT * FROM inscription_new where mail = '$mailUser'");
while ($row = $stmt->fetch()) {
    echo $row['prenom']."<br />\n";
}


?>


    <!-- <ul>
    <span class="material-symbols-outlined" style="text-align:center;font-size:6rem;display:block">
                lock
                </span>  -->
<!-- 

    <li><span>Prénom : </span><?php echo htmlspecialchars($row['prenom']); ?></li>
    <li><span>Nom : </span><?php echo htmlspecialchars($row['nom']); ?></li>
    <li><span>Adresse-mail : </span><?php echo htmlspecialchars($row['mail']); ?></li>
    <li><span>Pays : </span><?php echo htmlspecialchars($row['country']); ?></li>
    <li><span>Ville : </span><?php echo htmlspecialchars($row['ville']); ?></li>
    <li><span>Date dinscription : </span><?php echo htmlspecialchars($row['date_inscription']); ?></li>

     </ul>
     -->


     <a  class="a_modifier" href="#"> Modifiers ses informations</a>

    </div>
    <div class="b">
    <h2>Vos réservations</h2>
        <ul>
            <li>Oussama</li>
            <li>Oussama</li>
            <li>Oussama</li>
            <li>Oussama</li>
            <li>Oussama</li>
            <li>Oussama</li>
            <li>Oussama</li>
            <li>Oussama</li>
            <li>Oussama</li>
            <li>Oussama</li>
            <li>Oussama</li>

        </ul>
        <a  class="a_deconnect" href="deconnexion.php"> Déconnexion</a>

    </div>

</div>
<ul class="donne_infos_list">
<li><a href="#">Tableau de bord</a></li>

    <li><a href="#" class="show_connexion_data">Vos données de connexion</a></i> </li>
   
    <li><a href="#" class="show_res_data">Vos Réservations</a></li>
    <li><a href="deconnexion.php">Déconnexion</a></li>

</ul>



<div class="modale_info">
    <h2>Données de connexion</h2>
    <button aria-label="closed">
            <span class="material-symbols-outlined">
                close
                </span>        </button>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

    <ul>
    <span class="material-symbols-outlined" style="text-align:center;font-size:6rem;display:block">
                lock
                </span> 
    <li><span>Prénom : </span><?php echo htmlspecialchars($row['prenom']); ?></li>
    <li><span>Nom : </span><?php echo htmlspecialchars($row['nom']); ?></li>
    <li><span>Adresse-mail : </span><?php echo htmlspecialchars($row['mail']); ?></li>
    <li><span>Pays : </span><?php echo htmlspecialchars($row['country']); ?></li>
    <li><span>Ville : </span><?php echo htmlspecialchars($row['ville']); ?></li>
    <li><span>Date d'inscription : </span><?php echo htmlspecialchars($row['date_inscription']); ?></li>

     </ul>
     
     <?php endwhile; ?>


     <a  class="a_modifier" href="#" > Modifiers ses informations</a>

</div>

<main>

<div class="text_add"></div>
        <section>
            <h2 class="h2">YOUPI ! Vous êtes finalement connecté(e)</h2>
            <p class="p">Vous avec accés à votre tableau de bord ci-dessus et vos réservations ci-dessous </p>
        </section>
  
        <ul>
            <li><img src="../asset/1.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve" href="#"
                data-image="./asset/1.jpg"
                data-res="Fête de Beach Volley" 
                    data-title="Boy"
                    data-id="1"
                    data-description="dans ce film le réalisateur Joe Doe...">Réserver</a>
                    <button
                    data-image="./asset/1.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>

                </div></li>
            <li><img src="../asset/2.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve" href="#"
                data-res="Centre de sport et bien-être banks" 
                data-image="./asset/1.jpg" 
                    data-title="Boy"
                    data-id="2"
                    data-description="dans ce film le réalisateur Joe Doe...">Réserver</a>                    <button
                    data-image="./asset/2.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-res="Une montée d'adrénaline" 

            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/3.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Une montée d'adrénaline" 

                data-res="Fête de Beach Volley" 
 href="#">Réserver</a>
                    <button
                    data-image="./asset/3.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/4.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve" 
                data-res="Semaine de la boxe" 
href="#">Réserver</a>
                    <button
                    data-image="./asset/4.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/5.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Mon style de Fitness" 
 href="#">Réserver</a>
                    <button
                    data-image="./asset/5.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/6.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Mon style Fitness" 
 href="#">Réserver</a>
                    <button
                    data-image="./asset/6.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/7.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Match des retrouvailles" 
 href="#">Réserver</a>
                    <button
                    data-image="./asset/7.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/8.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Esprit scolaire" 
 href="#">Réserver</a>
                    <button
                    data-image="./asset/8.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="../asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/1.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Ligue BasketBall" 
 href="#">Réserver</a>
                    <button
                    data-image="./asset/1.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="../asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/2.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Fête de Beach Volley" 
 href="#">Réserver</a>
                    <button
                    data-image="./asset/2.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="../asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/3.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Fête de Beach Volley" 
 href="#">Réserver</a>
                    <button
                    data-image="./asset/3.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="../asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/4.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Fête de Beach Volley" 
 href="#">Réserver</a>
                    <button
                    data-image="../asset/4.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/5.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Fête de Beach Volley" 
 href="#">Réserver</a>
                    <button
                    data-image="./asset/5.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/6.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Fête de Beach Volley" 
 href="#">Réserver</a>
                    <button
                    data-image="./asset/6.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/7.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Fête de Beach Volley" 
 href="#">Réserver</a>
                    <button
                    data-image="../asset/7.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
            <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/8.jpg" alt="affiche sport">
                <div class="show_hover">
                <a class="btn_primary btn_reserve"
                data-res="Fête de Beach Volley" 
 href="#">Réserver</a>
                    <button
                    data-image="../asset/8.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>
                <li
            data-image="./asset/natureboy.jpg" 
            data-title="Boy" 
            data-description="dans ce film le réalisateur Joe Doe..." 
            data-dates="02/01/2020"><img src="../asset/8.jpg" alt="affiche sport">
                <div class="show_hover">
                <input class="btn_primary btn_reserve"
                data-res="Fête de Beach Volley" value="Réserver" name="reserver">
                    <button
                    data-image="../asset/8.jpg" 
                    data-title="Boy" 
                    data-description="dans ce film le réalisateur Joe Doe..." 
                    data-dates="02/01/2020"
                    >Plus d'info</button>
                </div></li>

        </ul>

        



    </main>
    <div class="opacity_connected">

</div>

<div class="vos_reservations">
<button aria-label="closed">
            <span class="material-symbols-outlined btn_close_reservation">
                close
                </span>        </button>
   <h3>Vos réservations</h3>
   <ul class="grid_res">
   </ul>
    
</div>
<?php
include_once("modale_inc.php")
?>
<style>

.opacity_connected{

        transition:all .3s;

        visibility:hidden;
        opacity: 0;
        z-index: 5;
        position:fixed;
        height:100vh;
        width:100%;
        background-color:rgba(126,83,251,.8);
        top:0;
        left:0

    }

    .opacity_connected_show{
        transition:all .3s;

        visibility:visible;
        opacity: 1;
        z-index: 5;
        position:fixed;
        height:100vh;
        width:100%;
        background-color:rgba(126,83,251,.8);
        top:0;
        left:0

    }

  
  .modale_info_show>button, .modale_info>button{
      position: absolute;
      cursor: pointer;
       transition:all .3s;
      top:2rem;
      right:2rem;
  }

  .modale_info_show>button:hover{

    transition:all .3s;

    transform:scale(1.2);
  }
    .modale_info_show>h2,.modale_info>h2{
        font-size:2.4rem;
        font-weight:500;
        text-align:center;
        padding:1rem;
    }
    .modale_info_show{
    z-index: 10;
    transition:all .3s;
    border-radius:1.2rem;
    opacity: 1;
    visibility:visible;
    position: fixed;
    top: 50%;
    left: 50%;
    width: 50rem;
    transform:translate(-50%,-50%);
    height:50rem;
    background-color:white;
}
.modale_info{
    transition:all .3s;
    z-index: 10;
    border-radius:1.2rem;
    opacity: 0;
    visibility:hidden;
    position: fixed;
    top: 50%;
    left: 50%;
   width: 50rem;
    transform:translate(-50%,-50%);
    height:2rem;
    background-color:white;
}
.modale_info_show>ul{
    padding: 1rem;
    display:block;

}
.modale_info>ul{
    display:none;

    width: 1rem;
    transition:all .3s;
    opacity: 0;
}
.modale_info_show>ul>li,.modale_info>ul>li{
    line-height:3rem;
    padding:1rem;
}
.modale_info_show>ul>li>span,.modale_info>ul>li>span{
    font-weight:600
}
</style>



<?php

include("../src_inc/newsletter_button_form_inc.php");



?>

<?php

include("../src_inc/script_conection_js.php");
include("../src_inc/footer_inc.php");

$linkJs = "../app/app.js";
include("../src_inc/script_inc.php");
/*
include("../src_inc/scriptreserve.php");
*/

?>

<script>

let el = document.querySelectorAll(" ul li div .btn_reserve");
let button_close = document.querySelector(".btn_close_reservation")
let show_res = document.querySelector(".show_res_data");
let res_div = document.querySelector(".vos_reservations");
let array_rese = [];
let count = 0;
let li_show_res = document.querySelector(".vos_reservations>ul");
show_res.addEventListener("click", () => {
    if (array_rese.length <= 0) {
        Swal.fire({
            icon: 'The Internet?',
            title: "C'est triste ",
            text: "Vous n'avez pas encore de réservations ...",
        })
    } else {
        res_div.classList.remove('vos_reservations');
        res_div.classList.add('vos_reservations_show');
    }
})
button_close.addEventListener("click", () => {
    res_div.classList.remove('vos_reservations_show');
    res_div.classList.add('vos_reservations');

})
reserve_func = function() {
    array_rese.push(this.dataset.res);
    Swal.fire({
        icon: 'success',
        title: 'Resérvation faite',
        width: 600,
        height: 400,
        text: this.dataset.res,
    })

    li_show_res.innerHTML += "<li class='datashow_li_res'>" + this.dataset.res + "</li>";
    document.querySelectorAll(".datashow_li_res")[array_rese.length-1].setAttribute('style','background-image:url("https://static.wikia.nocookie.net/dragonball/images/8/8d/Goku2.jpg.png/revision/latest/scale-to-width-down/1000?cb=20180611154632&path-prefix=fr");background-size:cover;background-position:center center;');
    console.log(array_rese.length);
    
 

};

for (index of el) {
    index.addEventListener("click", (reserve_func))

}

</script>