<?php
require_once("util-db.php");
require_once("model-animals-with-keepers.php");

$pageTitle = "Animals with keepers";
include "view-header.php";
$animals = selectAnimals($_GET['id']);
include "view-animals-with-keepers.php";
include "view-footer.php";
?>
