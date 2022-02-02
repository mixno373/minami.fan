<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . "/core/db/connect.php";

$news = $bdd->prepare("SELECT * FROM news ORDER BY created_at DESC LIMIT 10");
$news->execute();
