<?php

interface FileIO {

    public function read();

    public function write();
}

class Point implements FileIO {

    public function read() {
        echo "Читаем из файла";
    }

    public function write() {
        echo "пишем в файл";
    }

}

$point = new Point();
$point->read();
echo "<br/>";
$point->write();
?>