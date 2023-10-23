<?php
require_once("util-db.php");
require_once("model-habitat-by-animal.php";

$pageTitle = "Habitat by Aniaml";
include "view-header.php";
$habitat = selectHabitatbyAniaml($_POST['aid']);
include "view-habitat-by-animal.php";
include "view-footer.php";
?>
