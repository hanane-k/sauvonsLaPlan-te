<?php
require "../model/db.php";
require "../model/volonteerManager.php";
if (isset($_POST) && !empty($_POST)) {
    insertUser($_POST, $db);
    header("location:index.php");
    exit;
}
require "../view/insertUserView.php";

?>