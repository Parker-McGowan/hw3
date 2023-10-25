<?php
require_once("util-db.php");
require_once("model-habitat.php";

$pageTitle = "Habitat";
include "view-header.php";

$habitat = selectHabitat();
include "view-habitat.php";
include "view-footer.php";
?>
