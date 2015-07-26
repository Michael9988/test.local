<?php
require_once "lib/user_class.php";
$user = User::getObject();
$auth = $user->isAuth();
if (isset($_POST["reg"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $reg_success = $user->regUser($login, $password);
} elseif (isset($_POST["auth"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $auth_success = $user->login($login, $password);
    if ($auth_success) {
        header("Location: index.php");
        exit;
    }
}
?>
<html>
    <heade>
        <title>Регистрация и авторизация пользователей</title>
    </heade>
    <body>
        <?php
        if ($auth) {
            echo "Здравствуйте, " . $_SESSION["login"] . " (<a href='logout.php'>Выход</a>)";
        } else {
            if ($_POST["reg"]) {
                if ($reg_success)
                    echo "<span style='color: blue;'>Регистрация прошла успешно</span>";
                else
                    echo "<span style='color: red;'>Ошибка регистрации!</span>";
            }
            elseif ($_POST["auth"]) {
                if (!$auth_success)
                    echo "<span style='color: red;'>Неверное имя пользователя и/или пароль</span>";
            }
            echo '<h1>Регистрация</h1>
        <form name="reg" action="index.php" method="post">
            <table>
                <tr>
                    <td>Логин: </td>
                    <td>
                        <input type="text" name="login">
                    </td>
                </tr>
                <tr>
                    <td>Пароль: </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="reg" value="Зарегистрироваться">
                    </td>
                </tr>
            </table>
        </form>
        <h1>Авторизация</h1>
        <form name="auth" action="index.php" method="post">
            <table>
                <tr>
                    <td>Логин: </td>
                    <td>
                        <input type="text" name="login">
                    </td>
                </tr>
                <tr>
                    <td>Пароль: </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="auth" value="Войти">
            </td>
            </tr>
            </table>
            </form>';
        }
        ?>

    </body>
</html>