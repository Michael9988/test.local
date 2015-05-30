<?php
$message = "Текст сообщения";
$to = "felix9988@mail.ru";
$from = "felix9988@gmail.ru";
$subject = "Тема сообщения";

$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset = utf-8\r\n";
mail($to, $subject, $message, $headers);
$message = "Сообщение с <b>HTML</b> <i>кодом</i>";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/html; charset = utf-8\r\n";
mail($to, $subject, $message, $headers);
?>
<br />