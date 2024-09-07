<?php
$db = new PDO("mysql:host=localhost;dbname=student","root","root");

$id = $_GET["id"] ?? 0;

$sql = "SELECT *, DATE_FORMAT(`date`,'%d.%m.%Y') news_date FROM news WHERE id = ?";
$res = $db->prepare($sql);
$res->bindValue(1, $id, PDO::PARAM_INT);
$res->execute();
$row = $res->fetch();