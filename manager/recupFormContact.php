<?php

require_once "database.php";


// executer une requette insert delete update
$stmt = $pdo->prepare("INSERT INTO contact (nom, email, message,dateCreation) VALUES (:nom, :email, :message, now())");
$stmt->bindParam(":nom", $_POST['txtNom']); // txtNom :> contenu de l'input du formulaire (name de l'input) 
$stmt->bindParam(":email", $_POST['txtEmail']);
$stmt->bindParam(":message", $_POST['txtMessage']); 

$stmt->execute(); // executer la requette

header("Location: ../index.php");