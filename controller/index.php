<?php
require "../model/db.php";
require "../model/volonteerManager.php";

if (!empty($_POST)) {
    $volonteers = sortedVolonteers($_POST, $db);
    var_dump($_POST);
}
else {
    $volonteers = getVolonteers($db);
}
require "../view/indexView.php";

?>