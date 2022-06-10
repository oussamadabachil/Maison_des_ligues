<?php
    $db="odabachil";
       $dbhost="172.190.1.52";
       $dbuser="odabachil";
       $dbpasswd="azerty";
        
       $pdo = new PDO('mysql:host='.$dbhost.';dbname='.$db.'', $dbuser, $dbpasswd);
       $pdo->exec("SET CHARACTER SET utf8");
        
    //    try{
    //     $bdd = new PDO('mysql:host=localhost;dbname=PPE-slk;charset=utf8;','root','root'); 
    // }
    // catch(Exception $e)
    //     {
    //         die('DATABSE ERROR!' .$e->getMessage());
    //         echo "<script>alert('DATABASE ERROR')</script>";
            
    //     } 

    $stmt = $pdo->prepare("SELECT * from inscription_new where mail = '$mailUser'");
    $stmt->execute();

    $res = $stmt->fetchAll();
?>