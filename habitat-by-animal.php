<?php
require_once("util-db.php");
require_once("model-habitat-by-animal.php";

$pageTitle = "Habitat by Aniaml";
include "view-header.php";
$habitat = selectHabitatbyAniaml($_GET['id');
include "view-habitat-by-aniaml.php";
include "view-footer.php";
?>
