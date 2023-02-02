<?php

// créer une connexion avec la base de donnée
$pdo = new PDO("mysql:host=localhost;dbname=dam4", "root", "");
// error sql 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 