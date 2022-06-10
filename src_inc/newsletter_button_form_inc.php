


<div>
    <button class="newsletter_button">
        Intéressés par notre revue ?
    </button>
    
    <?php
include_once('newsletter_inc.php');

?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="form_hidden">
        <label for="mail">Votre adresse mail</label>
        <input type="email" name="mail_newsletter" id="mail" placeholder="Entrez votre adresse mail">
        <input type="submit" name="submit_php" value="Inscris-Toi">
        
        
    </form>
   
</div>
