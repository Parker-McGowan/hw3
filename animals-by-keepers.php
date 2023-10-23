<?php
require_once("util-db.php");
require_once("model-animal-by-keeper.php";

$pageTitle = "Animal by Keeper";
include "view-header.php";
$animals = selectAniamlByKepper($_GET['id');
include "view-animal-by-keeper.php";
include "view-footer.php";
?>
