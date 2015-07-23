<?php

$mysqli = new mysqli("localhost", "root", "", "mybase");
$mysqli->query("SET NAMES 'utf-8'");
$success = $mysqli->query("INSERT INTO `users` (`login`, `password`, `regdate`) VALUES ('User1', '" . md5("123") . "','" . time() . "')");

$last_insert_id = $mysqli->insert_id;

for ($i = 2; $i < 10; $i++) {
    $mysqli->query("INSERT INTO `users` (`login`, `password`, `regdate`) VALUES ('User$i', '" . md5("123") . "','" . time() . "')");
}
echo $last_insert_id;
$mysqli->query("UPDATE `users` SET `regdate`='1' WHERE `id`>5");
$mysqli->query("UPDATE `users` SET `regdate`='111' WHERE `login` = 'MyUser' OR (`id` > 5 AND `id` < 15)");


$mysqli->query("DELETE FROM `users` WHERE `id` > '" . ($last_insert_id - 5) . "'");
$mysqli->close();
?>