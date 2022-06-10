
<div class="parent-modale" id="peremodale" role="region" data-id="12">
    <figure class="modale" id="modaleid">
        <button aria-label="closed">
            <span class="material-symbols-outlined">
                close
                </span>        </button>
        <img src="" alt="picture">
        <figcaption class="desc">
            <h3>title</h3>
            <p>
            
            </p>
            <time>Year: </time>
        </figcaption>

        <?php

        session_start();
            if($_SESSION["id"]==NULL){
                echo "<p>Vous ne pouvez réserver  qu'une fois  vous êtes connecté(é)</p>";
            }else{
                echo "<a href='#' class='subscirbe_button'>S'inscrire à l'èvenemnt</a>";
            }
        ?>

    </figure>


</div>
  

