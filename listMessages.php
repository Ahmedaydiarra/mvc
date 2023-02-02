<?php


require_once "manager/database.php";

$stmt = $pdo->prepare("select * from contact order by id asc");
$stmt->execute();

$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);


include "views/listMessages.phtml";