<?php
$menuNumber = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$menuNumber = $_POST["menuNumber"];
}

$db = new PDO("mysql:host=localhost;dbname=student","root","root");
$sql = "SELECT * FROM news ORDER BY `date` DESC LIMIT 1";
$res = $db->query($sql);
$row = $res->fetch();