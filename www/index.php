<?php

function printResultSet($result_set) {
    echo "Количество записей: " . $result_set->num_rows . "<br />";
    while (($row = $result_set->fetch_assoc()) != FALSE) {
        print_r($row);
        echo "<br />";
    }
    echo "----------------<br />";
}

$mysqli = new mysqli("localhost", "root", "", "mybase");
$mysqli->query("SET NAMES 'utf-8'");
$result_set = $mysqli->query("SELECT `login`, `password` FROM `users`");
printResultSet($result_set);
$result_set = $mysqli->query("SELECT * FROM `users` WHERE `id` >= 57 ORDER BY `login` DESC LIMIT 1, 2");
printResultSet($result_set);
$result_set = $mysqli->query("SELECT COUNT(`id`) FROM `users`");
printResultSet($result_set);
$result_set = $mysqli->query("SELECT * FROM `users` WHERE `login` LIKE '%ser%'");
printResultSet($result_set);
$mysqli->close();
?>