<?php
require "../model/db.php";
require "../model/volonteerManager.php";
$id = htmlspecialchars($_GET["id"]);
deleteVolonteer($id, $db);
    header("location:index.php");
    exit;
?>