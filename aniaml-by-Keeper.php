<?php
require_once("util-db.php");
require_once("model-animal-by-keeper.php";

$pageTitle = "animal by Keeper";
include "view-header.php";
$feeding = selectAniamlByKepper($_GET['id');
include "view-animal-by-keeper.php";
include "view-footer.php";
?>
