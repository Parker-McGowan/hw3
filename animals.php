<?php
require_once("util-db.php");
require_once("model-animals.php");

$pageTitle = "Animals";
include "view-header.php";

if (isset($_POST['actionType'])) {
switch ($_POST['actionType']) { 
  case "Add":
    insertAnimal($_POST['aName'], $_POST['aSpecies'], $_POST['aHabitatid'], $_POST['aKeeperid']);
  break;
  }
}
$animals = selectAnimal();
include "view-animals.php";
include "view-footer.php";
?>
