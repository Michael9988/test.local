<?php

session_start(); //появляется идентификатор сессии и файл на сервере
$count = (isset($_SESSION["count"])) ? $_SESSION["count"] : 0;
$count++;
$_SESSION["count"] = $count;
//$_SESSION["count1"] = 15;
echo "Обновлений страниц: $count раз";
//через 15 минут сессия удаляется автоматически
session_destroy(); //очищаем идентификатор сессии
?>
