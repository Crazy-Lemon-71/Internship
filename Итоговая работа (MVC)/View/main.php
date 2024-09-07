<?php
include"./../model/title news.php";

include"./header.php";
?>

<div class="top-logo">
	<img src="./../images/logo.png" alt="Галактический вестник">
</div>

<div style="background-image: url(./../images/<?=$row["image"]?>);" class="ban-image">
	<section   class="ban-image__text">
		<h1 class="ban-image__text--title"><?=$row["title"]?></h1>
		<p class="ban-image__text--announce"><?=strip_tags($row["announce"])?></p>
	</section>
</div>

<div class="main-info">
	<section class="main-info__title">
			<h1 class="main-info__title--text">Новости</h1>
	</section>

	<section class="main-info__block">
	
	<?php
	include"./../model/block news.php";
	?>

	</section>
</div>
<div class="nav">
	<ul class="nav__elem">
		<li class="nav__elem--button"><button class="nav_elem--buttonNumber">1</button></li>
		<li class="nav__elem--button"><button class="nav_elem--buttonNumber">2</button></li>
		<li class="nav__elem--button"><button class="nav_elem--buttonNumber">3</button></li>
		<?php
		if($menuNumber != 0){ ?>

			<li class="nav__elem--button"><button class="nav_elem--buttonArrow"><div id="arrow-2"></div></button></li>
		
		<?php } ?>
	</ul>
</div>
	
<div>
	<form class = "form">
		<p><label class ="name--text" for = "name--text">Имя пользователя:</label></p>
		<p><input class ="name" type = "text" name = "name"></p>
		<p><label class ="email--text" for = "email--text">Почта:</label></p>
		<p><input class ="email" type = "text" name = "email"></p>
		<p><label class ="message--text" for = "message--text">Сообщение:</label></p>
		<p><input class ="message" type = "text" name = "message"></p>
		<p><input type = "submit" class= "btn-submit" value = "ОТПРАВИТЬ"></p>
	</form>
</div>

<?php
include"./footer.php";