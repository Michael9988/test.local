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
                </tr>
                <tr>
                    <td>Кому:</td>
                    <td>
                        <input type="text" name="to" value="<?php echo $_SESSION["to"]; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Тема:</td>
                    <td>
                        <input type="text" name="subject" value="<?php echo $_SESSION["subject"]; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Сообщение:</td>
                    <td>
                        <textarea type="message" cols="15" rows="10" ><?php echo $_SESSION["message"]; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="send" value="Отправить"/>
                    </td>

                </tr>
            </table>
        </form>
    </body>
</html>