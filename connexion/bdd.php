<?php

session_start();
    // try {

    //     // On se connecte à MySQL
    //         $_host = "localhost";
    //         $_dbname = "PPE-slk";
    //         $_user = "root";
    //         $_password = "root";
    //         $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    //         $bdd = new PDO("mysql:host={$_host};dbname={$_dbname};", $_user, $_password);
    //         array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options);
    //     }
    //     catch(Exception $e)
    //     {
    //         die('Erreur : '.$e->getMessage());
    //     }

    try {

        // On se connecte à MySQL
            $_host = "172.190.1.52";
            $_dbname = "odabachil";
            $_user = "odabachil";
            $_password = "Ipozoxvo123";
            $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO("mysql:host={$_host};dbname={$_dbname};", $_user, $_password);
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options);
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

?>