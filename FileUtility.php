<?php

class FileUtility {
    // Method to write data to a file
    public static function writeToFile($filename, $data) {
        file_put_contents($filename, $data);
    }

    // Method to open and read a file
    public static function openFile($filename) {
        return file_get_contents($filename);
    }
}
?>
