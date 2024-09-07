<?php
if($menuNumber == "1"){
    $sql = "SELECT *, DATE_FORMAT(`date`,'%d.%m.%Y') news_date FROM news ORDER BY `date` DESC LIMIT 4";
}
else if($menuNumber == "2"){
    $sql = "SELECT *, DATE_FORMAT(`date`,'%d.%m.%Y') news_date FROM news ORDER BY `date` DESC LIMIT 4 OFFSET 4";
}
else if($menuNumber == "3"){
    $sql = "SELECT *, DATE_FORMAT(`date`,'%d.%m.%Y') news_date FROM news ORDER BY `date` DESC LIMIT 4 OFFSET 8";
}
else if($menuNumber == "0"){
    $sql = "SELECT * FROM (SELECT *, DATE_FORMAT(`date`, '%d.%m.%Y') AS news_date FROM news ORDER BY `date` ASC LIMIT 4) AS oldest_news ORDER BY `date` DESC;";
}
else{
    $sql = "SELECT *, DATE_FORMAT(`date`,'%d.%m.%Y') news_date FROM news ORDER BY `date` DESC LIMIT 4";
}

$res = $db->query($sql);
foreach($res->fetchAll() as $row){
?>

    <ul class="main-info__block--news">
        <li class="main-info__block--date"><p><?=$row["news_date"]?></p></li>
        <li class="main-info__block--title"><h2><?=$row["title"]?></h2></li>
        <li class="main-info__block--announce"><p><?=strip_tags($row["announce"])?></p></li>
        <li class="main-info__block--button">
            <a href="news.php?id=<?=$row['id']?>" class="main-info__block--button--text">ПОДРОБНЕЕ<div id="arrow-1"></div></a></li>
    </ul>

<?php
}