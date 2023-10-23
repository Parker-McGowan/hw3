<?php
require_once("util-db.php");
require_once("model-animals-by-keepers.php";

$pageTitle = "Animal by Keeper";
include "view-header.php";
$animals = selectAniamlByKepper($_GET['id');
include "view-animal-by-keeper.php";
include "view-footer.php";
?>
