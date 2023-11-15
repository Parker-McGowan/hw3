<?php
require_once("util-db.php");
require_once("model-animals-chart-db.php");

$pageTitle = "Animals Chart";
include "view-header.php";
$animals = selectAnimal();
include "view-animals-chart.php";
include "view-footer.php";
?>


