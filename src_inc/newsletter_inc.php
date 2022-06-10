<?php



$host_news = "localhost";
$username_news = "root";
$password_news = "root";
$database_news = "PPE-slk";
$email_newsletter = $_POST["mail_newsletter"];

$mysqli_news = new mysqli($host_news, $username_news, $password_news, $database_news);
if (!empty($_POST['submit_php']))
{

    $select_news = mysqli_query($mysqli_news, "SELECT * FROM newsletter WHERE mail = '".$_POST['mail_newsletter']."'");
    if (mysqli_num_rows($select_news))
    {
        echo '<p class="warning">Cette adresse email est déjà utilisée</p>';
    }
   elseif (!isset($email_newsletter) || !filter_var($email_newsletter, FILTER_VALIDATE_EMAIL))
    {
        print "<p class='warning'> Entrer une adresse-mail pour votre inscription à la newsletter !</p>";
    }
    else
    {
        print "<p class='success'> Salut !, votre adresse e-mail est " . $email_newsletter . " a bien été enregistrée.</p>";
        if (!$mysqli_news){
         die('Could not Connect My Sql:' . mysql_error());
        }
        $sql_news = "INSERT INTO newsletter (mail) VALUES ('$email_newsletter')";
        if (mysqli_query($mysqli_news, $sql_news)) {
        } else {
           echo "Error: " . $sql_news . "
   " . mysqli_error($mysqli_news);
        }
        mysqli_close($mysqli_news);
   }

    
}



?>
