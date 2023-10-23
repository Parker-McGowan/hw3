<?php
require_once("util-db.php");
require_once("model-habitats-by-animal.php";

$pageTitle = "Habitats by Aniaml";
include "view-header.php";
$habitat = selectHabitatsbyAniaml($_POST['aid']);
include "view-habitats-by-aniaml.php";
include "view-footer.php";
?>
