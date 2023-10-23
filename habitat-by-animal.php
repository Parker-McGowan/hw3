<?php
require_once("util-db.php");
require_once("model-habitat-by-animal.php");

$pageTitle = "Habitat by Animal";
include "view-header.php";
$habitat = selectHabitatbyAnimal($_POST['id']);
include "view-habitat-by-animal.php";
include "view-footer.php";
?>
