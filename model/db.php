<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=environement', "phpmyadmin", "hanane");
}
catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
?>