<?php
require_once("util-db.php");
require_once("model-feeding-by-keeper.php";

$pageTitle = "Feeding by Keeper";
include "view-header.php";
$feeding = selectFeedingByKepper($_GET['id');
include "view-feeding-by-keeper.php";
include "view-footer.php";
?>
