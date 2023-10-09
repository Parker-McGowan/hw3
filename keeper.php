<?php
require_once("util-db.php");
require_once("model-keeper.php");

$pageTitle = "Keeper";
include "view-header.php";
$keeper = selectKeepers();
include "view-keeper.php";
include "view-footer.php";
?>
