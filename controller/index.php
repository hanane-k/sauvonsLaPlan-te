<?php
require "../model/db.php";
require "../model/volonteerManager.php";

$volonteers = getVolonteers($db);

require "../view/indexView.php";

?>