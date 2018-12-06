<?php
require "../model/db.php";
require "../model/volonteerManager.php";
insertUser($_POST, $db);
var_dump($_POST);
require "../view/insertUserView.php";

?>