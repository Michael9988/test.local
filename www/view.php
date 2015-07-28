<html>
    <head>

    </head>
    <body>
        <h1>Cтатья</h1>
        <p>Текст статьи...</p>
        <h2>Комментарии</h2>
        
        <?php require_once "comments.php"; ?>
        <?php if (count($array) != 0) { ?>
            <table>
                <?php for ($i = 0; $i < count($array); $i++) { ?>
                    <tr>
                        <td><b><?= $array[$i]["name"] ?>:</b></td>
                        <td><?= $array[$i]["comment"] ?></td>
                    </tr>
                    <tr>
                        <td colspan='2'><hr /></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
        <?php require_once "add_comment.php"; ?>

    </body>
</html>