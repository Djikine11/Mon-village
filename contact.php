<?php
 try{

   // $id = $_POST['id'];
    $envoi = $_POST['envoie'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];



   // var_dump($_POST);






    $obj = new PDO('mysql:host=localhost;dbname=missirahprojet;','root','root');
}
catch (Exception $e)
{
    die("Erreur ".$e->getMessage());
}

    //$obj = mysqli_connect("localhost","missirahprojet","root","rot");

    $req = $obj->exec("INSERT INTO `suggestion`(`nom`,`prenom`,`mail`,`message`)

    VALUES ($nom','$prenom','$mail','$message')");
?>
