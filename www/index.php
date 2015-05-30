<?php
$message = "Текст сообщения";
$to = "felix9988@mail.ru";
$from = "felix9988@gmail.ru";
$subject = "Тема сообщения";
$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset = utf-8\r\n";
mail($to, $subject, $message, $headers);
?>
<br />