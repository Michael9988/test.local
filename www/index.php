<html>
    <head>

    </head>
    <body>
        <h1>Cтатья</h1>
        <p>Текст статьи...</p>
        <h2>Комментарии</h2>
        <?php

        function transformCommentsToArray() {
            $string = file_get_contents("comments.txt");
            $array = explode("\n", $string);

            for ($i = 0; $i < count($array); $i++) {
                $data = explode(";", $array[$i]);
                $result[$i]["name"] = $data[0];
                $result[$i]["content"] = $data[1];
            }
            return $result;
        }

        $array = transformCommentsToArray();
        if (count($array) != 0) {
            echo "<table>";
            for ($i = 0; $i < count($array); $i++) {
                echo "<tr>";
                echo "<td><b>" . $array[$i]["name"] . "</b></td>";
                echo "<td>" . $array[$i]["content"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='2'><hr /></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </body>
</html>