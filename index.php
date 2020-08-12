<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include_once('connection.php');?>
    <?php include('insertion.etudiant.php');?>
    <?php
        if(count($errs)>0){
            foreach($errs as $champerreur=>$erreurDuchamp){
                foreach($erreurDuchamp as $erreur){
                    echo"<div>".$erreur."</div>";
                }
            }
        }
    ?>
    <form action="#" method='post'>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age"><br>
        <input type="submit" name="submit" value="soumettre">
    </form><br>
    <table border="2">
    <thead>
        <tr>
            <td>NOM</td>
            <td>EMAIL</td>
            <td>AGE</td>
        </tr>
    </thead>
        <?php
            $req=$bdd->query("SELECT * FROM etudiant");
            while($data=$req->fetch())
            {
        ?>
    <tbody>
        <tr>
            <td><?php echo $data["nom"];?></td>
            <td><?php echo $data["email"];?></td>
            <td><?php echo $data["age"];?></td>
        </tr>  
    </tbody>
        <?php
    }
    $req->closeCursor();
    ?> 
    </table>
</body>
</html>