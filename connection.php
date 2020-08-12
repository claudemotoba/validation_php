<?php
        try
        {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=ecole', 'root', '');
        }
        catch(Exception $e)
        {
        // En cas d'erreur, on affiche un message et on arrête tout
        echo($e->getMessage());
        } 
?>