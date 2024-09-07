<?php
include"./../model/required news.php";

include"./header.php";

if($row){
?>

    <div class="top-logo">
        <img src="./../images/logo.png" alt="Галактический вестник">
    </div>

    <hr class="header__line">

    <div class="heading-news">
        <section class="heading-news__block">
            <ul class="heading-news__block--news">
                <li class="heading-news__block--text">Главная / <?=$row["title"]?></li>
                <li class="heading-news__block--title"><h1><?=$row["title"]?></h1></li>
                <li class="heading-news__block--date"><p><?=$row["news_date"]?></p></li>
            </ul>
        </section>
    </div>

    <div class="info-news">
        <section class="info-news__block">
            <ul class ="info-news__block--news">
                <li class="info-news__block--announce"><h2><?=strip_tags($row["announce"])?></h2></li>
                <li class="info-news__block--content"><p><?=$row["content"]?></p></li>
                <li class="info-news__block--button">
                    <a href="main.php" class="info-news__block--button--text"><div id="arrow-3"></div>НАЗАД К НОВОСТЯМ</a></li>
            </ul>
            
            <div class="info-news__block--image"><p>
                    <img src = "./../images/<?=$row["image"]?>"></p></div>
        </section>
    </div>

<?php
}

else{
?>

    <div class="top-logo">
        <img src="./../images/logo.png" alt="Галактический вестник">
    </div>

    <hr class="header__line">

    <div class="error"><h1>Такой новости не сущетвует!</h1></div>

<?php
}

include"./footer.php";