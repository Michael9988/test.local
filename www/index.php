<?php
session_start();
if (isset($_POST["send"])) {
    $from = $_POST["from"];
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;

    $error_from = "";
    $error_to = "";
    $error_subject = "";
    $error_message = "";

    if (!preg_match("/^[a-z0-9][a-z0-9\.-_]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i", $from)) {
        $error_from = "Некорректный e-mail";
        $error = TRUE;
    }
    if (!preg_match("/^[a-z0-9][a-z0-9\.-_]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i", $to)) {
        $error_to = "Некорректный e-mail";
        $error = TRUE;
    }
    if (strlen($subject) == 0) {
        $error_subject = "Не написана тема";
        $error = TRUE;
    }
    if (strlen($message) == 0) {
        $error_message = "Не написано сообщение";
        $error = TRUE;
    }
    if (!$error) {
        $subject = "=?windows-1251?B?" . base64_encode($subject) . "?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=windows-1251\r\n";
        mail($to, $subject, $message, $headers);
        header("Location: success.php?send=1");
        exit;
    }
}
?>
<html>
    <head>
        <title>Cервис рассылки</title>
    </head>
    <body>
        <h1>Отправить почту!</h1>
        <form name="myform" action="index.php" method="post">
            <table>
                <tr>
                    <td>От кого:</td>
                    <td>
                        <input type="text" name="from" value="<?php echo $_SESSION["from"]; ?>" />
                    </td>
                    <td>
                        <span style="color: red;"><?php echo $error_from; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Кому:</td>
                    <td>
                        <input type="text" name="to" value="<?php echo $_SESSION["to"]; ?>" />
                    </td>
                    <td>
                        <span style="color: red;"><?php echo $error_to; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Тема:</td>
                    <td>
                        <input type="text" name="subject" value="<?php echo $_SESSION["subject"]; ?>" />
                    </td>
                    <td>
                        <span style="color: red;"><?php echo $error_subject; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Сообщение:</td>
                    <td>
                        <textarea name="message" cols="22" rows="10" ><?php echo $_SESSION["message"]; ?></textarea>
                    </td>
                    <td>
                        <span style="color: red;"><?php echo $error_message; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" name="send" value="Отправить"/>
                    </td>

                </tr>
            </table>
        </form>
    </body>
</html>