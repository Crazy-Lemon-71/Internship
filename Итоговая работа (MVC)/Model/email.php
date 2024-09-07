<?php
var_dump($_POST);

mail($_POST["email"], "*Тема сообщения*", "*Текст сообщения*");