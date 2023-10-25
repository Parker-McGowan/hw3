<?php
require_once("util-db.php");
require_once("model-animals-with-keepers.php");

$pageTitle = "Animals with Keepers";
include "view-header.php";


$animals = selectAnimals();
include "view-animals-with-keepers.php";
include "view-footer.php";
?>
