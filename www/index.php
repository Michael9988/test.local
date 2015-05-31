<?php

//unset($_COOKIE["count"]);
$count = (isset($_COOKIE["count"])) ? $_COOKIE["count"] : 0; //существует ли куки
$count++;
//setcookie("count", $count);
setcookie("count", $count, time() + 5); //время жизни 5 секунд
echo "Количество обновлений: $count раз";
?>
