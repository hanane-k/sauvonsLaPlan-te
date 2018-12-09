<?php
require "../model/db.php";
require "../model/volonteerManager.php";
if(isset($_GET["id"])) {
    $id = htmlspecialchars($_GET["id"]);
    $volonteer = getVolonteer($id, $db);
}
if(!empty($_POST)) {
    updateUser($_POST, $db);
    header("location:index.php");
    exit;
}
require "../view/updateUserView.php";

?>