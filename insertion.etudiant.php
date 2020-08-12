<?php
$errs=array();
if(isset($_POST["nom"])&& isset($_POST["email"])&& isset($_POST["age"])){
    if(strlen($_POST["submit"])>0){

        if(empty($_POST["nom"])){
            $errs["nom"][]="le nom ne doit pas etre vide";
        }else if(empty($_POST["email"])){
            $errs["email"][]="l'email ne doit pas etre vide";
        }else if(empty($_POST["age"])){
            $errs["age"][]="l'age ne doit pas etre vide";
        }
        else if(count($errs)==0){
            $nom=$_POST["nom"];
            $email=$_POST["email"];
            $age=$_POST["age"]; 
            
            $req=$bdd->prepare("INSERT INTO etudiant(nom,email,age) VALUES (:nom,:email,:age)");
            $req->execute(array(
                'nom'=>$nom,
                'email'=>$email,
                'age'=>$age
            ));
            $message="<strong style=\"color:green\">enregistrement effectuer avec succes</strong>";
            echo $message;
        }
    }
}
?>