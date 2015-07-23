<?php

$mysqli = new mysqli("localhost", "root", "", "mybase");
$mysqli->query("SET NAMES 'utf-8'");
$mysqli->close();
?>